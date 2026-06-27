<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban Company Limited offers PPE products, safety uniforms, official uniforms, footwear, fire extinguishers, banners, sewing, embroidery, and branding services.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Our Services — Codeban Company Limited</title>
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
                    <li class="has-drop"><a href="{{ route('about') }}">About <i class="fa fa-angle-down"></i></a>
                        <ul class="ve-dropdown">
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('services') }}">Our Services</a></li>
                            <li><a href="{{ route('clients') }}">Clients</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('services') }}" class="active">Services</a></li>
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
    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/20.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">What We Offer</span>
            <h1>Professional <span>Safety Services</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Home</a></li><li class="active">Services</li></ol></nav>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Our Expertise</span>
                <h2>Solutions for Every <span>Workplace Need</span></h2>
                <p>From PPE supply to uniforms, banners, sewing, embroidery, and renovation support, our services are built for practical business needs.</p>
            </div>
            <div class="ve-services-grid">
                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms"><div class="ve-service-icon"><i class="fa fa-shield"></i></div><h4>PPE Products</h4><p>Reflective jackets, coveralls, safety vests, reflective T-shirts, reflective trousers, safety uniforms, and official uniforms.</p><a href="{{ route('products') }}" class="ve-card-link">View products <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms"><div class="ve-service-icon"><i class="fa fa-road"></i></div><h4>Footwear</h4><p>Safety boots, industrial boots, gumboots, and protective work shoes for demanding workplace environments.</p><a href="{{ route('products') }}" class="ve-card-link">View products <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms"><div class="ve-service-icon"><i class="fa fa-industry"></i></div><h4>Head Protection</h4><p>Safety helmets and bump caps for construction, manufacturing, logistics, and industrial site safety.</p><a href="{{ route('products') }}" class="ve-card-link">View products <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms"><div class="ve-service-icon"><i class="fa fa-eye"></i></div><h4>Eye Protection</h4><p>Safety goggles and protective glasses for workshop, production, construction, and field operations.</p><a href="{{ route('products') }}" class="ve-card-link">View products <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms"><div class="ve-service-icon"><i class="fa fa-volume-off"></i></div><h4>Hearing Protection</h4><p>Ear muffs and ear plugs for teams working in noisy industrial and operational environments.</p><a href="{{ route('products') }}" class="ve-card-link">View products <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms"><div class="ve-service-icon"><i class="fa fa-hand-paper-o"></i></div><h4>Hand Protection</h4><p>Leather gloves, industrial gloves, and cut resistant gloves for safe daily handling and site work.</p><a href="{{ route('products') }}" class="ve-card-link">View products <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="700ms"><div class="ve-service-icon"><i class="fa fa-fire-extinguisher"></i></div><h4>Fire Safety</h4><p>Fire extinguishers, fire safety equipment, and fire protection accessories for companies and facilities.</p><a href="{{ route('contact') }}" class="ve-card-link">Request quote <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="800ms"><div class="ve-service-icon"><i class="fa fa-flag"></i></div><h4>Branding &amp; Printing</h4><p>Roll-up banners, promotional banners, business branding, and corporate advertising materials.</p><a href="{{ route('contact') }}" class="ve-card-link">Request quote <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="900ms"><div class="ve-service-icon"><i class="fa fa-scissors"></i></div><h4>Sewing &amp; Embroidery</h4><p>Corporate uniforms, security uniforms, medical uniforms, chef uniforms, polo shirts, branded caps, and customized workwear.</p><a href="{{ route('contact') }}" class="ve-card-link">Request quote <i class="fa fa-long-arrow-right"></i></a></div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="1000ms"><div class="ve-service-icon"><i class="fa fa-building"></i></div><h4>Building Renovation Support</h4><p>Practical renovation support services for business spaces and operational facilities.</p><a href="{{ route('contact') }}" class="ve-card-link">Request quote <i class="fa fa-long-arrow-right"></i></a></div>
            </div>
        </div>
    </section>

    <section class="ve-process-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">How It Works</span>
                <h2>From Request to <span>Delivery</span></h2>
            </div>
            <div class="ve-process-grid">
                <div class="ve-process-step wow fadeInUp" data-wow-delay="100ms"><div class="ve-process-num">01</div><h5>Share Your Need</h5><p>Tell us the products, sizes, quantities, branding details, or service support you require.</p></div>
                <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="250ms"><div class="ve-process-num">02</div><h5>Product Guidance</h5><p>We help match your request with practical safety, uniform, branding, or renovation options.</p></div>
                <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="400ms"><div class="ve-process-num">03</div><h5>Quotation</h5><p>Receive clear pricing, timelines, and product or service details before work begins.</p></div>
                <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                <div class="ve-process-step wow fadeInUp" data-wow-delay="550ms"><div class="ve-process-num">04</div><h5>Supply &amp; Support</h5><p>We coordinate delivery, branding, sewing, or service support with professional follow-through.</p></div>
            </div>
        </div>
    </section>

    <section class="ve-section ve-faq-section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-lg-5 wow fadeInLeft" data-wow-delay="100ms">
                    <span class="ve-section-tag">Common Questions</span>
                    <h2>Frequently Asked <span>Questions</span></h2>
                    <p>Can't find what you're looking for? <a href="{{ route('contact') }}" style="color:var(--ve-gold);">Reach out to us</a> and we'll respond within 24 hours.</p>
                    <a href="{{ route('contact') }}" class="ve-btn-primary mt-30">Contact Our Team</a>
                </div>
                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-faq-list">
                        <div class="ve-faq-item open"><div class="ve-faq-q"><span>How do I request products from Codeban?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Contact us with the product type, quantity, sizes, and any branding requirements. Our team will respond with guidance and a quotation.</div></div>
                        <div class="ve-faq-item"><div class="ve-faq-q"><span>Do you supply customized uniforms?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Yes. We support safety uniforms, official uniforms, sewing, embroidery, and logo branding.</div></div>
                        <div class="ve-faq-item"><div class="ve-faq-q"><span>Do you serve companies outside Dar es Salaam?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Yes. We serve clients across Tanzania depending on the product, project, and delivery requirements.</div></div>
                        <div class="ve-faq-item"><div class="ve-faq-q"><span>Can you support bulk corporate orders?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Yes. We work with corporate clients in logistics, manufacturing, mining, energy, construction, and industrial sectors.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-cta-banner bg-img" style="background-image:url({{ asset('img/bg-img/6.jpg') }});">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8"><h2>Need PPE, Uniforms or Branding <span>Support?</span></h2><p>Contact Codeban Company Limited and our team will help you choose the right solution.</p></div>
                <div class="col-12 col-lg-4 text-lg-right"><a href="{{ route('contact') }}" class="ve-btn-white">Request a Quote</a></div>
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
                        <div class="ve-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-50">
                    <h5 class="ve-footer-title">Quick Links</h5>
                    <ul class="ve-footer-links"><li><a href="{{ route('home') }}">Home</a></li><li><a href="{{ route('about') }}">About Us</a></li><li><a href="{{ route('services') }}">Services</a></li><li><a href="{{ route('products') }}">Products</a></li><li><a href="{{ route('clients') }}">Clients</a></li><li><a href="{{ route('contact') }}">Contact</a></li></ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Our Services</h5>
                    <ul class="ve-footer-links"><li><a href="#">PPE Products</a></li><li><a href="#">Safety Uniforms</a></li><li><a href="#">Official Uniforms</a></li><li><a href="#">Footwear</a></li><li><a href="#">Fire Extinguishers</a></li></ul>
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
        <div class="ve-footer-bottom"><div class="container"><div class="ve-footer-bottom-inner">
            <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Codeban Company Limited. All Rights Reserved <a href="https://github.com/Rabina-Vishwakarma/" class="text-white" target="_blank">Rabina Vishwakarma</a> • Distributed by <a href="https://themewagon.com" class="text-white" target="_blank">ThemeWagon</a></p>
            <ul><li><a href="#">Privacy Policy</a></li><li><a href="#">Terms of Use</a></li><li><a href="{{ route('login') }}" class="ve-footer-admin-link" aria-label="CMS login" title="CMS login"><i class="fa fa-lock"></i></a></li><li><a href="#">Cookie Policy</a></li></ul>
        </div></div></div>
    </footer>
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/plugins.js') }}"></script>
    <script src="{{ asset('js/active.js') }}"></script>
    <script src="{{ asset('js/vaultedge.js') }}"></script>
</body>
</html>
