<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CmsProductController extends Controller
{
    public function index(): View
    {
        return view('cms.products.index', [
            'products' => Product::query()
                ->with('category')
                ->latest('created_at')
                ->get(),
        ]);
    }

    public function create(): View
    {
        return view('cms.products.create', [
            'product' => new Product(['status' => 'active', 'featured' => false]),
            'categories' => $this->categoryOptions(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        Product::create($this->validatedData($request));

        return redirect()->route('cms.products.index')->with('status', 'Product created successfully.');
    }

    public function edit(Product $product): View
    {
        return view('cms.products.edit', [
            'product' => $product,
            'categories' => $this->categoryOptions(),
        ]);
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $product->update($this->validatedData($request, $product));

        return redirect()->route('cms.products.index')->with('status', 'Product updated successfully.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $this->deletePublicUpload($product->image, 'products');

        $product->delete();

        return redirect()->route('cms.products.index')->with('status', 'Product deleted successfully.');
    }

    private function validatedData(Request $request, ?Product $product = null): array
    {
        $productId = $product?->id;

        $data = $request->validate([
            'category_id' => ['nullable', 'exists:categories,id'],
            'name' => ['required', 'string', 'max:200'],
            'slug' => ['nullable', 'string', 'max:200', Rule::unique('products', 'slug')->ignore($productId)],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,gif', 'max:4096'],
            'featured' => ['nullable', 'boolean'],
            'status' => ['required', Rule::in(['active', 'inactive'])],
        ]);

        $data['slug'] = $this->uniqueSlug($data['slug'] ?: Str::slug($data['name']), $productId);
        $data['featured'] = $request->boolean('featured');

        if ($request->hasFile('image')) {
            $data['image'] = $this->storePublicUpload($request->file('image'), 'products');
            $this->deletePublicUpload($product?->image, 'products');
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
            Product::query()
                ->where('slug', $candidate)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $candidate = $baseSlug.'-'.$counter;
            $counter++;
        }

        return $candidate;
    }

    private function categoryOptions()
    {
        return Category::query()
            ->orderBy('name')
            ->get(['id', 'name']);
    }
}
