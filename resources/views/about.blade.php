<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Learn about Codeban Company Limited — our story, team, mission, and values.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us — Codeban Company Limited</title>
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
            <nav class="ve-nav">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="has-drop"><a href="{{ route('about') }}"  class='active'>About <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Our Services</a></li>
                            <li><a href="{{ route('clients') }}">Clients</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('clients') }}">Clients</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>
            <div class="ve-nav-cta"><a href="{{ route('contact') }}" class="ve-cta-btn">Contact Us <i class="fa fa-arrow-right"></i></a></div>
            <button class="ve-toggler" id="ve-toggle"><span></span><span></span><span></span></button>
        </div>
        <div class="ve-mobile-menu" id="ve-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('clients') }}">Clients</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </header>
    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/13.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Our Story</span>
            <h1>Building Trust Since <span>2013</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- ABOUT SPLIT -->
    <section class="ve-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-about-img-stack">
                        <div class="ve-about-img-1 bg-img" style="background-image:url({{ asset('img/bg-img/14.jpg') }});"></div>
                        <div class="ve-about-img-2 bg-img" style="background-image:url({{ asset('img/bg-img/5.jpg') }});"></div>
                        <div class="ve-about-ribbon"><strong>10+</strong><span>Years of Trust</span></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-about-text">
                        <span class="ve-section-tag">Who We Are</span>
                        <h2>A Firm Built on <span>Integrity</span> &amp; Results</h2>
                        <p class="ve-lead">Codeban Company Limited is a local multi-work company established in 2013.</p>
                        <p>We provide industrial safety materials, safety uniforms, official uniforms, equipment, building renovation support, banners, sewing, embroidery, and branding solutions. Our goal is to deliver reliable products and professional services with integrity, quality, and customer satisfaction.</p>
                        <div class="ve-about-features">
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>PPE products and industrial safety materials</span></div>
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>Safety uniforms and official uniforms</span></div>
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>Banners, sewing, embroidery, and branding</span></div>
                            <div class="ve-af-item"><i class="fa fa-check"></i><span>Reliable service with integrity and quality</span></div>
                        </div>
                        <a href="{{ route('services') }}" class="ve-btn-primary mt-30">View Our Services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION / VISION / VALUES -->
    <section class="ve-mvv-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Our Foundation</span>
                <h2>Mission, Vision &amp; <span>Values</span></h2>
            </div>
            <div class="ve-mvv-grid">
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-mvv-icon"><i class="fa fa-bullseye"></i></div>
                    <h4>Our Mission</h4>
                    <p>To offer excellent services in each of our professional disciplines in accordance with statutory practices, codes, and integrity.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-mvv-icon"><i class="fa fa-eye"></i></div>
                    <h4>Our Vision</h4>
                    <p>To be the most distinguished private company offering the best products and services in Tanzania and beyond.</p>
                </div>
                <div class="ve-mvv-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-mvv-icon"><i class="fa fa-heart"></i></div>
                    <h4>Our Approach</h4>
                    <p>We believe teamwork, clear communication, and professional project management are key to delivering successful results for every client.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM -->
    <section class="ve-section ve-team-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Our Work</span>
                <h2>Safety First <span>in Practice</span></h2>
                <p>We support companies that need dependable PPE, uniforms, branding, sewing, embroidery, and practical project support.</p>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/15.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>PPE Supply</h5><span>Safety Materials &amp; Equipment</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/16.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>Uniform Services</h5><span>Safety &amp; Official Uniforms</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/17.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>Branding</h5><span>Banners, Sewing &amp; Embroidery</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-team-card">
                        <div class="ve-team-img bg-img" style="background-image:url({{ asset('img/bg-img/18.jpg') }});"></div>
                        <div class="ve-team-info">
                            <h5>Project Support</h5><span>Renovation &amp; Business Solutions</span>
                            <div class="ve-team-social"><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-counter-section">
        <div class="container">
            <div class="ve-counter-grid">
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-users"></i>
                    <strong class="counter" data-count="10">0</strong><span>+</span>
                    <p>Years Experience</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-briefcase"></i>
                    <strong class="counter" data-count="100">0</strong><span>+</span>
                    <p>Corporate Clients</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-globe"></i>
                    <strong class="counter" data-count="20">0</strong><span>+</span>
                    <p>Product Categories</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-trophy"></i>
                    <strong>TZ</strong><span></span>
                    <p>Tanzania Wide Service Coverage</p>
                </div>
            </div>
        </div>
    </section>
    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">
                <div class="ve-nl-left">
                    <i class="fa fa-envelope-o"></i>
                    <div>
                        <h3>Work With Codeban</h3>
                        <p>Send your PPE, uniform, branding, or service request to our team.</p>
                    </div>
                </div>
                <div class="ve-nl-right">
                    <form class="ve-nl-form" action="#" method="post">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="ve-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-4 mb-50">
                    <div class="ve-footer-brand">
                        <a href="{{ route('home') }}" class="ve-footer-logo"><span class="ve-logo-icon">C</span><span class="ve-logo-text">Codeban<strong></strong></span></a>
                        <p>Supplying PPE, uniforms, footwear, fire safety equipment, branding, and professional business solutions in Tanzania.</p>
                        <div class="ve-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-50">
                    <h5 class="ve-footer-title">Quick Links</h5>
                    <ul class="ve-footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('clients') }}">Clients</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Our Services</h5>
                    <ul class="ve-footer-links">
                        <li><a href="#">PPE Products</a></li>
                        <li><a href="#">Safety Uniforms</a></li>
                        <li><a href="#">Footwear</a></li>
                        <li><a href="#">Fire Extinguishers</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Get In Touch</h5>
                    <ul class="ve-footer-contact">
                        <li><i class="fa fa-map-marker"></i> Block G Plot No.12, House No.1, Macedonia/Baraka Street, Tabata - Kinyerezi, Dar es Salaam, Tanzania</li>
                        <li><i class="fa fa-phone"></i> +255 784 993 355 / +255 658 634 462 / +255 713 185 183</li>
                        <li><i class="fa fa-envelope"></i> codebancl@gmail.com / barakamaka31@gmail.com / info@codeban.co.tz</li>
                        <li><i class="fa fa-globe"></i> www.codeban.co.tz</li>
                        <li><i class="fa fa-instagram"></i> @codeban2020</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ve-footer-bottom">
            <div class="container">
                <div class="ve-footer-bottom-inner">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Codeban Company Limited. All Rights Reserved <a href="https://github.com/Rabina-Vishwakarma/" class="text-white" target="_blank">Rabina Vishwakarma</a> • Distributed by <a href="https://themewagon.com" class="text-white" target="_blank">ThemeWagon</a></p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="{{ route('login') }}" class="ve-footer-admin-link" aria-label="CMS login" title="CMS login"><i class="fa fa-lock"></i></a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body>
</html>
