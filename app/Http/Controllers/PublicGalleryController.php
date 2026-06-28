<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PublicGalleryController extends Controller
{
    public function index(): View
    {
        $galleryImages = collect();
        $categories = collect();

        if (Schema::hasTable('gallery')) {
            $galleryImages = GalleryImage::query()
                ->where('status', 'active')
                ->orderByDesc('created_at')
                ->orderByDesc('id')
                ->get();

            $categories = $galleryImages
                ->pluck('category')
                ->filter()
                ->unique()
                ->values();
        }

        return view('gallery', compact('galleryImages', 'categories'));
    }
}
