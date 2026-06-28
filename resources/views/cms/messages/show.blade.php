<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Message - Codeban CMS</title>
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
            <a href="{{ route('cms.testimonials.index') }}"><i class="fa fa-star"></i> Testimonials</a>
            <a href="{{ route('cms.gallery.index') }}"><i class="fa fa-image"></i> Gallery</a>
            <a href="{{ route('cms.messages.index') }}" class="active"><i class="fa fa-envelope"></i> Messages</a>
        </nav>
    </aside>
    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div><span class="ve-section-tag">Message</span><h1>{{ $message->subject ?: 'General Inquiry' }}</h1></div>
            <div class="ve-cms-actions"><a href="{{ route('cms.messages.index') }}" class="ve-cms-view-site"><i class="fa fa-arrow-left"></i> Back</a></div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-panel ve-cms-message-panel">
            <div>
                <h2>{{ $message->name }}</h2>
                <p><strong>Email:</strong> {{ $message->email ?: '-' }}</p>
                <p><strong>Phone:</strong> {{ $message->phone ?: '-' }}</p>
                <p><strong>Status:</strong> {{ $message->status }}</p>
                <p><strong>Date:</strong> {{ $message->created_at }}</p>
                <hr>
                <p>{{ $message->message }}</p>
            </div>
            <div class="ve-cms-message-tools">
                <form action="{{ route('cms.messages.replied', $message) }}" method="post">@csrf @method('PATCH')<button type="submit" class="ve-btn-primary"><i class="fa fa-check"></i> Mark Replied</button></form>
                @if ($message->email)
                    <a href="mailto:{{ $message->email }}" class="ve-cms-view-site"><i class="fa fa-envelope"></i> Email Client</a>
                @endif
            </div>
        </section>
    </main>
</body>
</html>
