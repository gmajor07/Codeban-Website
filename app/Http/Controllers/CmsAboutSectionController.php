<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsAboutSectionController extends Controller
{
    private const FIXED_SECTIONS = [
        'about_hero' => ['label' => 'About Hero', 'title' => 'Building Trust Since 2013', 'subtitle' => 'Our Story', 'content' => '', 'image' => 'img/bg-img/13.jpg', 'sort' => 10],
        'about_intro' => ['label' => 'About Intro Content', 'title' => 'A Firm Built on Integrity & Results', 'subtitle' => 'Who We Are', 'content' => 'Codeban Company Limited is a local multi-work company established in 2013. We provide industrial safety materials, safety uniforms, official uniforms, equipment, building renovation support, banners, sewing, embroidery, and branding solutions. Our goal is to deliver reliable products and professional services with integrity, quality, and customer satisfaction.', 'image' => '', 'sort' => 20],
        'about_intro_main_image' => ['label' => 'About Main Image', 'title' => 'About Main Image', 'subtitle' => '', 'content' => '', 'image' => 'img/bg-img/14.jpg', 'sort' => 30],
        'about_intro_accent_image' => ['label' => 'About Accent Image', 'title' => 'About Accent Image', 'subtitle' => '', 'content' => '', 'image' => 'img/bg-img/5.jpg', 'sort' => 40],
        'about_mission' => ['label' => 'Mission', 'title' => 'Our Mission', 'subtitle' => 'fa fa-bullseye', 'content' => 'To offer excellent services in each of our professional disciplines in accordance with statutory practices, codes, and integrity.', 'image' => '', 'sort' => 50],
        'about_vision' => ['label' => 'Vision', 'title' => 'Our Vision', 'subtitle' => 'fa fa-eye', 'content' => 'To be the most distinguished private company offering the best products and services in Tanzania and beyond.', 'image' => '', 'sort' => 60],
        'about_values' => ['label' => 'Values / Approach', 'title' => 'Our Approach', 'subtitle' => 'fa fa-heart', 'content' => 'We believe teamwork, clear communication, and professional project management are key to delivering successful results for every client.', 'image' => '', 'sort' => 70],
    ];

    private const DEFAULT_FEATURES = [
        'about_feature_1' => ['label' => 'About Feature 1', 'title' => 'PPE products and industrial safety materials', 'subtitle' => 'fa fa-check', 'content' => '', 'image' => '', 'sort' => 80],
        'about_feature_2' => ['label' => 'About Feature 2', 'title' => 'Safety uniforms and official uniforms', 'subtitle' => 'fa fa-check', 'content' => '', 'image' => '', 'sort' => 90],
        'about_feature_3' => ['label' => 'About Feature 3', 'title' => 'Banners, sewing, embroidery, and branding', 'subtitle' => 'fa fa-check', 'content' => '', 'image' => '', 'sort' => 100],
        'about_feature_4' => ['label' => 'About Feature 4', 'title' => 'Reliable service with integrity and quality', 'subtitle' => 'fa fa-check', 'content' => '', 'image' => '', 'sort' => 110],
    ];

    private const DEFAULT_WORK_CARDS = [
        'about_work_1' => ['label' => 'Our Work Card 1', 'title' => 'PPE Supply', 'subtitle' => 'Safety Materials & Equipment', 'content' => '', 'image' => 'img/bg-img/15.jpg', 'sort' => 120],
        'about_work_2' => ['label' => 'Our Work Card 2', 'title' => 'Uniform Services', 'subtitle' => 'Safety & Official Uniforms', 'content' => '', 'image' => 'img/bg-img/16.jpg', 'sort' => 130],
        'about_work_3' => ['label' => 'Our Work Card 3', 'title' => 'Branding', 'subtitle' => 'Banners, Sewing & Embroidery', 'content' => '', 'image' => 'img/bg-img/17.jpg', 'sort' => 140],
        'about_work_4' => ['label' => 'Our Work Card 4', 'title' => 'Project Support', 'subtitle' => 'Renovation & Business Solutions', 'content' => '', 'image' => 'img/bg-img/18.jpg', 'sort' => 150],
    ];

    public function index(): View
    {
        $page = Page::query()->firstOrCreate(['slug' => 'about'], ['title' => 'About', 'status' => 'published']);

        collect(self::FIXED_SECTIONS)->each(fn (array $slot, string $key) => Section::query()->firstOrCreate(
            ['page_id' => $page->id, 'section_key' => $key],
            [
                'title' => $slot['title'],
                'subtitle' => $slot['subtitle'],
                'content' => $slot['content'],
                'image' => $slot['image'],
                'sort_order' => $slot['sort'],
                'status' => 'active',
            ]
        ));

        if (! Section::query()->where('page_id', $page->id)->where('section_key', 'like', 'about_feature_%')->exists()) {
            $this->seedListSections($page, self::DEFAULT_FEATURES);
        }

        if (! Section::query()->where('page_id', $page->id)->where('section_key', 'like', 'about_work_%')->exists()) {
            $this->seedListSections($page, self::DEFAULT_WORK_CARDS);
        }

        $sections = Section::query()
            ->where('page_id', $page->id)
            ->where(function ($query) {
                $query->whereIn('section_key', array_keys(self::FIXED_SECTIONS))
                    ->orWhere('section_key', 'like', 'about_feature_%')
                    ->orWhere('section_key', 'like', 'about_work_%');
            })
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('cms.about-sections.index', [
            'sections' => $sections,
            'labels' => $this->labels(),
            'fixedKeys' => array_keys(self::FIXED_SECTIONS),
        ]);
    }

    public function create(Request $request): View
    {
        $type = $request->query('type') === 'work' ? 'work' : 'feature';

        return view('cms.about-sections.create', [
            'type' => $type,
            'section' => new Section([
                'title' => '',
                'subtitle' => $type === 'work' ? '' : 'fa fa-check',
                'status' => 'active',
                'sort_order' => $this->nextSortOrder($type),
            ]),
            'label' => $type === 'work' ? 'Add Our Work Card' : 'Add About Feature',
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $type = $request->input('type') === 'work' ? 'work' : 'feature';
        $data = $this->validatedData($request);
        $data['page_id'] = $this->aboutPage()->id;
        $data['section_key'] = $this->uniqueListKey($type);
        $data['sort_order'] = $data['sort_order'] ?? $this->nextSortOrder($type);
        $data['image'] = $this->storeImage($request, null, $data);

        Section::create($data);

        return redirect()->route('cms.about-sections.index')->with('status', 'About item added successfully.');
    }

    public function edit(Section $section): View
    {
        return view('cms.about-sections.edit', [
            'section' => $section,
            'label' => $this->labelFor($section),
            'isFixed' => array_key_exists($section->section_key, self::FIXED_SECTIONS),
        ]);
    }

    public function update(Request $request, Section $section): RedirectResponse
    {
        $data = $this->validatedData($request);
        $image = $this->storeImage($request, $section, $data);

        if ($image !== null) {
            $data['image'] = $image;
        } else {
            unset($data['image']);
        }

        $section->update($data);

        return redirect()->route('cms.about-sections.index')->with('status', 'About section updated successfully.');
    }

    public function destroy(Section $section): RedirectResponse
    {
        if (array_key_exists($section->section_key, self::FIXED_SECTIONS)) {
            return redirect()->route('cms.about-sections.index')->with('status', 'This core About section cannot be deleted.');
        }

        if ($section->image && str_starts_with($section->image, 'storage/about-sections/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $section->image));
        }

        $section->delete();

        return redirect()->route('cms.about-sections.index')->with('status', 'About item deleted successfully.');
    }

    private function validatedData(Request $request): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:200'],
            'subtitle' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);
    }

    private function storeImage(Request $request, ?Section $section, array $data): ?string
    {
        if (! $request->hasFile('image')) {
            return null;
        }

        $path = $request->file('image')->store('about-sections', 'public');

        if ($section?->image && str_starts_with($section->image, 'storage/about-sections/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $section->image));
        }

        return 'storage/'.$path;
    }

    private function seedListSections(Page $page, array $sections): void
    {
        foreach ($sections as $key => $slot) {
            Section::query()->firstOrCreate(
                ['page_id' => $page->id, 'section_key' => $key],
                [
                    'title' => $slot['title'],
                    'subtitle' => $slot['subtitle'],
                    'content' => $slot['content'],
                    'image' => $slot['image'],
                    'sort_order' => $slot['sort'],
                    'status' => 'active',
                ]
            );
        }
    }

    private function aboutPage(): Page
    {
        return Page::query()->firstOrCreate(['slug' => 'about'], ['title' => 'About', 'status' => 'published']);
    }

    private function labels(): array
    {
        return collect(self::FIXED_SECTIONS + self::DEFAULT_FEATURES + self::DEFAULT_WORK_CARDS)
            ->mapWithKeys(fn (array $slot, string $key) => [$key => $slot['label']])
            ->all();
    }

    private function labelFor(Section $section): string
    {
        if (isset($this->labels()[$section->section_key])) {
            return $this->labels()[$section->section_key];
        }

        return str_starts_with($section->section_key, 'about_work_') ? 'Our Work Card' : 'About Feature';
    }

    private function nextSortOrder(string $type): int
    {
        $prefix = $type === 'work' ? 'about_work_%' : 'about_feature_%';

        return ((int) Section::query()
            ->where('page_id', $this->aboutPage()->id)
            ->where('section_key', 'like', $prefix)
            ->max('sort_order')) + 10;
    }

    private function uniqueListKey(string $type): string
    {
        $prefix = $type === 'work' ? 'about_work_custom_' : 'about_feature_custom_';

        do {
            $key = $prefix.strtolower(str()->random(8));
        } while (Section::query()->where('section_key', $key)->exists());

        return $key;
    }
}
