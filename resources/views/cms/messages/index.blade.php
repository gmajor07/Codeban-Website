<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Messages - Codeban CMS</title>
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
            <div><span class="ve-section-tag">Messages</span><h1>Contact Messages</h1></div>
            <div class="ve-cms-actions"><a href="{{ route('contact') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Form</a></div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead><tr><th>From</th><th>Subject</th><th>Status</th><th>Date</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse ($messages as $message)
                        <tr>
                            <td><strong>{{ $message->name }}</strong><span>{{ $message->email ?: 'No email' }}{{ $message->phone ? ' / '.$message->phone : '' }}</span></td>
                            <td>{{ $message->subject ?: 'General inquiry' }}</td>
                            <td><span class="ve-cms-badge {{ $message->status === 'new' ? 'is-new' : ($message->status === 'replied' ? 'is-active' : 'is-inactive') }}">{{ $message->status }}</span></td>
                            <td>{{ $message->created_at }}</td>
                            <td><div class="ve-cms-row-actions"><a href="{{ route('cms.messages.show', $message) }}"><i class="fa fa-eye"></i> Read</a><form action="{{ route('cms.messages.destroy', $message) }}" method="post" onsubmit="return confirm('Delete this message?');">@csrf @method('DELETE')<button type="submit"><i class="fa fa-trash"></i> Delete</button></form></div></td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="ve-cms-empty">No contact messages yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
