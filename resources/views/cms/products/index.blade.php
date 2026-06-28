<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products - Codeban CMS</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    <aside class="ve-cms-sidebar">
        <a href="{{ route('cms.dashboard') }}" class="ve-cms-brand"><span class="ve-logo-icon">C</span><span>Codeban CMS</span></a>
        <nav class="ve-cms-nav"><a href="{{ route('cms.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a><a href="{{ route('cms.settings.edit') }}"><i class="fa fa-cog"></i> Site Settings</a><a href="{{ route('cms.services.index') }}"><i class="fa fa-briefcase"></i> Services</a><a href="{{ route('cms.products.index') }}" class="active"><i class="fa fa-tags"></i> Products</a><a href="{{ route('cms.clients.index') }}"><i class="fa fa-users"></i> Clients</a><a href="{{ route('cms.testimonials.index') }}"><i class="fa fa-star"></i> Testimonials</a><a href="{{ route('cms.gallery.index') }}"><i class="fa fa-image"></i> Gallery</a><a href="{{ route('cms.messages.index') }}"><i class="fa fa-envelope"></i> Messages</a></nav>
    </aside>
    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div><span class="ve-section-tag">Products</span><h1>Manage Products</h1></div>
            <div class="ve-cms-actions"><a href="{{ route('cms.categories.index') }}" class="ve-cms-view-site"><i class="fa fa-folder"></i> Categories</a><a href="{{ route('cms.products.create') }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add Product</a><a href="{{ route('products') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Page</a></div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-table-panel"><table class="ve-cms-table"><thead><tr><th>Product</th><th>Category</th><th>Featured</th><th>Status</th><th>Actions</th></tr></thead><tbody>
            @forelse ($products as $product)
                <tr><td><strong>{{ $product->name }}</strong><span>{{ $product->slug }}</span></td><td>{{ $product->category?->name ?? 'Uncategorized' }}</td><td>{{ $product->featured ? 'Yes' : 'No' }}</td><td><span class="ve-cms-badge {{ $product->status === 'active' ? 'is-active' : 'is-inactive' }}">{{ $product->status }}</span></td><td><div class="ve-cms-row-actions"><a href="{{ route('cms.products.edit', $product) }}"><i class="fa fa-pencil"></i> Edit</a><form action="{{ route('cms.products.destroy', $product) }}" method="post" onsubmit="return confirm('Delete this product?');">@csrf @method('DELETE')<button type="submit"><i class="fa fa-trash"></i> Delete</button></form></div></td></tr>
            @empty
                <tr><td colspan="5" class="ve-cms-empty">No products found.</td></tr>
            @endforelse
        </tbody></table></section>
    </main>
</body>
</html>
