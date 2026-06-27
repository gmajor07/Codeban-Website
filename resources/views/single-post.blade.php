<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban Company Limited supplies PPE products, uniforms, footwear, fire safety equipment, banners, sewing, embroidery, and branding services.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product & Service Details — Codeban Company Limited</title>
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
                <li class="has-drop"><a href="{{ route('about') }}">About <i class="fa fa-angle-down"></i></a>
                    <ul class="ve-dropdown"><li><a href="{{ route('about') }}">About Us</a></li><li><a href="{{ route('services') }}">Our Services</a></li><li><a href="{{ route('clients') }}">Clients</a></li></ul>
                </li>
                <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('products') }}" class="active">Products</a></li>
                <li><a href="{{ route('clients') }}">Clients</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul></nav>
            <div class="ve-nav-cta"><a href="{{ route('contact') }}" class="ve-cta-btn">Contact Us <i class="fa fa-arrow-right"></i></a></div>
            <button class="ve-toggler" id="ve-toggle"><span></span><span></span><span></span></button>
        </div>
        <div class="ve-mobile-menu" id="ve-mobile-menu"><ul>
            <li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('clients') }}">Clients</a></li><li><a href="{{ route('contact') }}">Contact</a></li>
        </ul></div>
    </header>
    <section class="ve-page-hero ve-page-hero-sm" style="background-image:url({{ asset('img/bg-img/10.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-insight-cat" style="margin-bottom:16px;">PPE</span>
            <h1>PPE, Uniforms &amp; <span>Branding Solutions</span></h1>
            <div class="ve-post-meta-hero">
                <span><i class="fa fa-shield"></i> Safety First</span>
                <span><i class="fa fa-user"></i> Codeban Team</span>
                <span><i class="fa fa-map-marker"></i> Tanzania</span>
            </div>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <article class="ve-article">
                        <div class="ve-article-featured bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div>
                        <div class="ve-article-body">
                            <p class="ve-article-lead">Codeban Company Limited helps businesses source reliable PPE, safety uniforms, official uniforms, footwear, fire extinguishers, banners, sewing, embroidery, and branding services with a Safety First mindset.</p>
                            <h3>1. PPE Products</h3>
                            <p>We supply workplace safety materials such as reflective jackets, helmets, gloves, safety goggles, masks, ear protection, and related industrial PPE products.</p>
                            <h3>2. Uniforms &amp; Footwear</h3>
                            <p>Our team supports safety uniforms, official uniforms, corporate uniforms, and safety boots for industrial teams, field staff, institutions, and customer-facing employees.</p>
                            <blockquote class="ve-blockquote"><p>"Safety First is the foundation of professional work."</p><cite>— Codeban Company Limited</cite></blockquote>
                            <h3>3. Fire Safety Equipment</h3>
                            <p>We provide fire extinguishers and related fire safety supply support for offices, workshops, warehouses, factories, and project sites.</p>
                            <h3>4. Banners, Sewing &amp; Embroidery</h3>
                            <p>We help companies build professional visibility through banners, branded clothing, embroidery, logo application, and garment finishing.</p>
                            <h3>5. Professional Service</h3>
                            <p>Our approach is based on teamwork, clear communication, professional project management, integrity, quality, and customer satisfaction.</p>
                            <div class="ve-article-tags"><strong>Tags:</strong><a href="#">PPE</a><a href="#">Uniforms</a><a href="#">Footwear</a><a href="#">Branding</a></div>
                            <div class="ve-article-share"><strong>Share:</strong><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                        </div>
                    </article>
                    <div class="ve-comments-section">
                        <h4>Client Notes</h4>
                        <div class="ve-comment"><div class="ve-comment-avatar bg-img" style="background-image:url({{ asset('img/bg-img/32.jpg') }});"></div><div class="ve-comment-body"><div class="ve-comment-meta"><strong>Corporate Supply</strong><span>PPE</span></div><p>Share quantities, sizes, and delivery needs when requesting PPE or uniforms.</p><a href="{{ route('contact') }}" class="ve-reply-btn">Contact</a></div></div>
                        <div class="ve-comment ve-comment-reply"><div class="ve-comment-avatar bg-img" style="background-image:url({{ asset('img/bg-img/33.jpg') }});"></div><div class="ve-comment-body"><div class="ve-comment-meta"><strong>Branding Support</strong><span>Embroidery</span></div><p>For branded wear, include logo files, colors, placement details, and garment quantities.</p><a href="{{ route('contact') }}" class="ve-reply-btn">Contact</a></div></div>
                        <div class="ve-comment"><div class="ve-comment-avatar bg-img" style="background-image:url({{ asset('img/bg-img/14.jpg') }});"></div><div class="ve-comment-body"><div class="ve-comment-meta"><strong>Project Support</strong><span>Services</span></div><p>For renovation support, describe the site, scope, timeline, and location.</p><a href="{{ route('contact') }}" class="ve-reply-btn">Contact</a></div></div>
                    </div>
                    <div class="ve-comment-form-wrap">
                        <h4>Request Product Support</h4>
                        <form class="ve-contact-form" action="#" method="post">
                            <div class="ve-form-row"><div class="ve-form-group"><label>Name</label><input type="text" placeholder="Your name" required></div><div class="ve-form-group"><label>Email</label><input type="email" placeholder="Your email" required></div></div>
                            <div class="ve-form-group"><label>Message</label><textarea rows="5" placeholder="Tell us what products or services you need..."></textarea></div>
                            <button type="submit" class="ve-btn-primary">Send Request <i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="ve-sidebar">
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Search Products</h5>
                            <div class="ve-search-box"><input type="text" placeholder="Search products..."><button><i class="fa fa-search"></i></button></div>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Categories</h5>
                            <ul class="ve-cat-list">
                                <li><a href="#">PPE Products <span>20+</span></a></li>
                                <li><a href="#">Uniforms <span>10+</span></a></li>
                                <li><a href="#">Footwear <span>5+</span></a></li>
                                <li><a href="#">Fire Safety <span>5+</span></a></li>
                                <li><a href="#">Branding <span>10+</span></a></li>
                                <li><a href="#">Sewing &amp; Embroidery <span>8+</span></a></li>
                            </ul>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Popular Requests</h5>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div><div><a href="{{ route('contact') }}">Reflective Safety Jackets</a><span><i class="fa fa-shield"></i> PPE</span></div></div>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/11.jpg') }});"></div><div><a href="{{ route('contact') }}">Safety Boots</a><span><i class="fa fa-road"></i> Footwear</span></div></div>
                            <div class="ve-recent-post"><div class="ve-rp-img bg-img" style="background-image:url({{ asset('img/bg-img/12.jpg') }});"></div><div><a href="{{ route('contact') }}">Corporate Uniforms</a><span><i class="fa fa-briefcase"></i> Uniforms</span></div></div>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Popular Tags</h5>
                            <div class="ve-tags"><a href="#">PPE</a><a href="#">Uniforms</a><a href="#">Boots</a><a href="#">Helmets</a><a href="#">Gloves</a><a href="#">Goggles</a><a href="#">Banners</a><a href="#">Embroidery</a><a href="#">Branding</a></div>
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
            <p>Supplying PPE, uniforms, footwear, fire safety equipment, branding, and professional business solutions in Tanzania.</p>
            <div class="ve-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
        </div></div>
        <div class="col-12 col-sm-6 col-lg-2 mb-50"><h5 class="ve-footer-title">Quick Links</h5>
            <ul class="ve-footer-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About Us</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('clients') }}">Clients</a></li><li><a href="{{ route('contact') }}">Contact</a></li></ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-50"><h5 class="ve-footer-title">Our Services</h5>
            <ul class="ve-footer-links"><li><a href="#">PPE Products</a></li><li><a href="#">Safety Uniforms</a></li><li><a href="#">Official Uniforms</a></li><li><a href="#">Footwear</a></li><li><a href="#">Fire Extinguishers</a></li></ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-50"><h5 class="ve-footer-title">Get In Touch</h5>
            <ul class="ve-footer-contact"><li><i class="fa fa-map-marker"></i> Block G Plot No.12, House No.1, Macedonia/Baraka Street, Tabata - Kinyerezi, Dar es Salaam, Tanzania</li><li><i class="fa fa-phone"></i> +255 784 993 355 / +255 658 634 462 / +255 713 185 183</li><li><i class="fa fa-envelope"></i> codebancl@gmail.com / barakamaka31@gmail.com / info@codeban.co.tz</li>
                        <li><i class="fa fa-globe"></i> www.codeban.co.tz</li><li><i class="fa fa-instagram"></i> @codeban2020</li></ul>
        </div>
    </div></div>
    <div class="ve-footer-bottom"><div class="container"><div class="ve-footer-bottom-inner">
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Codeban Company Limited. All Rights Reserved <a href="https://github.com/Rabina-Vishwakarma/" class="text-white" target="_blank">Rabina Vishwakarma</a> • Distributed by <a href="https://themewagon.com" class="text-white" target="_blank">ThemeWagon</a></p>
        <ul><li><a href="#">Privacy Policy</a></li><li><a href="#">Terms of Use</a></li><li><a href="{{ route('login') }}" class="ve-footer-admin-link" aria-label="CMS login" title="CMS login"><i class="fa fa-lock"></i></a></li><li><a href="#">Cookie Policy</a></li></ul>
    </div></div></div></footer>
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body></html>
