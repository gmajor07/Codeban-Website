<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Contact Codeban Company Limited for PPE products, uniforms, footwear, fire extinguishers, banners, sewing, embroidery, branding, and safety services.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us — Codeban Company Limited</title>
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
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('clients') }}">Clients</a></li>
                        <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
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
    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/22.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Get In Touch</span>
            <h1>We'd Love to <span>Hear From You</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Home</a></li><li class="active">Contact</li></ol></nav>
        </div>
    </section>

    <section class="ve-contact-cards-section">
        <div class="container">
            <div class="ve-contact-cards-grid">
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="100ms"><div class="ve-ci-icon"><i class="fa fa-map-marker"></i></div><h5>Visit Our Office</h5><p>Block G Plot No.12, House No.1, Macedonia/Baraka Street, Tabata - Kinyerezi, Dar es Salaam, Tanzania</p></div>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="250ms"><div class="ve-ci-icon"><i class="fa fa-phone"></i></div><h5>Call Us</h5><p>+255 784 993 355<br>+255 658 634 462<br>+255 713 185 183</p></div>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="400ms"><div class="ve-ci-icon"><i class="fa fa-envelope"></i></div><h5>Email Us</h5><p>codebancl@gmail.com<br>barakamaka31@gmail.com<br>info@codeban.co.tz</p></div>
            </div>
        </div>
    </section>

    <section class="ve-section ve-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-contact-form-wrap">
                        <span class="ve-section-tag">Send a Message</span>
                        <h2>Request a <span>Quote</span></h2>
                        <p>Fill in the form and our team will respond about PPE products, uniforms, branding, fire safety equipment, or related services.</p>
                        <form class="ve-contact-form" action="#" method="post">
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>Full Name</label><input type="text" placeholder="Your full name" required></div>
                                <div class="ve-form-group"><label>Email Address</label><input type="email" placeholder="Your email" required></div>
                            </div>
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>Phone Number</label><input type="tel" placeholder="Your phone"></div>
                                <div class="ve-form-group"><label>Service Interested In</label>
                                    <select><option>Select a service</option><option>PPE Products</option><option>Safety Uniforms</option><option>Official Uniforms</option><option>Footwear</option><option>Fire Extinguishers</option><option>Banners & Branding</option><option>Sewing & Embroidery</option><option>Building Renovation Support</option></select>
                                </div>
                            </div>
                            <div class="ve-form-group"><label>Your Message</label><textarea rows="5" placeholder="Tell us what products or services you need..."></textarea></div>
                            <button type="submit" class="ve-btn-primary">Send Message <i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-contact-aside">
                        <div class="ve-ca-box">
                            <h4>Why Clients Choose Us</h4>
                            <ul class="ve-ca-list">
                                <li><i class="fa fa-check-circle"></i> PPE and safety product supply</li>
                                <li><i class="fa fa-check-circle"></i> Response within 24 hours</li>
                                <li><i class="fa fa-check-circle"></i> Safety uniforms and official uniforms</li>
                                <li><i class="fa fa-check-circle"></i> Banners, sewing, embroidery, and branding</li>
                                <li><i class="fa fa-check-circle"></i> Professional service across Tanzania</li>
                            </ul>
                        </div>
                        <div class="ve-ca-hours">
                            <h5><i class="fa fa-clock-o"></i> Office Hours</h5>
                            <ul>
                                <li><span>Monday - Friday</span><strong>8:00 AM - 5:00 PM</strong></li>
                                <li><span>Saturday</span><strong>By Appointment</strong></li>
                                <li><span>Sunday</span><strong>Closed</strong></li>
                            </ul>
                        </div>
                        <div class="ve-ca-social">
                            <h5>Connect With Us</h5>
                            <div class="ve-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/codeban2020" target="_blank"><i class="fa fa-instagram"></i></a>
                            </div>
                            <p class="mt-15">Website: <a href="http://www.codeban.co.tz" target="_blank">www.codeban.co.tz</a><br>Instagram: @codeban2020</p>
                        </div>
                    </div>
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
