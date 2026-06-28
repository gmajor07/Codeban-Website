<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Section;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PublicHomeController extends Controller
{
    public function index(): View
    {
        $homeServices = collect();
        $homeImages = [
            'hero_main' => 'img/bg-img/1.jpg',
            'hero_accent' => 'img/bg-img/3.jpg',
            'why_us' => 'img/bg-img/5.jpg',
            'cta_banner' => 'img/bg-img/6.jpg',
            'featured_product_1' => 'img/bg-img/10.jpg',
            'featured_product_2' => 'img/bg-img/11.jpg',
            'featured_product_3' => 'img/bg-img/12.jpg',
        ];

        if (Schema::hasTable('services')) {
            $homeServices = Service::query()
                ->where('status', 'active')
                ->orderBy('sort_order')
                ->orderBy('title')
                ->limit(6)
                ->get();
        }

        if (Schema::hasTable('sections')) {
            $sectionImages = Section::query()
                ->whereIn('section_key', [
                    'home_hero_main',
                    'home_hero_accent',
                    'home_why_us',
                    'home_cta_banner',
                    'home_featured_product_1',
                    'home_featured_product_2',
                    'home_featured_product_3',
                ])
                ->where('status', 'active')
                ->pluck('image', 'section_key');

            $homeImages['hero_main'] = $sectionImages->get('home_hero_main', $homeImages['hero_main']);
            $homeImages['hero_accent'] = $sectionImages->get('home_hero_accent', $homeImages['hero_accent']);
            $homeImages['why_us'] = $sectionImages->get('home_why_us', $homeImages['why_us']);
            $homeImages['cta_banner'] = $sectionImages->get('home_cta_banner', $homeImages['cta_banner']);
            $homeImages['featured_product_1'] = $sectionImages->get('home_featured_product_1', $homeImages['featured_product_1']);
            $homeImages['featured_product_2'] = $sectionImages->get('home_featured_product_2', $homeImages['featured_product_2']);
            $homeImages['featured_product_3'] = $sectionImages->get('home_featured_product_3', $homeImages['featured_product_3']);
        }

        return view('index', [
            'homeServices' => $homeServices,
            'homeImages' => $homeImages,
        ]);
    }
}
