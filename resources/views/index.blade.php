<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban Company Limited supplies PPE products, uniforms, safety materials, fire equipment, banners, sewing, embroidery, and branding services in Tanzania.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Codeban Company Limited — Safety First</title>

    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-override.css') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <!-- Logo -->
            <div class="ve-logo">
                <a href="{{ route('home') }}">
                    <span class="ve-logo-icon">C</span>
                    <span class="ve-logo-text">Codeban<strong></strong></span>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="ve-nav">
                <ul>
                    <li><a href="{{ route('home') }}" class="active">Home</a></li>
                    <li class="has-drop">
                        <a href="{{ route('about') }}">About <i class="fa fa-angle-down"></i></a>
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

            <!-- CTA -->
            <div class="ve-nav-cta">
                <a href="{{ route('contact') }}" class="ve-cta-btn">Contact Us <i class="fa fa-arrow-right"></i></a>
            </div>

            <!-- Mobile Toggle -->
            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>

        <!-- Mobile Menu -->
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

    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
    <section class="ve-hero">
        <!-- Left Panel -->
        <div class="ve-hero-left">
            <span class="ve-hero-badge">Safety First &nbsp;·&nbsp; Trusted Since 2013</span>
            <h1>Your Trusted Partner in <span class="ve-highlight">Safety</span>, Uniforms &amp; Branding</h1>
            <p>Codeban Company Limited supplies high-quality PPE, safety uniforms, footwear, fire extinguishers, banners, and customized branding solutions for businesses across Tanzania.</p>
            <div class="ve-hero-btns">
                <a href="{{ route('products') }}" class="ve-btn-primary">Explore Products</a>
                <a href="{{ route('contact') }}" class="ve-btn-ghost">Contact Us</a>
            </div>
            <!-- Quick Stats Row -->
            <div class="ve-hero-stats">
                <div class="ve-stat">
                    <strong>20+</strong>
                    <span>Product Categories</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>100+</strong>
                    <span>Corporate Clients</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>10+</strong>
                    <span>Years Experience</span>
                </div>
            </div>
        </div>
        <!-- Right Panel: overlapping image cards -->
        <div class="ve-hero-right">
            <div class="ve-hero-img-main bg-img" style="background-image:url({{ asset('img/bg-img/1.jpg') }});"></div>
            <div class="ve-hero-img-accent bg-img" style="background-image:url({{ asset('img/bg-img/3.jpg') }});"></div>
            <!-- Floating card -->
            <div class="ve-float-card">
                <i class="fa fa-line-chart"></i>
                <div>
                    <strong>Safety</strong>
                    <span>First</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== MARQUEE TRUST BAR ===== -->
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
            <span><i class="fa fa-shield"></i> Quality Safety Products</span>
            <span><i class="fa fa-check-circle"></i> Registered Local Supplier</span>
            <span><i class="fa fa-users"></i> 100+ Corporate Clients</span>
            <span><i class="fa fa-lock"></i> Safety First Standard</span>
            <span><i class="fa fa-trophy"></i> Trusted Corporate Service</span>
            <span><i class="fa fa-globe"></i> Tanzania Wide Service</span>
            <span><i class="fa fa-shield"></i> Quality Safety Products</span>
            <span><i class="fa fa-check-circle"></i> Registered Local Supplier</span>
            <span><i class="fa fa-users"></i> 100+ Corporate Clients</span>
            <span><i class="fa fa-lock"></i> Safety First Standard</span>
        </div>
    </div>

    <!-- ===== SERVICES GRID (new card layout) ===== -->
    <section class="ve-section ve-services-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">What We Offer</span>
                <h2>Safety, Uniform &amp; <span>Branding Solutions</span></h2>
                <p>We supply essential workplace safety products and professional branding services for businesses across Tanzania.</p>
            </div>
            <div class="ve-services-grid">
                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-service-icon"><i class="icon-profits"></i></div>
                    <h4>PPE Products</h4>
                    <p>Reliable helmets, jackets, goggles, gloves, masks, and industrial safety materials for daily site protection.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-service-icon"><i class="fa fa-user"></i></div>
                    <h4>Safety Uniforms</h4>
                    <p>Durable reflective uniforms and workwear designed for visibility, comfort, and site compliance.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-service-icon"><i class="icon-coin"></i></div>
                    <h4>Official Uniforms</h4>
                    <p>Clean corporate and official uniforms tailored for teams, institutions, and customer-facing staff.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-service-icon"><i class="icon-smartphone-1"></i></div>
                    <h4>Footwear</h4>
                    <p>Safety boots and protective footwear selected for industrial, construction, and field environments.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="ve-service-icon"><i class="icon-diamond"></i></div>
                    <h4>Fire Extinguishers</h4>
                    <p>Fire safety equipment and supply support for offices, factories, workshops, and project sites.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                    <div class="ve-service-icon"><i class="icon-piggy-bank"></i></div>
                    <h4>Banners & Branding</h4>
                    <p>Banners, printed materials, embroidery, and branded clothing that help your company stand out professionally.</p>
                    <a href="{{ route('services') }}" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY US (two-column: image left, content right) ===== -->
    <section class="ve-section ve-whyus-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-12 col-lg-5">
                    <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ve-whyus-img-main bg-img" style="background-image:url({{ asset('img/bg-img/5.jpg') }});"></div>
                        <div class="ve-whyus-badge">
                            <strong>10+</strong>
                            <span>Years of Codeban Excellence</span>
                        </div>
                    </div>
                </div>
                <!-- Content Side -->
                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-whyus-content">
                        <span class="ve-section-tag">Why Codeban Company Limited</span>
                        <h2>Professional Products Built Around <span>Safety First</span></h2>
                        <p>We combine reliable sourcing, practical field knowledge, and responsive service to help companies protect teams and present a strong professional brand.</p>
                        <div class="ve-checklist">
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Over 10 Years of Experience</strong><p>Established in 2013, we understand workplace safety, uniforms, and business branding needs.</p></div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Trusted by Leading Corporate Companies</strong><p>We serve organizations across construction, logistics, manufacturing, mining, energy, and industrial sectors.</p></div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Quality PPE and Safety Equipment</strong><p>We focus on dependable PPE, uniforms, fire safety equipment, and industrial safety materials.</p></div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Professional Branding and Embroidery</strong><p>Banners, promotional materials, branded caps, polo shirts, and customized workwear are handled professionally.</p></div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Reliable Delivery and Customer Support</strong><p>Our team communicates clearly from enquiry to delivery and after-service support.</p></div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Competitive Pricing</strong><p>Clear quotations with practical options for product quality, quantity, branding, and timelines.</p></div>
                            </div>
                        </div>
                        <a href="{{ route('about') }}" class="ve-btn-primary mt-30">Discover Our Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COUNTERS ===== -->
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

    <!-- ===== TESTIMONIALS ===== -->
    <section class="ve-section ve-testimonials-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Client Stories</span>
                <h2>What Our Clients <span>Say</span></h2>
            </div>
            <div class="ve-testi-grid">
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Codeban Company Limited helped us source reliable safety wear and branded uniforms for our field teams."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url({{ asset('img/bg-img/32.jpg') }});"></div>
                        <div><strong>Alex Morgan</strong><span>Entrepreneur</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Their team responds quickly, explains options clearly, and delivers the right safety materials for our operations."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url({{ asset('img/bg-img/33.jpg') }});"></div>
                        <div><strong>Sarah Patel</strong><span>Marketing Director</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"We use Codeban for banners, embroidery, and uniforms because the service is practical and professional."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url({{ asset('img/bg-img/14.jpg') }});"></div>
                        <div><strong>James Liu</strong><span>Business Owner</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="ve-cta-banner bg-img" style="background-image:url({{ asset('img/bg-img/6.jpg') }});">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h2>Ready to Equip Your Team with <span>Safety First?</span></h2>
                    <p>Contact Codeban Company Limited for PPE, uniforms, footwear, fire safety equipment, banners, and branding services.</p>
                </div>
                <div class="col-12 col-lg-4 text-lg-right">
                    <a href="{{ route('contact') }}" class="ve-btn-white">Request a Quote</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LATEST INSIGHTS ===== -->
    <section class="ve-section ve-insights-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Product Categories</span>
                <h2>Featured Safety &amp; Branding <span>Products</span></h2>
                <p>Explore core product categories we supply for industrial, corporate, and field teams.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/10.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">PPE</span>
                            <h5><a href="{{ route('products') }}">Reflective Safety Jackets</a></h5>
                            <p>High-visibility jackets and workwear for construction, logistics, and industrial sites.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 26</span>
                                <a href="{{ route('products') }}">View Products <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/11.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Footwear</span>
                            <h5><a href="{{ route('products') }}">Safety Boots</a></h5>
                            <p>Protective boots for demanding work environments and industrial operations.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 20</span>
                                <a href="{{ route('products') }}">View Products <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url({{ asset('img/bg-img/12.jpg') }});"></div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Branding</span>
                            <h5><a href="{{ route('products') }}">T-Shirts, Caps &amp; Banners</a></h5>
                            <p>Custom branded materials, embroidery, and printed items for company visibility.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 14</span>
                                <a href="{{ route('products') }}">View Products <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== NEWSLETTER ===== -->
    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">
                <div class="ve-nl-left">
                    <i class="fa fa-envelope-o"></i>
                    <div>
                        <h3>Need Safety Products or Branding?</h3>
                        <p>Send your request and our team will help you choose the right solution.</p>
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

    <!-- ===== FOOTER (dark, 4-column) ===== -->
    <footer class="ve-footer">
        <div class="container">
            <div class="row">
                <!-- Col 1: Brand -->
                <div class="col-12 col-sm-6 col-lg-4 mb-50">
                    <div class="ve-footer-brand">
                        <a href="{{ route('home') }}" class="ve-footer-logo">
                            <span class="ve-logo-icon">C</span>
                            <span class="ve-logo-text">Codeban<strong></strong></span>
                        </a>
                        <p>Supplying PPE, uniforms, footwear, fire safety equipment, branding, and professional business solutions in Tanzania.</p>
                        <div class="ve-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Col 2: Quick Links -->
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
                <!-- Col 3: Services -->
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Our Services</h5>
                    <ul class="ve-footer-links">
                        <li><a href="#">PPE Products</a></li>
                        <li><a href="#">Safety Uniforms</a></li>
                        <li><a href="#">Official Uniforms</a></li>
                        <li><a href="#">Footwear</a></li>
                        <li><a href="#">Fire Extinguishers</a></li>
                    </ul>
                </div>
                <!-- Col 4: Contact -->
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

        <!-- Footer Bottom Bar -->
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

    <!-- Scripts -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body>
</html>
