<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban CMS services.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Services - Codeban CMS</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    <aside class="ve-cms-sidebar">
        <a href="{{ route('cms.dashboard') }}" class="ve-cms-brand"><span class="ve-logo-icon">C</span><span>Codeban CMS</span></a>
        <nav class="ve-cms-nav">
            <a href="{{ route('cms.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="{{ route('cms.settings.edit') }}"><i class="fa fa-cog"></i> Site Settings</a>
            <a href="{{ route('cms.page-images.index') }}"><i class="fa fa-picture-o"></i> Page Images</a>
            <a href="{{ route('cms.about-sections.index') }}"><i class="fa fa-info-circle"></i> About Sections</a>
            <a href="{{ route('cms.services.index') }}" class="active"><i class="fa fa-briefcase"></i> Services</a>
            <a href="{{ route('cms.products.index') }}"><i class="fa fa-tags"></i> Products</a>
            <a href="{{ route('cms.clients.index') }}"><i class="fa fa-users"></i> Clients</a>
            <a href="{{ route('cms.testimonials.index') }}"><i class="fa fa-star"></i> Testimonials</a>
            <a href="{{ route('cms.gallery.index') }}"><i class="fa fa-image"></i> Gallery</a>
            <a href="{{ route('cms.messages.index') }}"><i class="fa fa-envelope"></i> Messages</a>
        </nav>
    </aside>

    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div>
                <span class="ve-section-tag">Services</span>
                <h1>Manage Services</h1>
            </div>
            <div class="ve-cms-actions">
                <a href="{{ route('cms.services.create') }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add Service</a>
                <a href="{{ route('services') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Page</a>
                <form action="{{ route('logout') }}" method="post">@csrf<button type="submit"><i class="fa fa-sign-out"></i> Logout</button></form>
            </div>
        </header>

        @if (session('status'))
            <div class="ve-cms-success">{{ session('status') }}</div>
        @endif

        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Icon</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr>
                            <td>
                                <strong>{{ $service->title }}</strong>
                                <span>{{ $service->slug }}</span>
                            </td>
                            <td><i class="{{ $service->icon ?: 'fa fa-briefcase' }}"></i></td>
                            <td>{{ $service->sort_order }}</td>
                            <td><span class="ve-cms-badge {{ $service->status === 'active' ? 'is-active' : 'is-inactive' }}">{{ $service->status }}</span></td>
                            <td>
                                <div class="ve-cms-row-actions">
                                    <a href="{{ route('cms.services.edit', $service) }}"><i class="fa fa-pencil"></i> Edit</a>
                                    <form action="{{ route('cms.services.destroy', $service) }}" method="post" onsubmit="return confirm('Delete this service?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa fa-trash"></i> Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="ve-cms-empty">No services found. Add your first service to publish it on the website.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
