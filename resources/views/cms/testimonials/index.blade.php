<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Testimonials - Codeban CMS</title>
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
            <a href="{{ route('cms.services.index') }}"><i class="fa fa-briefcase"></i> Services</a>
            <a href="{{ route('cms.products.index') }}"><i class="fa fa-tags"></i> Products</a>
            <a href="{{ route('cms.clients.index') }}"><i class="fa fa-users"></i> Clients</a>
            <a href="{{ route('cms.testimonials.index') }}" class="active"><i class="fa fa-star"></i> Testimonials</a>
            <a href="{{ route('cms.gallery.index') }}"><i class="fa fa-image"></i> Gallery</a>
            <a href="{{ route('cms.messages.index') }}"><i class="fa fa-envelope"></i> Messages</a>
        </nav>
    </aside>
    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div><span class="ve-section-tag">Testimonials</span><h1>Client Testimonials</h1></div>
            <div class="ve-cms-actions"><a href="{{ route('cms.testimonials.create') }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add Testimonial</a><a href="{{ route('clients') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Page</a></div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead><tr><th>Client</th><th>Message</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse ($testimonials as $testimonial)
                        <tr>
                            <td><div class="ve-cms-table-identity">@if ($testimonial->image)<span class="ve-cms-thumb" style="background-image:url({{ asset($testimonial->image) }});"></span>@endif <strong>{{ $testimonial->client_name }}</strong></div><span>{{ $testimonial->company ?: '-' }}</span></td>
                            <td>{{ str($testimonial->message)->limit(90) }}</td>
                            <td><span class="ve-cms-badge {{ $testimonial->status === 'active' ? 'is-active' : 'is-inactive' }}">{{ $testimonial->status }}</span></td>
                            <td><div class="ve-cms-row-actions"><a href="{{ route('cms.testimonials.edit', $testimonial) }}"><i class="fa fa-pencil"></i> Edit</a><form action="{{ route('cms.testimonials.destroy', $testimonial) }}" method="post" onsubmit="return confirm('Delete this testimonial?');">@csrf @method('DELETE')<button type="submit"><i class="fa fa-trash"></i> Delete</button></form></div></td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="ve-cms-empty">No testimonials found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
