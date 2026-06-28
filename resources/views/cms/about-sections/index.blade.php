<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Sections - Codeban CMS</title>
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
            <a href="{{ route('cms.about-sections.index') }}" class="active"><i class="fa fa-info-circle"></i> About Sections</a>
            <a href="{{ route('cms.services.index') }}"><i class="fa fa-briefcase"></i> Services</a>
            <a href="{{ route('cms.products.index') }}"><i class="fa fa-tags"></i> Products</a>
            <a href="{{ route('cms.clients.index') }}"><i class="fa fa-users"></i> Clients</a>
            <a href="{{ route('cms.testimonials.index') }}"><i class="fa fa-star"></i> Testimonials</a>
            <a href="{{ route('cms.gallery.index') }}"><i class="fa fa-image"></i> Gallery</a>
            <a href="{{ route('cms.messages.index') }}"><i class="fa fa-envelope"></i> Messages</a>
        </nav>
    </aside>
    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div><span class="ve-section-tag">About Page</span><h1>Manage About Sections</h1></div>
            <div class="ve-cms-actions"><a href="{{ route('cms.about-sections.create', ['type' => 'feature']) }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add Feature</a><a href="{{ route('cms.about-sections.create', ['type' => 'work']) }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add Work Card</a><a href="{{ route('about') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View About</a></div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead><tr><th>Section</th><th>Key</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td><div class="ve-cms-table-identity">@if ($section->image)<span class="ve-cms-thumb" style="background-image:url({{ asset($section->image) }});"></span>@endif <strong>{{ $labels[$section->section_key] ?? (str_starts_with($section->section_key, 'about_work_') ? 'Our Work Card' : 'About Feature') }}</strong></div><span>{{ $section->title }}</span></td>
                            <td>{{ $section->section_key }}</td>
                            <td><span class="ve-cms-badge {{ $section->status === 'active' ? 'is-active' : 'is-inactive' }}">{{ $section->status }}</span></td>
                            <td><div class="ve-cms-row-actions"><a href="{{ route('cms.about-sections.edit', $section) }}"><i class="fa fa-pencil"></i> Edit</a>@if (! in_array($section->section_key, $fixedKeys, true))<form action="{{ route('cms.about-sections.destroy', $section) }}" method="post" onsubmit="return confirm('Delete this About item?');">@csrf @method('DELETE')<button type="submit"><i class="fa fa-trash"></i> Delete</button></form>@endif</div></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
