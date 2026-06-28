<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsCategoryController extends Controller
{
    public function index(): View
    {
        return view('cms.categories.index', [
            'categories' => Category::query()
                ->withCount('products')
                ->orderBy('name')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('cms.categories.create', [
            'category' => new Category(['status' => 'active']),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Category::create($this->validatedData($request));

        return redirect()->route('cms.categories.index')->with('status', 'Category created successfully.');
    }

    public function edit(Category $category): View
    {
        return view('cms.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $category->update($this->validatedData($request, $category));

        return redirect()->route('cms.categories.index')->with('status', 'Category updated successfully.');
    }

    public function destroy(Category $category): RedirectResponse
    {
        if ($category->image && str_starts_with($category->image, 'storage/categories/')) {
            Storage::disk('public')->delete(str_replace('storage/', '', $category->image));
        }

        $category->delete();

        return redirect()->route('cms.categories.index')->with('status', 'Category deleted successfully.');
    }

    private function validatedData(Request $request, ?Category $category = null): array
    {
        $categoryId = $category?->id;

        $data = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'slug' => ['nullable', 'string', 'max:150', Rule::unique('categories', 'slug')->ignore($categoryId)],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        $data['slug'] = $this->uniqueSlug($data['slug'] ?: Str::slug($data['name']), $categoryId);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('categories', 'public');
            $data['image'] = 'storage/'.$path;

            if ($category?->image && str_starts_with($category->image, 'storage/categories/')) {
                Storage::disk('public')->delete(str_replace('storage/', '', $category->image));
            }
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
            Category::query()
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
