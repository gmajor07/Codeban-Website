<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban Company Limited product categories: reflective safety jackets, safety boots, helmets, gloves, goggles, ear protection, fire extinguishers, banners, and uniforms.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeban Products — Codeban Company Limited</title>
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
                    <li><a href="{{ route('products') }}" class="active">Products</a></li>
                <li><a href="{{ route('clients') }}">Clients</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
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
    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/24.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Product Categories</span><h1>Safety, Uniform &amp; <span>Branding Products</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Home</a></li><li class="active">Products</li></ol></nav>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="row">
                        @if ($products->count() > 0)
                            @foreach ($products as $product)
                                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="{{ min(($loop->iteration * 100), 1000) }}ms">
                                    <div class="ve-insight-card">
                                        <div class="ve-insight-img bg-img" style="background-image:url({{ $product->image ? asset($product->image) : asset('img/bg-img/10.jpg') }});"></div>
                                        <div class="ve-insight-body">
                                            <span class="ve-insight-cat">{{ $product->category?->name ?? 'Product' }}</span>
                                            <h5><a href="{{ route('single-post', $product) }}">{{ $product->name }}</a></h5>
                                            <p>{{ $product->description }}</p>
                                            <div class="ve-insight-meta">
                                                <span><i class="fa fa-shield"></i> {{ $product->featured ? 'Featured' : 'Available' }}</span>
                                                <a href="{{ route('single-post', $product) }}">View Details <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @elseif ($hasProductFilters)
                        <div class="col-12"><div class="ve-insight-card"><div class="ve-insight-body"><span class="ve-insight-cat">No Results</span><h5>No products matched your search.</h5><p>Try another keyword or browse all product categories.</p><div class="ve-insight-meta"><span><i class="fa fa-search"></i> Search</span><a href="{{ route('products') }}">Clear Filters <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        @else
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="100ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">PPE</span><h5><a href="{{ route('contact') }}">Reflective Safety Jackets</a></h5><p>High-visibility workwear for construction, logistics, industrial, and field teams.</p><div class="ve-insight-meta"><span><i class="fa fa-shield"></i> Safety Wear</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="200ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/11.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Footwear</span><h5><a href="{{ route('contact') }}">Safety Boots</a></h5><p>Protective footwear for demanding site, workshop, and industrial environments.</p><div class="ve-insight-meta"><span><i class="fa fa-road"></i> Foot Protection</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="300ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/12.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">PPE</span><h5><a href="{{ route('contact') }}">Helmets</a></h5><p>Head protection products for workplace safety and site compliance.</p><div class="ve-insight-meta"><span><i class="fa fa-industry"></i> Head Protection</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/23.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Protection</span><h5><a href="{{ route('contact') }}">Gloves</a></h5><p>Hand protection options for industrial, workshop, and general work use.</p><div class="ve-insight-meta"><span><i class="fa fa-hand-paper-o"></i> Hand Safety</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/25.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Eye Safety</span><h5><a href="{{ route('contact') }}">Safety Goggles</a></h5><p>Eye protection for cutting, workshop, industrial, and field operations.</p><div class="ve-insight-meta"><span><i class="fa fa-eye"></i> Eye Protection</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="600ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/26.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Ear Safety</span><h5><a href="{{ route('contact') }}">Ear Protection</a></h5><p>Ear plugs and protective accessories for safer work in noisy environments.</p><div class="ve-insight-meta"><span><i class="fa fa-volume-off"></i> Hearing Safety</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="700ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/20.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Fire Safety</span><h5><a href="{{ route('contact') }}">Fire Extinguishers</a></h5><p>Fire safety equipment for offices, factories, workshops, and project sites.</p><div class="ve-insight-meta"><span><i class="fa fa-fire-extinguisher"></i> Fire Equipment</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="800ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/21.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Branding</span><h5><a href="{{ route('contact') }}">T-Shirts &amp; Caps</a></h5><p>Customized branded wear for teams, promotions, events, and corporate identity.</p><div class="ve-insight-meta"><span><i class="fa fa-tags"></i> Branded Wear</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="900ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/22.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Print</span><h5><a href="{{ route('contact') }}">Banners</a></h5><p>Printed banners and display materials for businesses, campaigns, and events.</p><div class="ve-insight-meta"><span><i class="fa fa-flag"></i> Branding</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1000ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/24.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Uniforms</span><h5><a href="{{ route('contact') }}">Corporate Uniforms</a></h5><p>Professional official uniforms for offices, institutions, and customer-facing teams.</p><div class="ve-insight-meta"><span><i class="fa fa-briefcase"></i> Official Wear</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1100ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/13.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">PPE</span><h5><a href="{{ route('contact') }}">Coveralls</a></h5><p>Protective coveralls for industrial, workshop, and site operations.</p><div class="ve-insight-meta"><span><i class="fa fa-user"></i> Workwear</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1200ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/14.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">PPE</span><h5><a href="{{ route('contact') }}">Safety Vests</a></h5><p>Lightweight safety vests for visibility in warehouses, roads, sites, and field work.</p><div class="ve-insight-meta"><span><i class="fa fa-shield"></i> Visibility</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1300ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/15.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Reflective Wear</span><h5><a href="{{ route('contact') }}">Reflective T-Shirts &amp; Trousers</a></h5><p>Reflective clothing options for teams that need comfort, branding, and visibility.</p><div class="ve-insight-meta"><span><i class="fa fa-sun-o"></i> Safety Wear</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1400ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/16.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Footwear</span><h5><a href="{{ route('contact') }}">Industrial Boots, Gumboots &amp; Work Shoes</a></h5><p>Industrial boots, gumboots, and protective work shoes for different site conditions.</p><div class="ve-insight-meta"><span><i class="fa fa-road"></i> Foot Protection</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1500ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/17.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Head Protection</span><h5><a href="{{ route('contact') }}">Bump Caps</a></h5><p>Head protection accessories for light industrial and operational environments.</p><div class="ve-insight-meta"><span><i class="fa fa-industry"></i> Head Safety</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1600ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/18.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Eye Safety</span><h5><a href="{{ route('contact') }}">Protective Glasses</a></h5><p>Protective glasses for light industrial, site, workshop, and general safety use.</p><div class="ve-insight-meta"><span><i class="fa fa-eye"></i> Eye Protection</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1700ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/19.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Hearing Protection</span><h5><a href="{{ route('contact') }}">Ear Muffs &amp; Ear Plugs</a></h5><p>Hearing protection products for loud workshops, plants, and industrial environments.</p><div class="ve-insight-meta"><span><i class="fa fa-volume-off"></i> Hearing Safety</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1800ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/2.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Hand Protection</span><h5><a href="{{ route('contact') }}">Leather, Industrial &amp; Cut Resistant Gloves</a></h5><p>Glove options for handling, industrial operations, and cut-resistant work needs.</p><div class="ve-insight-meta"><span><i class="fa fa-hand-paper-o"></i> Hand Safety</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="1900ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/4.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Branding</span><h5><a href="{{ route('contact') }}">Roll-up &amp; Promotional Banners</a></h5><p>Roll-up banners and promotional banners for campaigns, events, and company branding.</p><div class="ve-insight-meta"><span><i class="fa fa-flag"></i> Printing</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="2000ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/7.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Advertising</span><h5><a href="{{ route('contact') }}">Business Branding &amp; Corporate Advertising Materials</a></h5><p>Business branding materials that support professional visibility and corporate communication.</p><div class="ve-insight-meta"><span><i class="fa fa-bullhorn"></i> Advertising</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="2100ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/8.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Embroidery</span><h5><a href="{{ route('contact') }}">Security, Medical &amp; Chef Uniforms</a></h5><p>Customized uniforms for security teams, healthcare staff, chef teams, and service staff.</p><div class="ve-insight-meta"><span><i class="fa fa-scissors"></i> Sewing</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="2200ms"><div class="ve-insight-card"><div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/9.jpg') }});"></div><div class="ve-insight-body"><span class="ve-insight-cat">Customized Workwear</span><h5><a href="{{ route('contact') }}">Polo Shirts, Branded Caps &amp; Workwear</a></h5><p>Branded caps, polo shirts, and customized workwear for corporate teams and events.</p><div class="ve-insight-meta"><span><i class="fa fa-tags"></i> Branded Wear</span><a href="{{ route('contact') }}">Request Quote <i class="fa fa-arrow-right"></i></a></div></div></div></div>
                        @endif
                    </div>
                    @if ($products->hasPages())
                        <div class="ve-pagination">
                            @if ($products->onFirstPage())
                                <span class="disabled"><i class="fa fa-chevron-left"></i></span>
                            @else
                                <a href="{{ $products->previousPageUrl() }}"><i class="fa fa-chevron-left"></i></a>
                            @endif

                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                <a href="{{ $url }}" class="{{ $products->currentPage() === $page ? 'active' : '' }}">{{ $page }}</a>
                            @endforeach

                            @if ($products->hasMorePages())
                                <a href="{{ $products->nextPageUrl() }}"><i class="fa fa-chevron-right"></i></a>
                            @else
                                <span class="disabled"><i class="fa fa-chevron-right"></i></span>
                            @endif
                        </div>
                    @endif
                </div>
                <div class="col-12 col-lg-4">
                    <div class="ve-sidebar">
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Search Products</h5>
                            <form class="ve-search-box" action="{{ route('products') }}" method="get">
                                @if ($categorySlug)
                                    <input type="hidden" name="category" value="{{ $categorySlug }}">
                                @endif
                                <input type="text" name="search" value="{{ $search }}" placeholder="Search products...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Categories</h5>
                            <ul class="ve-cat-list">
                                @if ($categories->isNotEmpty())
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('products', array_filter(['category' => $category->slug, 'search' => $search])) }}" class="{{ $categorySlug === $category->slug ? 'active' : '' }}">{{ $category->name }} <span>{{ $category->products_count }}</span></a></li>
                                    @endforeach
                                @else
                                <li><a href="#">PPE Products <span>20+</span></a></li>
                                <li><a href="#">Footwear <span>4+</span></a></li>
                                <li><a href="#">Head, Eye &amp; Hearing Protection <span>6+</span></a></li>
                                <li><a href="#">Hand Protection <span>3+</span></a></li>
                                <li><a href="#">Fire Safety <span>3+</span></a></li>
                                <li><a href="#">Branding, Printing &amp; Embroidery <span>10+</span></a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Popular Requests</h5>
                            @if ($featuredProducts->isNotEmpty())
                                @foreach ($featuredProducts as $featured)
                                    <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ $featured->image ? asset($featured->image) : asset('img/bg-img/10.jpg') }});"></div><div><a href="{{ route('single-post', $featured) }}">{{ $featured->name }}</a><span><i class="fa fa-shield"></i> {{ $featured->category?->name ?? 'Product' }}</span></div></div>
                                @endforeach
                            @else
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div><div><a href="{{ route('contact') }}">Reflective Safety Jackets</a><span><i class="fa fa-shield"></i> PPE</span></div></div>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/11.jpg') }});"></div><div><a href="{{ route('contact') }}">Safety Boots</a><span><i class="fa fa-road"></i> Footwear</span></div></div>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/12.jpg') }});"></div><div><a href="{{ route('contact') }}">Corporate Uniforms</a><span><i class="fa fa-briefcase"></i> Uniforms</span></div></div>
                            @endif
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Popular Tags</h5>
                            <div class="ve-tags"><a href="#">PPE</a><a href="#">Coveralls</a><a href="#">Safety Vests</a><a href="#">Uniforms</a><a href="#">Boots</a><a href="#">Gumboots</a><a href="#">Helmets</a><a href="#">Gloves</a><a href="#">Goggles</a><a href="#">Ear Muffs</a><a href="#">Banners</a><a href="#">Embroidery</a><a href="#">Branding</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-newsletter-section"><div class="container"><div class="ve-newsletter-wrap">
        <div class="ve-nl-left"><i class="fa fa-envelope-o"></i><div><h3>Need Product Support?</h3><p>Send your request and our team will guide you.</p></div></div>
        <div class="ve-nl-right"><form class="ve-nl-form" action="#" method="post"><input type="email" placeholder="Enter your email address" required><button type="submit">Subscribe</button></form></div>
    </div></div></section>
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
            <ul class="ve-footer-contact"><li><i class="fa fa-map-marker"></i> {{ $siteSettings->address }}</li><li><i class="fa fa-phone"></i> {{ $siteSettings->phoneLine() }}</li><li><i class="fa fa-envelope"></i> {{ $siteSettings->emailLine() }}</li>
                        <li><i class="fa fa-globe"></i> {{ $siteSettings->website }}</li><li><i class="fa fa-instagram"></i> {{ $siteSettings->instagram }}</li></ul>
        </div>
    </div></div>
    <div class="ve-footer-bottom"><div class="container"><div class="ve-footer-bottom-inner">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> {{ $siteSettings->company_name }}. All Rights Reserved <a href="https://goodluckportfolio.vercel.app/" class="text-white" target="_blank">gMajor</a></p>
        <ul><li><a href="#">Privacy Policy</a></li><li><a href="#">Terms of Use</a></li><li><a href="{{ route('login') }}" class="ve-footer-admin-link" aria-label="CMS login" title="CMS login"><i class="fa fa-lock"></i></a></li><li><a href="#">Cookie Policy</a></li></ul>
    </div></div></div></footer>
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body></html>
