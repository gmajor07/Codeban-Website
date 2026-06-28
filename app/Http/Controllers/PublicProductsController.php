<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;

class PublicProductsController extends Controller
{
    public function index(): View
    {
        $products = collect();
        $categories = collect();
        $featuredProducts = collect();

        if (Schema::hasTable('products')) {
            $products = Product::query()
                ->with('category')
                ->where('status', 'active')
                ->latest('created_at')
                ->get();

            $featuredProducts = Product::query()
                ->with('category')
                ->where('status', 'active')
                ->where('featured', true)
                ->latest('created_at')
                ->limit(3)
                ->get();
        }

        if (Schema::hasTable('categories')) {
            $categories = Category::query()
                ->withCount(['products' => fn ($query) => $query->where('status', 'active')])
                ->where('status', 'active')
                ->orderBy('name')
                ->get();
        }

        return view('post', compact('products', 'categories', 'featuredProducts'));
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
