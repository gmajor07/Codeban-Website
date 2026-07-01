<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsTestimonialController extends Controller
{
    public function index(): View
    {
        return view('cms.testimonials.index', [
            'testimonials' => Testimonial::query()
                ->orderBy('client_name')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('cms.testimonials.create', [
            'testimonial' => new Testimonial(['status' => 'active']),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Testimonial::create($this->validatedData($request));

        return redirect()->route('cms.testimonials.index')->with('status', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial): View
    {
        return view('cms.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial): RedirectResponse
    {
        $testimonial->update($this->validatedData($request, $testimonial));

        return redirect()->route('cms.testimonials.index')->with('status', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $this->deletePublicUpload($testimonial->image, 'testimonials');

        $testimonial->delete();

        return redirect()->route('cms.testimonials.index')->with('status', 'Testimonial deleted successfully.');
    }

    private function validatedData(Request $request, ?Testimonial $testimonial = null): array
    {
        $data = $request->validate([
            'client_name' => ['required', 'string', 'max:150'],
            'company' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $this->storePublicUpload($request->file('image'), 'testimonials');
            $this->deletePublicUpload($testimonial?->image, 'testimonials');
        } else {
            unset($data['image']);
        }

        return $data;
    }
}
