@extends('layouts.frontend')
@section('content')
    <!-- Banner Area Start -->
    <div class="wc-main-banner">
        <div class="container-fluid">
            <div class="row justify-content-between flex-reverse">
                <div class="col-md-12">
                    <div class="wc-main-banner-wrap">
                        <div class="wc-main-banner-inner">
                            <div class="wc-main-banner-info">
                                <h1>Professional<br> Clipping Path & Photo Editing Service</h1>
                                <p>We provide 100% handmade photo editing services to use photoshop. So you will get
                                    great quality services. always try to deliver your order within 24 hours or less.</p>
                                <div class="wc-btn-group">
                                    <a href="#" class="wc-btn wc-fill-btn">Get started</a>
                                    <a href="quote.html" class="wc-btn wc-border-btn">Get A Quote</a>
                                </div>
                            </div>
                            <div class="wc-banner-img">
                                <img class="img-fluid" src="assets/img/banner-img.png" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/highlight.png" alt="highlight" class="wc-highlight">
    </div>
    <!-- Banner Area End -->
    <!-- Service Area Start -->
    <!-- Road Map Area Start -->
    <div class="wc-road-map section-padding">
        <div class="container">
            <div class="row align-items-xl-end">
                <div class="col-md-12 col-lg-6 pe-lg-5">
                    <div class="wc-section-title">
                        <h2>Our most popular <span>photo editing</span> services</h2>
                    </div>
                    <div class="wc-road-map-img text-center mb-5 mb-lg-0">
                        <img src="assets/img/road-map.png" alt="Road Map" class="img-fluid">
                        <div class="wc-road-map-box">
                            <a href="#">Show All Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    @foreach ($services as $service)
                        <div class="wc-box wc-box-left-img">
                            <div class="wc-box-info">
                                <h3>{{ $service->title }}</h3>
                                <p>{{ $service->short_description }}</p>
                            </div>
                            <div class="wc-box-img">
                                <a href="#" class="read-more">Read More <i class="icofont-long-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Road Map Area End -->
    <!-- Client Area Start -->
    <section class="client-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-6">
                    <div class="wc-section-title text-center mb-5">
                        <h2>Trusted by <span>3000+</span> Businesses Worldwide</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wc-clients">
                        <div class="wc-client-logo">
                            <img src="assets/img/client-logo.png" alt="client">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Area End -->
    <!-- Portfolio Area Start -->
    <section class="wc-portfolio-area section-padding-top">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-md-8">
                    <div class="wc-section-title">
                        <h2>Some of our finest <span>work.</span></h2>
                        <p>There are many variations of passages but the majority have suffered alteration.</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-mb-0 text-md-end">
                    <div class="wc-btn-group">
                        <a href="portfolio.html" class="wc-btn wc-fill-btn">View All Work</a>
                        <a href="quote.html" class="wc-btn wc-border-btn">Get A Quote</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($portfolios as $portfolio)
                    <div class="col-md-4">
                        <div class="wc-portfolio-item">
                            <a href="{{ $portfolio->getFirstMediaUrl('service-portfolio') }}">
                                <img class="img-fluid" src="{{ $portfolio->getFirstMediaUrl('service-portfolio') }}" alt="portfolio">
                                <h2>{{ $portfolio->service->title }}</h2>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->
    <!-- CTA Area Start -->
    <section class="wc-cta-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wc-cta-inner">
                        <div class="wc-section-title mb-5">
                            <h2>You have any <span>projects</span> in your mind?</h2>
                        </div>
                        <div class="wc-btn-group">
                            <a href="how-it-work.html" class="wc-btn wc-fill-btn">Get started</a>
                            <a href="free-trial.html" class="wc-btn wc-border-btn">Free Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area End -->
    <!-- Testimonials Area Start -->
    <section class="wc-testimonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wc-section-title text-center mb-5">
                        <h2>People are <span>Talking</span> About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wc-testimonials">
                        @foreach ($testimonials as $testimonial)
                            <div class="wc-testimonial-item">
                                <div class="wc-testimonial-item-heder">
                                    <div class="wc-testimonial-item-heder-left">
                                        <img class="img-fluid rounded-circle" src="{{ $testimonial->getFirstMediaUrl('service-testimonial', 'thumb') }}" alt="Adams Baker">
                                    </div>
                                    <div class="wc-testimonial-item-heder-right">
                                        <h5>{{ $testimonial->name }}</h5>
                                        <h6>{{ $testimonial->country }}</h6>
                                    </div>
                                </div>
                                <p>{{ $testimonial->message }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Area End -->
    <!-- Pricing Area Start -->
    <section class="wc-pricing-area section-padding">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-md-8">
                    <div class="wc-section-title">
                        <h2>Services & <span>Pricing</span> Guide</h2>
                        <p>Try Your First 3 Images for Free to Test Our Quality and Service</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-mb-0 text-md-end">
                    <div class="wc-btn-group">
                        <a href="#" class="wc-btn wc-fill-btn">Get started</a>
                        <a href="quote.html" class="wc-btn wc-border-btn">Get A Quote</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-md-12">
                        <div class="pricing-item">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img class="img-fluid" src="{{ $service->getFirstMediaUrl('services', 'small') }}"
                                         alt="pricing">
                                </div>
                                <div class="col-md-6">
                                    <h4>{{ $service->title }}</h4>
                                    <p>{{ $service->short_description }}</p>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <div class="wc-price-cst">
                                        <p>Starting per image</p>
                                        <h6>${{ $service->price_usd }} USD</h6>
                                        <h6>€{{ $service->price_eur }} EURO</h6>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-2 mt-3 mt-lg-0">
                                    <a href="#!" class="wc-btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Pricing Area End -->
    <!-- Choose Area Start -->
    <section class="wc-choose-area section-padding bg-dark-mad shep-pose">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-md-8">
                    <div class="wc-section-title">
                        <h2>Why <span>Choose</span> Us?</h2>
                        <p>Try Your First 3 Images for Free to Test Our Quality and Service</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-mb-0 text-md-end">
                    <div class="wc-btn-group">
                        <a href="#" class="wc-btn wc-fill-btn">Get started</a>
                        <a href="quote.html" class="wc-btn wc-border-btn">Get A Quote</a>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="wc-choose-item bg-purple">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Edited by hand</h4>
                            </div>
                            <div class="wc-choose-item-head-right">
                                <img src="assets/img/choose/hand.png" alt="hand">
                            </div>
                        </div>
                        <p>Our team comprises certified and experienced image editors. We are selective and detailed
                            in our hiring process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wc-choose-item bg-mad">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Pixel perfect results</h4>
                            </div>
                            <div class="wc-choose-item-head-right">
                                <img src="assets/img/choose/path.png" alt="hand">
                            </div>
                        </div>
                        <p>Our team comprises certified and experienced image editors. We are selective and detailed
                            in our hiring process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wc-choose-item bg-purple">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>24/7 support</h4>
                            </div>
                            <div class="wc-choose-item-head-right">
                                <img src="assets/img/choose/phone.png" alt="hand">
                            </div>
                        </div>
                        <p>Our team comprises certified and experienced image editors. We are selective and detailed
                            in our hiring process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wc-choose-item bg-mad">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Quick turnaround</h4>
                            </div>
                            <div class="wc-choose-item-head-right">
                                <img src="assets/img/choose/clock.png" alt="hand">
                            </div>
                        </div>
                        <p>Our team comprises certified and experienced image editors. We are selective and detailed
                            in our hiring process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wc-choose-item bg-purple">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Under budget</h4>
                            </div>
                            <div class="wc-choose-item-head-right">
                                <img src="assets/img/choose/pad.png" alt="hand">
                            </div>
                        </div>
                        <p>Our team comprises certified and experienced image editors. We are selective and detailed
                            in our hiring process.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wc-choose-item bg-mad">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Ecommerce optimized</h4>
                            </div>
                            <div class="wc-choose-item-head-right">
                                <img src="assets/img/choose/ecommerce.png" alt="hand">
                            </div>
                        </div>
                        <p>Our team comprises certified and experienced image editors. We are selective and detailed
                            in our hiring process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Area End -->
    <!-- Work Area Start -->
    <section class="wc-work-area section-padding">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div class="wc-section-title text-center">
                        <h2>How we <span>work</span></h2>
                        <p>Try Your First 3 Images for Free to Test Our Quality and Service</p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="wc-choose-item bg-light-sea-green p-5">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Step 01</h4>
                            </div>
                        </div>
                        <p>Request a quote for the images you need edited — we’ll get back to you within 45 minutes
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wc-choose-item bg-dark-cyan p-5">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Step 02</h4>
                            </div>
                        </div>
                        <p>Approve your quote and give us the green light to get started</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wc-choose-item bg-teal p-5">
                        <div class="wc-choose-item-head">
                            <div class="wc-choose-item-head-left">
                                <h4>Step 03</h4>
                            </div>
                        </div>
                        <p>Upload your images, and then let us do the rest</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Area End -->
    <!-- CTA Area Start -->
    <section class="wc-cta-area wc-cta-project section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wc-cta-inner wc-cta-inner-project">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="wc-section-title mb-5">
                                    <h2>You have any <span>projects</span> in your mind?</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wc-btn-group justify-content-md-end">
                                    <a href="#" class="wc-btn wc-border-btn">Free Trial</a>
                                    <a href="#" class="wc-btn wc-fill-btn">Get started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area End -->
    <!-- Blog Area Start -->
    <section class="wc-blog-area home section-padding-bottom">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-md-8">
                    <div class="wc-section-title">
                        <h2>Our Latest <span>Blog</span> Post</h2>
                        <p>Will Learn Business, Ecommerce and Product Photography Tips</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-mb-0 text-md-end">
                    <div class="wc-btn-group justify-content-md-end">
                        <a href="#" class="wc-btn wc-border-btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="wc-blog-item">
                        <a href="#" class="wc-blog-img">
                            <img class="img-fluid" src="assets/img/blog/blog-1.jpg" alt="blog">
                        </a>
                        <div class="wc-blog-info">
                            <ul class="wc-blog-meta">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">June 28, 2021</a></li>
                            </ul>
                            <h4><a href="#">How to design a product that can grow itself 10x in year</a></h4>
                            <p>Auctor Porta. Augue vitae diam mauris faucibus blandit elit per, feugiat leo dui
                                orci. Etiam vestibulum. Nostra netus per conubia dolor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="wc-blog-item">
                        <a href="#" class="wc-blog-img">
                            <img class="img-fluid" src="assets/img/blog/blog-2.jpg" alt="blog">
                        </a>
                        <div class="wc-blog-info">
                            <ul class="wc-blog-meta">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">June 28, 2021</a></li>
                            </ul>
                            <h4><a href="#">The More Important the Work, the More Important the Rest</a></h4>
                            <p>Suitable Quality is determined by product users, clients or customers, not by society
                                in general. For example, a low uct may be viewed as having high.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="wc-blog-item">
                        <a href="#" class="wc-blog-img">
                            <img class="img-fluid" src="assets/img/blog/blog-3.jpg" alt="blog">
                        </a>
                        <div class="wc-blog-info">
                            <ul class="wc-blog-meta">
                                <li><a href="#">Design</a></li>
                                <li><a href="#">June 28, 2021</a></li>
                            </ul>
                            <h4><a href="#">Email Love - Email Inspiration, Templates and Discovery</a></h4>
                            <p>Consider that for a moment: everything we see around us is assumed to have had a
                                cause and is contingent upon something else.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
@endsection
