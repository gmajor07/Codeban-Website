<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit About Section - Codeban CMS</title>
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
        <header class="ve-cms-topbar"><div><span class="ve-section-tag">About Page</span><h1>{{ $label }}</h1></div><div class="ve-cms-actions"><a href="{{ route('cms.about-sections.index') }}" class="ve-cms-view-site"><i class="fa fa-arrow-left"></i> Back</a></div></header>
        @if ($errors->any())<div class="ve-cms-alert">{{ $errors->first() }}</div>@endif
        <section class="ve-cms-form-panel">
            <form action="{{ route('cms.about-sections.update', $section) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="ve-cms-form-grid">
                    <div class="ve-cms-field"><label for="title">Title</label><input id="title" name="title" value="{{ old('title', $section->title) }}" type="text" required></div>
                    <div class="ve-cms-field"><label for="subtitle">Subtitle / Icon Class</label><input id="subtitle" name="subtitle" value="{{ old('subtitle', $section->subtitle) }}" type="text"></div>
                    <div class="ve-cms-field"><label for="sort_order">Sort Order</label><input id="sort_order" name="sort_order" value="{{ old('sort_order', $section->sort_order) }}" type="number" min="0"></div>
                    <div class="ve-cms-field"><label for="status">Status</label><select id="status" name="status"><option value="active" @selected(old('status', $section->status) === 'active')>Active</option><option value="inactive" @selected(old('status', $section->status) === 'inactive')>Inactive</option></select></div>
                    <div class="ve-cms-field ve-cms-field-wide"><label for="content">Content</label><textarea id="content" name="content" rows="7">{{ old('content', $section->content) }}</textarea></div>
                    <div class="ve-cms-field ve-cms-field-wide"><label for="image">Image</label><input id="image" name="image" type="file" accept="image/*" data-image-preview="about-section-image-preview"><div id="about-section-image-preview" class="ve-cms-image-preview {{ $section->image ? '' : 'is-hidden' }}" @if ($section->image) style="background-image:url({{ asset($section->image) }});" @endif></div></div>
                </div>
                <div class="ve-cms-form-actions"><button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save About Section</button></div>
            </form>
        </section>
    </main>
    @include('cms.partials.image-preview-script')
</body>
</html>
