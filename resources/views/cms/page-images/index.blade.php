<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Page Images - Codeban CMS</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    @include('cms.partials.sidebar')
    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div><span class="ve-section-tag">Home Page</span><h1>Manage Page Images</h1></div>
            <div class="ve-cms-actions"><a href="{{ route('home') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Home</a></div>
        </header>
        @if (session('status'))<div class="ve-cms-success">{{ session('status') }}</div>@endif
        <section class="ve-cms-table-panel">
            <table class="ve-cms-table">
                <thead><tr><th>Section</th><th>Key</th><th>Status</th><th>Actions</th></tr></thead>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td><div class="ve-cms-table-identity"><span class="ve-cms-thumb" style="background-image:url({{ asset($section->image ?: $slots[$section->section_key]['default']) }});"></span><strong>{{ $section->title }}</strong></div></td>
                            <td>{{ $section->section_key }}</td>
                            <td><span class="ve-cms-badge {{ $section->status === 'active' ? 'is-active' : 'is-inactive' }}">{{ $section->status }}</span></td>
                            <td><div class="ve-cms-row-actions"><a href="{{ route('cms.page-images.edit', $section) }}"><i class="fa fa-pencil"></i> Edit</a></div></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
