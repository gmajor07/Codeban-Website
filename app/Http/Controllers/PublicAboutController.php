<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PublicAboutController extends Controller
{
    public function index(): View
    {
        $aboutSections = $this->defaults();
        $aboutFeatures = $this->defaultFeatures();
        $aboutWorkCards = $this->defaultWorkCards();

        if (Schema::hasTable('sections')) {
            $sections = Section::query()
                ->whereIn('section_key', array_keys($aboutSections))
                ->where('status', 'active')
                ->get()
                ->keyBy('section_key');

            foreach ($aboutSections as $key => $default) {
                if ($sections->has($key)) {
                    $section = $sections->get($key);
                    $aboutSections[$key] = [
                        'title' => $section->title ?: $default['title'],
                        'subtitle' => $section->subtitle ?: $default['subtitle'],
                        'content' => $section->content ?: $default['content'],
                        'image' => $section->image ?: $default['image'],
                    ];
                }
            }

            $featureRows = Section::query()
                ->where('section_key', 'like', 'about_feature_%')
                ->where('status', 'active')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();

            if ($featureRows->isNotEmpty()) {
                $aboutFeatures = $featureRows->map(fn (Section $section) => [
                    'title' => $section->title,
                    'subtitle' => $section->subtitle ?: 'fa fa-check',
                ])->all();
            }

            $workRows = Section::query()
                ->where('section_key', 'like', 'about_work_%')
                ->where('status', 'active')
                ->orderBy('sort_order')
                ->orderBy('id')
                ->get();

            if ($workRows->isNotEmpty()) {
                $aboutWorkCards = $workRows->map(fn (Section $section) => [
                    'title' => $section->title,
                    'subtitle' => $section->subtitle,
                    'image' => $section->image ?: 'img/bg-img/15.jpg',
                ])->all();
            }
        }

        return view('about', compact('aboutSections', 'aboutFeatures', 'aboutWorkCards'));
    }

    private function defaults(): array
    {
        return [
            'about_hero' => ['title' => 'Building Trust Since 2013', 'subtitle' => 'Our Story', 'content' => '', 'image' => 'img/bg-img/13.jpg'],
            'about_intro' => ['title' => 'A Firm Built on Integrity & Results', 'subtitle' => 'Who We Are', 'content' => 'Codeban Company Limited is a local multi-work company established in 2013. We provide industrial safety materials, safety uniforms, official uniforms, equipment, building renovation support, banners, sewing, embroidery, and branding solutions. Our goal is to deliver reliable products and professional services with integrity, quality, and customer satisfaction.', 'image' => ''],
            'about_intro_main_image' => ['title' => 'About Main Image', 'subtitle' => '', 'content' => '', 'image' => 'img/bg-img/14.jpg'],
            'about_intro_accent_image' => ['title' => 'About Accent Image', 'subtitle' => '', 'content' => '', 'image' => 'img/bg-img/5.jpg'],
            'about_mission' => ['title' => 'Our Mission', 'subtitle' => 'fa fa-bullseye', 'content' => 'To offer excellent services in each of our professional disciplines in accordance with statutory practices, codes, and integrity.', 'image' => ''],
            'about_vision' => ['title' => 'Our Vision', 'subtitle' => 'fa fa-eye', 'content' => 'To be the most distinguished private company offering the best products and services in Tanzania and beyond.', 'image' => ''],
            'about_values' => ['title' => 'Our Approach', 'subtitle' => 'fa fa-heart', 'content' => 'We believe teamwork, clear communication, and professional project management are key to delivering successful results for every client.', 'image' => ''],
        ];
    }

    private function defaultFeatures(): array
    {
        return [
            ['title' => 'PPE products and industrial safety materials', 'subtitle' => 'fa fa-check'],
            ['title' => 'Safety uniforms and official uniforms', 'subtitle' => 'fa fa-check'],
            ['title' => 'Banners, sewing, embroidery, and branding', 'subtitle' => 'fa fa-check'],
            ['title' => 'Reliable service with integrity and quality', 'subtitle' => 'fa fa-check'],
        ];
    }

    private function defaultWorkCards(): array
    {
        return [
            ['title' => 'PPE Supply', 'subtitle' => 'Safety Materials & Equipment', 'image' => 'img/bg-img/15.jpg'],
            ['title' => 'Uniform Services', 'subtitle' => 'Safety & Official Uniforms', 'image' => 'img/bg-img/16.jpg'],
            ['title' => 'Branding', 'subtitle' => 'Banners, Sewing & Embroidery', 'image' => 'img/bg-img/17.jpg'],
            ['title' => 'Project Support', 'subtitle' => 'Renovation & Business Solutions', 'image' => 'img/bg-img/18.jpg'],
        ];
    }
}
