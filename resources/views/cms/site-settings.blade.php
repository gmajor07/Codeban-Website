<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban CMS site settings.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Site Settings - Codeban CMS</title>
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
            <a href="{{ route('cms.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            <a href="{{ route('cms.settings.edit') }}" class="active"><i class="fa fa-cog"></i> Site Settings</a>
            <a href="{{ route('cms.page-images.index') }}"><i class="fa fa-picture-o"></i> Page Images</a>
            <a href="{{ route('cms.about-sections.index') }}"><i class="fa fa-info-circle"></i> About Sections</a>
            <a href="{{ route('cms.services.index') }}"><i class="fa fa-briefcase"></i> Services</a>
            <a href="{{ route('cms.products.index') }}"><i class="fa fa-tags"></i> Products</a>
            <a href="{{ route('cms.clients.index') }}"><i class="fa fa-users"></i> Clients</a>
            <a href="{{ route('cms.testimonials.index') }}"><i class="fa fa-star"></i> Testimonials</a>
            <a href="{{ route('cms.gallery.index') }}"><i class="fa fa-image"></i> Gallery</a>
            <a href="{{ route('cms.messages.index') }}"><i class="fa fa-envelope"></i> Messages</a>
        </nav>
    </aside>

    <main class="ve-cms-main">
        <header class="ve-cms-topbar">
            <div>
                <span class="ve-section-tag">Site Settings</span>
                <h1>Company Information</h1>
            </div>
            <div class="ve-cms-actions">
                <a href="{{ route('home') }}" target="_blank" class="ve-cms-view-site"><i class="fa fa-external-link"></i> View Site</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"><i class="fa fa-sign-out"></i> Logout</button>
                </form>
            </div>
        </header>

        @if (session('status'))
            <div class="ve-cms-success">{{ session('status') }}</div>
        @endif

        @if ($errors->any())
            <div class="ve-cms-alert">{{ $errors->first() }}</div>
        @endif

        <section class="ve-cms-form-panel">
            <form action="{{ route('cms.settings.update') }}" method="post" class="ve-cms-settings-form">
                @csrf
                @method('PUT')

                <div class="ve-cms-form-grid">
                    <div class="ve-cms-field ve-cms-field-wide">
                        <label for="company_name">Company Name</label>
                        <input id="company_name" name="company_name" value="{{ old('company_name', $settings->company_name) }}" type="text">
                    </div>
                    <div class="ve-cms-field ve-cms-field-wide">
                        <label for="tagline">Tagline</label>
                        <input id="tagline" name="tagline" value="{{ old('tagline', $settings->tagline) }}" type="text">
                    </div>
                    <div class="ve-cms-field">
                        <label for="phone1">Phone 1</label>
                        <input id="phone1" name="phone1" value="{{ old('phone1', $settings->phone1) }}" type="text">
                    </div>
                    <div class="ve-cms-field">
                        <label for="phone2">Phone 2</label>
                        <input id="phone2" name="phone2" value="{{ old('phone2', $settings->phone2) }}" type="text">
                    </div>
                    <div class="ve-cms-field">
                        <label for="phone3">Phone 3</label>
                        <input id="phone3" name="phone3" value="{{ old('phone3', $settings->phone3) }}" type="text">
                    </div>
                    <div class="ve-cms-field">
                        <label for="email1">Email 1</label>
                        <input id="email1" name="email1" value="{{ old('email1', $settings->email1) }}" type="email">
                    </div>
                    <div class="ve-cms-field">
                        <label for="email2">Email 2</label>
                        <input id="email2" name="email2" value="{{ old('email2', $settings->email2) }}" type="email">
                    </div>
                    <div class="ve-cms-field">
                        <label for="email3">Email 3</label>
                        <input id="email3" name="email3" value="{{ old('email3', $settings->email3) }}" type="email">
                    </div>
                    <div class="ve-cms-field">
                        <label for="website">Website</label>
                        <input id="website" name="website" value="{{ old('website', $settings->website) }}" type="text">
                    </div>
                    <div class="ve-cms-field">
                        <label for="instagram">Instagram</label>
                        <input id="instagram" name="instagram" value="{{ old('instagram', $settings->instagram) }}" type="text">
                    </div>
                    <div class="ve-cms-field">
                        <label for="logo">Logo Path</label>
                        <input id="logo" name="logo" value="{{ old('logo', $settings->logo) }}" type="text">
                    </div>
                    <div class="ve-cms-field ve-cms-field-wide">
                        <label for="address">Address</label>
                        <textarea id="address" name="address" rows="4">{{ old('address', $settings->address) }}</textarea>
                    </div>
                </div>

                <div class="ve-cms-form-actions">
                    <button type="submit" class="ve-btn-primary"><i class="fa fa-save"></i> Save Settings</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
