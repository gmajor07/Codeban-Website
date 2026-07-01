<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsServiceController extends Controller
{
    public function index(): View
    {
        return view('cms.services.index', [
            'services' => Service::query()
                ->orderBy('sort_order')
                ->orderBy('title')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('cms.services.create', [
            'service' => new Service([
                'status' => 'active',
                'sort_order' => 0,
                'icon' => 'fa fa-shield',
            ]),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Service::create($this->validatedData($request));

        return redirect()->route('cms.services.index')->with('status', 'Service created successfully.');
    }

    public function edit(Service $service): View
    {
        return view('cms.services.edit', [
            'service' => $service,
        ]);
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $service->update($this->validatedData($request, $service));

        return redirect()->route('cms.services.index')->with('status', 'Service updated successfully.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $this->deletePublicUpload($service->image, 'services');

        $service->delete();

        return redirect()->route('cms.services.index')->with('status', 'Service deleted successfully.');
    }

    private function validatedData(Request $request, ?Service $service = null): array
    {
        $serviceId = $service?->id;

        $data = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'slug' => ['nullable', 'string', 'max:150', Rule::unique('services', 'slug')->ignore($serviceId)],
            'description' => ['nullable', 'string'],
            'icon' => ['nullable', 'string', 'max:100'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        $data['slug'] = $this->uniqueSlug($data['slug'] ?: Str::slug($data['title']), $serviceId);
        $data['sort_order'] = $data['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $data['image'] = $this->storePublicUpload($request->file('image'), 'services');
            $this->deletePublicUpload($service?->image, 'services');
        } else {
            unset($data['image']);
        }

        return $data;
    }

    private function uniqueSlug(string $slug, ?int $ignoreId = null): string
    {
        $baseSlug = $slug ?: Str::random(8);
        $candidate = $baseSlug;
        $counter = 2;

        while (
            Service::query()
                ->where('slug', $candidate)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $candidate = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $candidate;
    }
}
