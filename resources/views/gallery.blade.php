<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban Company Limited gallery of safety products, uniforms, PPE, branding, and supply work.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gallery - Codeban Company Limited</title>
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>
<body>
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <div class="ve-logo"><a href="{{ route('home') }}"><span class="ve-logo-icon">C</span><span class="ve-logo-text">Codeban<strong></strong></span></a></div>
            <nav class="ve-nav"><ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                <li><a href="{{ route('clients') }}">Clients</a></li>
                <li><a href="{{ route('gallery') }}" class="active">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul></nav>
            <div class="ve-nav-cta"><a href="{{ route('contact') }}" class="ve-cta-btn">Contact Us <i class="fa fa-arrow-right"></i></a></div>
            <button class="ve-toggler" id="ve-toggle"><span></span><span></span><span></span></button>
        </div>
        <div class="ve-mobile-menu" id="ve-mobile-menu"><ul>
            <li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('clients') }}">Clients</a></li><li><a href="{{ route('gallery') }}">Gallery</a></li><li><a href="{{ route('contact') }}">Contact</a></li>
        </ul></div>
    </header>

    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/13.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Gallery</span>
            <h1>Our Work <span>In Pictures</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Home</a></li><li class="active">Gallery</li></ol></nav>
        </div>
    </section>

    <section class="ve-section ve-gallery-page">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Visual Portfolio</span>
                <h2>Products, Branding &amp; Supply Highlights</h2>
                <p>Explore selected work from Codeban Company Limited across PPE, uniforms, safety equipment, and branding support.</p>
            </div>

            @if ($categories->isNotEmpty())
                <div class="ve-gallery-filters">
                    <span>All</span>
                    @foreach ($categories as $category)
                        <span>{{ $category }}</span>
                    @endforeach
                </div>
            @endif

            <div class="ve-gallery-grid">
                @if ($galleryImages->isNotEmpty())
                    @foreach ($galleryImages as $galleryImage)
                        <a href="{{ asset($galleryImage->image) }}" class="ve-gallery-card" target="_blank" rel="noopener">
                            <span class="ve-gallery-img" style="background-image:url({{ asset($galleryImage->image) }});"></span>
                            <span class="ve-gallery-caption"><strong>{{ $galleryImage->title ?: 'Codeban Gallery' }}</strong><small>{{ $galleryImage->category ?: 'Gallery' }}</small></span>
                        </a>
                    @endforeach
                @else
                    @foreach ([['PPE Products', 'Safety Equipment', 'img/bg-img/1.jpg'], ['Corporate Uniforms', 'Uniforms', 'img/bg-img/3.jpg'], ['Branding Materials', 'Branding', 'img/bg-img/13.jpg'], ['Fire Safety Supply', 'Safety', 'img/bg-img/14.jpg'], ['Team Workwear', 'Uniforms', 'img/bg-img/32.jpg'], ['Client Deliveries', 'Supply', 'img/bg-img/33.jpg']] as [$title, $category, $image])
                        <a href="{{ asset($image) }}" class="ve-gallery-card" target="_blank" rel="noopener">
                            <span class="ve-gallery-img" style="background-image:url({{ asset($image) }});"></span>
                            <span class="ve-gallery-caption"><strong>{{ $title }}</strong><small>{{ $category }}</small></span>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <footer class="ve-footer"><div class="container"><div class="row">
        <div class="col-12 col-sm-6 col-lg-4 mb-50"><div class="ve-footer-brand">
            <a href="{{ route('home') }}" class="ve-footer-logo"><span class="ve-logo-icon">C</span><span class="ve-logo-text">Codeban<strong></strong></span></a>
            <p>{{ $siteSettings->tagline }}</p>
            <div class="ve-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
        </div></div>
        <div class="col-12 col-sm-6 col-lg-2 mb-50"><h5 class="ve-footer-title">Quick Links</h5>
            <ul class="ve-footer-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About Us</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('clients') }}">Clients</a></li><li><a href="{{ route('gallery') }}">Gallery</a></li><li><a href="{{ route('contact') }}">Contact</a></li></ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-50"><h5 class="ve-footer-title">Our Services</h5>
            <ul class="ve-footer-links"><li><a href="#">PPE Products</a></li><li><a href="#">Safety Uniforms</a></li><li><a href="#">Official Uniforms</a></li><li><a href="#">Footwear</a></li><li><a href="#">Fire Extinguishers</a></li></ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-50"><h5 class="ve-footer-title">Get In Touch</h5>
            <ul class="ve-footer-contact"><li><i class="fa fa-map-marker"></i> {{ $siteSettings->address }}</li><li><i class="fa fa-phone"></i> {{ $siteSettings->phoneLine() }}</li><li><i class="fa fa-envelope"></i> {{ $siteSettings->emailLine() }}</li><li><i class="fa fa-globe"></i> {{ $siteSettings->website }}</li><li><i class="fa fa-instagram"></i> {{ $siteSettings->instagram }}</li></ul>
        </div>
    </div></div>
    <div class="ve-footer-bottom"><div class="container"><div class="ve-footer-bottom-inner">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> {{ $siteSettings->company_name }}. All Rights Reserved</p>
        <ul><li><a href="#">Privacy Policy</a></li><li><a href="#">Terms of Use</a></li><li><a href="{{ route('login') }}" class="ve-footer-admin-link" aria-label="CMS login" title="CMS login"><i class="fa fa-lock"></i></a></li><li><a href="#">Cookie Policy</a></li></ul>
    </div></div></div></footer>

    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body>
</html>
