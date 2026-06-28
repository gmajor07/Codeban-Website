<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit FAQ - Codeban CMS</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2">
</head>
<body class="ve-cms-body">
    <aside class="ve-cms-sidebar"><a href="{{ route('cms.dashboard') }}" class="ve-cms-brand"><span class="ve-logo-icon">C</span><span>Codeban CMS</span></a><nav class="ve-cms-nav"><a href="{{ route('cms.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a><a href="{{ route('cms.faqs.index') }}" class="active"><i class="fa fa-question-circle"></i> FAQs</a><a href="{{ route('cms.messages.index') }}"><i class="fa fa-envelope"></i> Messages</a></nav></aside>
    <main class="ve-cms-main">
        <header class="ve-cms-topbar"><div><span class="ve-section-tag">FAQs</span><h1>Edit FAQ</h1></div><div class="ve-cms-actions"><a href="{{ route('cms.faqs.index') }}" class="ve-cms-view-site"><i class="fa fa-arrow-left"></i> Back</a></div></header>
        @if ($errors->any())<div class="ve-cms-alert">{{ $errors->first() }}</div>@endif
        <section class="ve-cms-form-panel"><form action="{{ route('cms.faqs.update', $faq) }}" method="post">@csrf @method('PUT') @include('cms.faqs.form')</form></section>
    </main>
</body>
</html>
