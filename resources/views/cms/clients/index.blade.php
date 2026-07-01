<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clients - Codeban CMS</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    @include('cms.partials.sidebar')
    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div><span class="ve-section-tag">Clients</span><h1>Manage Clients</h1></div>
            <div class="ve-cms-actions">
                <a href="{{ route('cms.clients.create') }}" class="ve-cms-view-site"><i class="fa fa-plus"></i> Add Client</a>
                <a href="{{ route('clients') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Page</a>
            </div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead><tr><th>Client</th><th>Website</th><th>Order</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @forelse ($clients as $client)
                        <tr>
                            <td>
                                <div class="ve-cms-table-identity">
                                    @if ($client->logo)<span class="ve-cms-thumb" style="background-image:url({{ asset($client->logo) }});"></span>@endif
                                    <strong>{{ $client->name }}</strong>
                                </div>
                            </td>
                            <td>{{ $client->website ?: '-' }}</td>
                            <td>{{ $client->sort_order }}</td>
                            <td><span class="ve-cms-badge {{ $client->status === 'active' ? 'is-active' : 'is-inactive' }}">{{ $client->status }}</span></td>
                            <td><div class="ve-cms-row-actions"><a href="{{ route('cms.clients.edit', $client) }}"><i class="fa fa-pencil"></i> Edit</a><form action="{{ route('cms.clients.destroy', $client) }}" method="post" onsubmit="return confirm('Delete this client?');">@csrf @method('DELETE')<button type="submit"><i class="fa fa-trash"></i> Delete</button></form></div></td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="ve-cms-empty">No clients found.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
