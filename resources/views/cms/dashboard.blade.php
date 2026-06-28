<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban CMS dashboard.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CMS Dashboard - Codeban Company Limited</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    <aside class="ve-cms-sidebar">
        <a href="{{ route('cms.dashboard') }}" class="ve-cms-brand">
            <span class="ve-logo-icon">C</span>
            <span>Codeban CMS</span>
        </a>
        <nav class="ve-cms-nav">
            <a href="{{ route('cms.dashboard') }}" class="active"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="{{ route('cms.settings.edit') }}"><i class="fa fa-cog"></i> Site Settings</a>
            <a href="{{ route('cms.page-images.index') }}"><i class="fa fa-picture-o"></i> Page Images</a>
            <a href="{{ route('cms.about-sections.index') }}"><i class="fa fa-info-circle"></i> About Sections</a>
            <a href="{{ route('cms.services.index') }}"><i class="fa fa-briefcase"></i> Services</a>
            <a href="{{ route('cms.products.index') }}"><i class="fa fa-tags"></i> Products</a>
            <a href="{{ route('cms.clients.index') }}"><i class="fa fa-users"></i> Clients</a>
            <a href="{{ route('cms.faqs.index') }}"><i class="fa fa-question-circle"></i> FAQs</a>
            <a href="{{ route('cms.testimonials.index') }}"><i class="fa fa-star"></i> Testimonials</a>
            <a href="{{ route('cms.gallery.index') }}"><i class="fa fa-image"></i> Gallery</a>
            <a href="{{ route('cms.messages.index') }}"><i class="fa fa-envelope"></i> Messages</a>
            @if (auth()->user()->role === 'admin')
                <a href="{{ route('cms.users.index') }}"><i class="fa fa-user-circle"></i> Users</a>
            @endif
        </nav>
    </aside>

    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div>
                <span class="ve-section-tag">Dashboard</span>
                <h1>Welcome, {{ auth()->user()->name }}</h1>
            </div>
            <div class="ve-cms-actions">
                <a href="{{ route('home') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Site</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"><i class="fa fa-sign-out"></i> Logout</button>
                </form>
            </div>
        </header>

        <section class="ve-cms-stats">
            <article><span>Products</span><strong>{{ $stats['products'] }}</strong></article>
            <article><span>Services</span><strong>{{ $stats['services'] }}</strong></article>
            <article><span>Clients</span><strong>{{ $stats['clients'] }}</strong></article>
            <article><span>Testimonials</span><strong>{{ $stats['testimonials'] }}</strong></article>
            <article><span>FAQs</span><strong>{{ $stats['faqs'] }}</strong></article>
            <article><span>Messages</span><strong>{{ $stats['messages'] }}</strong></article>
            <article><span>Gallery</span><strong>{{ $stats['gallery'] }}</strong></article>
            <article><span>Users</span><strong>{{ $stats['users'] }}</strong></article>
        </section>

        <section class="ve-cms-panel">
            <div>
                <h2>CMS Setup Progress</h2>
                <p>The secure CMS area is active. Next we can connect Site Settings so the public footer, contact details, logo, and company information come from the database.</p>
            </div>
            <div class="ve-cms-message-count">
                <span>New Messages</span>
                <strong>{{ $newMessages }}</strong>
            </div>
        </section>
    </main>
</body>
</html>
