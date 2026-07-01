<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FAQs - Codeban CMS</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    @include('cms.partials.sidebar')
    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div><span class="ve-section-tag">FAQs</span><h1>Manage FAQs</h1></div>
            <div class="ve-cms-actions"><a href="{{ route('cms.faqs.create') }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add FAQ</a></div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead><tr><th>Question</th><th>Page</th><th>Order</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse ($faqs as $faq)
                        <tr>
                            <td><strong>{{ $faq->question }}</strong><span>{{ \Illuminate\Support\Str::limit($faq->answer, 90) }}</span></td>
                            <td>{{ ucfirst($faq->page) }}</td>
                            <td>{{ $faq->sort_order }}</td>
                            <td><span class="ve-cms-badge {{ $faq->status === 'active' ? 'is-active' : 'is-inactive' }}">{{ $faq->status }}</span></td>
                            <td><div class="ve-cms-row-actions"><a href="{{ route('cms.faqs.edit', $faq) }}"><i class="fa fa-pencil"></i> Edit</a><form action="{{ route('cms.faqs.destroy', $faq) }}" method="post" onsubmit="return confirm('Delete this FAQ?');">@csrf @method('DELETE')<button type="submit"><i class="fa fa-trash"></i> Delete</button></form></div></td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="ve-cms-empty">No FAQs found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
