<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsGalleryController extends Controller
{
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
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        GalleryImage::create($this->validatedData($request));

        return redirect()->route('cms.gallery.index')->with('status', 'Gallery image created successfully.');
    }

    public function edit(GalleryImage $gallery): View
    {
        return view('cms.gallery.edit', ['galleryImage' => $gallery]);
    }

    public function update(Request $request, GalleryImage $gallery): RedirectResponse
    {
        $gallery->update($this->validatedData($request, $gallery));

        return redirect()->route('cms.gallery.index')->with('status', 'Gallery image updated successfully.');
    }

    public function destroy(GalleryImage $gallery): RedirectResponse
    {
        if ($gallery->image && str_starts_with($gallery->image, 'storage/gallery/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $gallery->image));
        }

        $gallery->delete();

        return redirect()->route('cms.gallery.index')->with('status', 'Gallery image deleted successfully.');
    }

    private function validatedData(Request $request, ?GalleryImage $galleryImage = null): array
    {
        $rules = [
            'title' => ['nullable', 'string', 'max:150'],
            'category' => ['nullable', 'string', 'max:100'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ];

        $rules['image'] = $galleryImage
            ? ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096']
            : ['required', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'];

        $data = $request->validate($rules);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('gallery', 'public');
            $data['image'] = 'storage/'.$path;

            if ($galleryImage?->image && str_starts_with($galleryImage->image, 'storage/gallery/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $galleryImage->image));
            }
        } else {
            unset($data['image']);
        }

        return $data;
    }
}
