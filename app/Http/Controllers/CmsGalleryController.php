<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsGalleryController extends Controller
{
    private const CATEGORIES = [
        'Safety',
        'PPE',
        'Safety Uniforms',
        'Footwear',
        'Branding',
        'Printing',
        'Embroidery',
        'Fire Safety',
        'Supply',
        'Client Deliveries',
    ];

    public function index(): View
    {
        return view('cms.gallery.index', [
            'galleryImages' => GalleryImage::query()
                ->orderByDesc('created_at')
                ->orderByDesc('id')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('cms.gallery.create', [
            'galleryImage' => new GalleryImage(['status' => 'active']),
            'galleryCategories' => self::CATEGORIES,
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        GalleryImage::create($this->validatedData($request));

        return redirect()->route('cms.gallery.index')->with('status', 'Gallery image created successfully.');
    }

    public function edit(GalleryImage $gallery): View
    {
        return view('cms.gallery.edit', [
            'galleryImage' => $gallery,
            'galleryCategories' => self::CATEGORIES,
        ]);
    }

    public function update(Request $request, GalleryImage $gallery): RedirectResponse
    {
        $gallery->update($this->validatedData($request, $gallery));

        return redirect()->route('cms.gallery.index')->with('status', 'Gallery image updated successfully.');
    }

    public function destroy(GalleryImage $gallery): RedirectResponse
    {
        if ($gallery->image && str_starts_with($gallery->image, 'storage/gallery/')) {
            $imagePath = public_path($gallery->image);

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $gallery->delete();

        return redirect()->route('cms.gallery.index')->with('status', 'Gallery image deleted successfully.');
    }

    private function validatedData(Request $request, ?GalleryImage $galleryImage = null): array
    {
        $rules = [
            'title' => ['nullable', 'string', 'max:150'],
            'category' => ['required', Rule::in(self::CATEGORIES)],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ];

        $rules['image'] = $galleryImage
            ? ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096']
            : ['required', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'];

        $data = $request->validate($rules);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $filename = time().'_'.$image->getClientOriginalName();

            $destinationPath = public_path('storage/gallery');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $image->move($destinationPath, $filename);

            $data['image'] = 'storage/gallery/'.$filename;

            if ($galleryImage?->image && str_starts_with($galleryImage->image, 'storage/gallery/')) {
                $oldImagePath = public_path($galleryImage->image);

                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        } else {
            unset($data['image']);
        }

        return $data;
    }
}