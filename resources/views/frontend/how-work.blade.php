@extends('layouts.frontend')
@section('content')
    @include('frontend.partials.breadcrumb')
    <!-- Service Area Start -->
    <section class="wc-video-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="wc-section-title text-center mb-5">
                        <h2>Our Strategy and Project plan</h2>
                        <p>Here's how we make it easy to get fast, affordable product photo edits — all done by hand by pro designers. Let's check our working process.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="wc-video-box">
                        <img src="{{ asset('assets/img/video-bg.jpg') }}" alt="video">
                        <a href="https://www.youtube.com/watch?v=xcJtL7QggTI" class="wc-video-player">
                            <img src="{{ asset('assets/img/owl.video.play.png') }}" alt="play">
                            <h5>Watch How it work</h5>
                            <span>Within 29 sec</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->
    <!-- CTA Area Start -->
    <section class="wc-cta-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wc-cta-inner wc-cta-inner-project">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="wc-section-title">
                                    <h2>How we <span>work</span></h2>
                                    <p>Try Your First 3 Images for Free to Test Our Quality and Service</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wc-btn-group justify-content-md-end">
                                    <a href="{{ route('free-trial') }}" class="wc-btn wc-border-btn">Free Trial</a>
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
    <!-- CTA Area Start -->
    <section class="wc-stape-area">
        <div class="container">
            <div class="wc-stape-wrap wc-stape-1">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="wc-section-title">
                            <span>Step 01</span>
                            <h2>Free trial and <span>Quote</span></h2>
                            <p>Request a quote for the images you need edited — we’ll get back to you within 45 minutes</p>
                            <p>We provide 100% handmade photo editing services to use photoshop. So you will get great quality services. always try to deliver your order within 24 hours or less.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="wc-stape-img">
                            <img src="assets/img/stape/stape-1.png" alt="stape" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="wc-stape-wrap wc-stape-2">
                <div class="row align-items-center flex-md-row-reverse">
                    <div class="col-md-6">
                        <div class="wc-section-title">
                            <span>Step 02</span>
                            <h2>Pricing and <span>Upload</span></h2>
                            <p>Approve your quote and give us the green light to get started</p>
                            <p>We provide 100% handmade photo editing services to use photoshop. So you will get great quality services. always try to deliver your order within 24 hours or less.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="wc-stape-img">
                            <img src="assets/img/stape/stape-2.png" alt="stape" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="wc-stape-wrap wc-stape-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="wc-section-title">
                            <span>Step 03</span>
                            <h2>Work Note & <span>Instructions</span></h2>
                            <p>Upload your images, and then let us do the rest</p>
                            <p>We provide 100% handmade photo editing services to use photoshop. So you will get great quality services. always try to deliver your order within 24 hours or less.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="wc-stape-img">
                            <img src="assets/img/stape/stape-3.png" alt="stape" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="wc-stape-wrap wc-stape-4">
                <div class="row align-items-center flex-md-row-reverse">
                    <div class="col-md-6">
                        <div class="wc-section-title">
                            <span>Step 04</span>
                            <h2>Work Done & <span>Download</span> Files</h2>
                            <p>Approve your quote and give us the green light to get started</p>
                            <p>We provide 100% handmade photo editing services to use photoshop. So you will get great quality services. always try to deliver your order within 24 hours or less.</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="wc-stape-img">
                            <img src="assets/img/stape/stape-4.png" alt="stape" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area End -->
    <!-- Pricing Guide Area Start -->
    <section class="wc-pricing-guide-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-8">
                    <div class="wc-section-title">
                        <h2>Services &amp; <span>Pricing</span> Guide</h2>
                        <p>Try Your First 3 Images for Free to Test Our Quality and Service</p>
                    </div>
                </div>
                <div class="col-md-4 mt-3 mt-mb-0 text-md-end">
                    <div class="wc-btn-group">
                        <a href="pricing.html" class="wc-btn wc-border-btn">View Full Price List</a>
                        <a href="quote.html" class="wc-btn wc-fill-btn">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Guide Area End -->
@endsection
