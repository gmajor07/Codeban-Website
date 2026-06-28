<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsPageImageController extends Controller
{
    private const HOME_IMAGE_SLOTS = [
        'home_hero_main' => ['label' => 'Home Hero Main Image', 'default' => 'img/bg-img/1.jpg', 'sort' => 10],
        'home_hero_accent' => ['label' => 'Home Hero Small Image', 'default' => 'img/bg-img/3.jpg', 'sort' => 20],
        'home_why_us' => ['label' => 'Home Why Us Image', 'default' => 'img/bg-img/5.jpg', 'sort' => 30],
        'home_cta_banner' => ['label' => 'Home CTA Banner Background', 'default' => 'img/bg-img/6.jpg', 'sort' => 40],
        'home_featured_product_1' => ['label' => 'Home Featured Product Image 1', 'default' => 'img/bg-img/10.jpg', 'sort' => 50],
        'home_featured_product_2' => ['label' => 'Home Featured Product Image 2', 'default' => 'img/bg-img/11.jpg', 'sort' => 60],
        'home_featured_product_3' => ['label' => 'Home Featured Product Image 3', 'default' => 'img/bg-img/12.jpg', 'sort' => 70],
    ];

    public function index(): View
    {
        $page = $this->homePage();
        $sections = collect(self::HOME_IMAGE_SLOTS)->map(function (array $slot, string $key) use ($page) {
            return Section::query()->firstOrCreate(
                ['page_id' => $page->id, 'section_key' => $key],
                [
                    'title' => $slot['label'],
                    'image' => $slot['default'],
                    'sort_order' => $slot['sort'],
                    'status' => 'active',
                ]
            );
        });

        return view('cms.page-images.index', [
            'sections' => $sections,
            'slots' => self::HOME_IMAGE_SLOTS,
        ]);
    }

    public function edit(Section $section): View
    {
        return view('cms.page-images.edit', [
            'section' => $section,
            'slot' => self::HOME_IMAGE_SLOTS[$section->section_key] ?? ['label' => $section->title, 'default' => $section->image],
        ]);
    }

    public function update(Request $request, Section $section): RedirectResponse
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:200'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('page-images', 'public');
            $data['image'] = 'storage/'.$path;

            if ($section->image && str_starts_with($section->image, 'storage/page-images/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $section->image));
            }
        } else {
            unset($data['image']);
        }

        $section->update($data);

        return redirect()->route('cms.page-images.index')->with('status', 'Page image updated successfully.');
    }

    private function homePage(): Page
    {
        return Page::query()->firstOrCreate(
            ['slug' => 'home'],
            ['title' => 'Home', 'status' => 'published']
        );
    }
}
