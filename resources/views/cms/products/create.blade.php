<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><title>Add Product - Codeban CMS</title><link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}"><link rel="stylesheet" href="{{ asset('style.css') }}"><link rel="stylesheet" href="{{ asset('css/custom-override.css') }}?v=2"></head>
<body class="ve-cms-body">
    @include('cms.partials.sidebar')
    <main class="ve-cms-main"><header class="ve-cms-topbar"><div><span class="ve-section-tag">Products</span><h1>Add Product</h1></div><div class="ve-cms-actions"><a href="{{ route('cms.products.index') }}" class="ve-cms-view-site"><i class="fa fa-arrow-left"></i> Back</a></div></header>@if ($errors->any())<div class="ve-cms-alert">{{ $errors->first() }}</div>@endif<section class="ve-cms-form-panel"><form action="{{ route('cms.products.store') }}" method="post" enctype="multipart/form-data">@csrf @include('cms.products.form')</form></section></main>
</body>
</html>
