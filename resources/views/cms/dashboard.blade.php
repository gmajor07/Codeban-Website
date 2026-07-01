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
    @include('cms.partials.sidebar')

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
