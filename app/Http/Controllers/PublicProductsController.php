<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PublicProductsController extends Controller
{
    public function index(Request $request): View
    {
        $products = new LengthAwarePaginator([], 0, 12);
        $categories = collect();
        $featuredProducts = collect();
        $search = trim((string) $request->query('search', ''));
        $categorySlug = (string) $request->query('category', '');
        $hasProductFilters = $search !== '' || $categorySlug !== '';
        $hasCategoriesTable = Schema::hasTable('categories');

        if (Schema::hasTable('products')) {
            $productsQuery = Product::query()
                ->with('category')
                ->where('status', 'active');

            if ($search !== '') {
                $productsQuery->where(function ($query) use ($search, $hasCategoriesTable) {
                    $query->where('name', 'like', '%'.$search.'%')
                        ->orWhere('description', 'like', '%'.$search.'%');

                    if ($hasCategoriesTable) {
                        $query->orWhereHas('category', fn ($categoryQuery) => $categoryQuery->where('name', 'like', '%'.$search.'%'));
                    }
                });
            }

            if ($categorySlug !== '' && $hasCategoriesTable) {
                $productsQuery->whereHas('category', fn ($query) => $query->where('slug', $categorySlug));
            }

            $products = $productsQuery
                ->latest('created_at')
                ->paginate(12)
                ->withQueryString();

            $featuredProducts = Product::query()
                ->with('category')
                ->where('status', 'active')
                ->where('featured', true)
                ->latest('created_at')
                ->limit(3)
                ->get();
        }

        if ($hasCategoriesTable) {
            $categories = Category::query()
                ->withCount(['products' => fn ($query) => $query->where('status', 'active')])
                ->where('status', 'active')
                ->orderBy('name')
                ->get();
        }

        return view('post', compact('products', 'categories', 'featuredProducts', 'search', 'categorySlug', 'hasProductFilters'));
    }

    public function show(Product $product): View
    {
        abort_if($product->status !== 'active', 404);

        $product->load('category');

        $categories = Schema::hasTable('categories')
            ? Category::query()
                ->withCount(['products' => fn ($query) => $query->where('status', 'active')])
                ->where('status', 'active')
                ->orderBy('name')
                ->get()
            : collect();

        $featuredProducts = Schema::hasTable('products')
            ? Product::query()
                ->with('category')
                ->where('status', 'active')
                ->where('featured', true)
                ->where('id', '!=', $product->id)
                ->latest('created_at')
                ->limit(3)
                ->get()
            : collect();

        return view('single-post', compact('product', 'categories', 'featuredProducts'));
    }
}
