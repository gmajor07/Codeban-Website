<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Codeban Company Limited serves corporate clients across logistics, manufacturing, mining, energy, construction, and industrial sectors.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clients — Codeban Company Limited</title>
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
                        <li><a href="{{ route('clients') }}" class="active">Clients</a></li>
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
    <section class="ve-page-hero" style="background-image:url({{ asset('img/bg-img/13.jpg') }});">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Our Clients</span><h1>Trusted by <span>Corporate Companies</span></h1>
            <nav aria-label="breadcrumb"><ol class="ve-breadcrumb"><li><a href="{{ route('home') }}">Home</a></li><li class="active">Clients</li></ol></nav>
        </div>
    </section>

    <section class="ve-section ve-elements-section">
        <div class="container">

            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>01</span> Industries We Serve</h3>
                <div class="ve-el-demo">
                    <a href="#" class="ve-btn-primary">Construction</a>
                    <a href="#" class="ve-btn-ghost">Manufacturing</a>
                    <a href="#" class="ve-btn-white" style="background:var(--ve-dark);color:#fff;">Mining</a>
                    <a href="#" class="ve-btn-primary">Logistics</a>
                    <a href="#" class="ve-btn-primary" style="background:transparent;border:2px solid var(--ve-gold);color:var(--ve-gold);">Oil &amp; Gas</a>
                    <a href="#" class="ve-cta-btn">Energy <i class="fa fa-arrow-right"></i></a>
                    <a href="#" class="ve-btn-ghost">Transportation</a>
                    <a href="#" class="ve-btn-primary">Government Institutions</a>
                    <a href="#" class="ve-btn-white" style="background:var(--ve-dark);color:#fff;">Healthcare</a>
                    <a href="#" class="ve-btn-primary" style="background:transparent;border:2px solid var(--ve-gold);color:var(--ve-gold);">Security Companies</a>
                </div>
            </div>

            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>02</span> Trusted By Leading Organizations</h3>
                <p>Codeban Company Limited has supplied and served businesses across logistics, manufacturing, mining, energy, construction, and industrial sectors.</p>
                @if ($clients->isNotEmpty())
                    <div class="ve-client-grid">
                        @foreach ($clients as $client)
                            <a href="{{ $client->websiteUrl() }}" class="ve-client-card" @if ($client->website) target="_blank" rel="noopener" @endif>
                                @if ($client->logo)
                                    <span class="ve-client-logo" style="background-image:url({{ asset($client->logo) }});"></span>
                                @else
                                    <span class="ve-client-initial">{{ strtoupper(substr($client->name, 0, 1)) }}</span>
                                @endif
                                <strong>{{ $client->name }}</strong>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="ve-el-demo">
                        <a href="#" class="ve-btn-primary">Tata</a>
                        <a href="#" class="ve-btn-ghost">John Deere</a>
                        <a href="#" class="ve-btn-white" style="background:var(--ve-dark);color:#fff;">Dangote Cement</a>
                        <a href="#" class="ve-btn-primary" style="background:transparent;border:2px solid var(--ve-gold);color:var(--ve-gold);">CRDB Bank</a>
                        <a href="#" class="ve-cta-btn">Taifa Gas <i class="fa fa-check"></i></a>
                        <a href="#" class="ve-btn-ghost">AGL</a>
                    </div>
                @endif
            </div>

            <!-- SERVICE CARDS -->
            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>03</span> What We Supply</h3>
                <div class="ve-services-grid">
                    <div class="ve-service-card"><div class="ve-service-icon"><i class="icon-profits"></i></div><h4>PPE Products</h4><p>PPE, uniforms, footwear, fire safety products, and branding materials for corporate teams.</p><a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a></div>
                    <div class="ve-service-card"><div class="ve-service-icon"><i class="fa fa-user"></i></div><h4>PPE Products</h4><p>Safety uniforms, official uniforms, and branded clothing for teams and institutions.</p><a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a></div>
                    <div class="ve-service-card"><div class="ve-service-icon"><i class="icon-coin"></i></div><h4>Safety Uniforms</h4><p>Banners, embroidery, sewing, and practical branding support for business visibility.</p><a href="#" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a></div>
                </div>
            </div>

            <!-- ACCORDION + FAQ -->
            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>04</span> Client Support</h3>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="ve-faq-list">
                            @if ($faqs->isNotEmpty())
                                @foreach ($faqs->take(ceil($faqs->count() / 2)) as $faq)
                                    <div class="ve-faq-item @if ($loop->first) open @endif"><div class="ve-faq-q"><span>{{ $faq->question }}</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">{{ $faq->answer }}</div></div>
                                @endforeach
                            @else
                                <div class="ve-faq-item open"><div class="ve-faq-q"><span>How do clients start working with Codeban?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Send your request through the contact page with quantities, sizes, product type, and branding details.</div></div>
                                <div class="ve-faq-item"><div class="ve-faq-q"><span>Do you support bulk corporate orders?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Yes. We supply businesses and institutions with bulk PPE, uniforms, banners, and branded items.</div></div>
                                <div class="ve-faq-item"><div class="ve-faq-q"><span>Which sectors do you serve?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">We serve logistics, manufacturing, mining, energy, construction, and industrial sectors.</div></div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="ve-faq-list">
                            @if ($faqs->isNotEmpty())
                                @foreach ($faqs->skip(ceil($faqs->count() / 2)) as $faq)
                                    <div class="ve-faq-item"><div class="ve-faq-q"><span>{{ $faq->question }}</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">{{ $faq->answer }}</div></div>
                                @endforeach
                            @else
                                <div class="ve-faq-item"><div class="ve-faq-q"><span>How do you handle quotations?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">We provide clear pricing based on product type, quantity, branding, and delivery requirements.</div></div>
                                <div class="ve-faq-item"><div class="ve-faq-q"><span>Do you serve clients across Tanzania?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Yes, we support clients across Tanzania based on order type and delivery arrangements.</div></div>
                                <div class="ve-faq-item"><div class="ve-faq-q"><span>Can we request branded uniforms?</span><i class="fa fa-plus"></i></div><div class="ve-faq-a">Yes, we support sewing, embroidery, logo application, and branded team wear.</div></div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- TESTIMONIAL CARDS -->
            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>05</span> Client Focus</h3>
                <div class="ve-testi-grid">
                    @if ($testimonials->isNotEmpty())
                        @foreach ($testimonials as $testimonial)
                            <div class="ve-testi-card">
                                <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                                <p>"{{ $testimonial->message }}"</p>
                                <div class="ve-testi-author">
                                    <div class="ve-testi-avatar bg-img" style="background-image:url({{ $testimonial->image ? asset($testimonial->image) : asset('img/bg-img/32.jpg') }});"></div>
                                    <div><strong>{{ $testimonial->client_name }}</strong><span>{{ $testimonial->company }}</span></div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="ve-testi-card"><div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>"Codeban supports corporate teams with PPE, uniforms, and branding materials for daily operations."</p><div class="ve-testi-author"><div class="ve-testi-avatar bg-img" style="background-image:url({{ asset('img/bg-img/32.jpg') }});"></div><div><strong>Alex Morgan</strong><span>Entrepreneur</span></div></div></div>
                        <div class="ve-testi-card"><div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>"We focus on reliable supply, clear communication, and practical support for every order."</p><div class="ve-testi-author"><div class="ve-testi-avatar bg-img" style="background-image:url({{ asset('img/bg-img/33.jpg') }});"></div><div><strong>Sarah Patel</strong><span>Marketing Director</span></div></div></div>
                        <div class="ve-testi-card"><div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>"Our work supports companies that need safety-first products and a professional brand presence."</p><div class="ve-testi-author"><div class="ve-testi-avatar bg-img" style="background-image:url({{ asset('img/bg-img/14.jpg') }});"></div><div><strong>James Liu</strong><span>Business Owner</span></div></div></div>
                    @endif
                </div>
            </div>

            <!-- COUNTERS -->
            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>06</span> Company Stats</h3>
                <section class="ve-counter-section" style="border-radius:var(--ve-radius);overflow:hidden;">
                    <div class="container"><div class="ve-counter-grid">
                        <div class="ve-counter-item"><i class="fa fa-users"></i><strong class="counter" data-count="100">0</strong><span>+</span><p>Corporate Clients</p></div>
                        <div class="ve-counter-item"><i class="fa fa-briefcase"></i><strong class="counter" data-count="20">0</strong><span>+</span><p>Product Categories</p></div>
                        <div class="ve-counter-item"><i class="fa fa-globe"></i><strong>TZ</strong><span></span><p>Tanzania Wide Service Coverage</p></div>
                        <div class="ve-counter-item"><i class="fa fa-trophy"></i><strong class="counter" data-count="10">0</strong><span>+</span><p>Years Experience</p></div>
                    </div></div>
                </section>
            </div>

            <!-- CONTACT FORM -->
            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>07</span> Contact Codeban</h3>
                <div class="ve-contact-form-wrap" style="max-width:700px;">
                    <form class="ve-contact-form" action="#" method="post">
                        <div class="ve-form-row">
                            <div class="ve-form-group"><label>Full Name</label><input type="text" placeholder="Your full name"></div>
                            <div class="ve-form-group"><label>Email Address</label><input type="email" placeholder="Your email"></div>
                        </div>
                        <div class="ve-form-row">
                            <div class="ve-form-group"><label>Phone Number</label><input type="tel" placeholder="Your phone"></div>
                            <div class="ve-form-group"><label>Service</label><select><option>Select a service</option><option>PPE Products</option><option>Safety Uniforms</option><option>Official Uniforms</option><option>Branding &amp; Printing</option></select></div>
                        </div>
                        <div class="ve-form-group"><label>Message</label><textarea rows="4" placeholder="Tell us what products or services you need..."></textarea></div>
                        <button type="submit" class="ve-btn-primary">Send Message <i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

            <!-- NEWSLETTER -->
            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>08</span> Service Request</h3>
    <section class="ve-newsletter-section"><div class="container"><div class="ve-newsletter-wrap">
        <div class="ve-nl-left"><i class="fa fa-envelope-o"></i><div><h3>Trusted by Corporate Companies</h3><p>We have supplied and served businesses across logistics, manufacturing, mining, energy, construction, and industrial sectors.</p></div></div>
        <div class="ve-nl-right"><form class="ve-nl-form" action="#" method="post"><input type="email" placeholder="Enter your email address" required><button type="submit">Subscribe</button></form></div>
    </div></div></section>
            </div>

            <!-- PROCESS STEPS -->
            <div class="ve-el-block">
                <h3 class="ve-el-title"><span>09</span> Delivery Process</h3>
                <div class="ve-process-grid">
                    <div class="ve-process-step"><div class="ve-process-num">01</div><h5>Share Your Request</h5><p>Send product, uniform, branding, or service requirements to our team.</p></div>
                    <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                    <div class="ve-process-step"><div class="ve-process-num">02</div><h5>Product Review</h5><p>We review quantities, sizes, branding needs, timelines, and delivery requirements.</p></div>
                    <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                    <div class="ve-process-step"><div class="ve-process-num">03</div><h5>Quotation</h5><p>Receive a clear quotation and product or service details.</p></div>
                    <div class="ve-process-arrow"><i class="fa fa-long-arrow-right"></i></div>
                    <div class="ve-process-step"><div class="ve-process-num">04</div><h5>Supply & Support</h5><p>We coordinate supply, branding, sewing, embroidery, or support services professionally.</p></div>
                </div>
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
