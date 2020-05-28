@extends('layouts.application')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
    <!-- =========About Header Image Area=========== -->
    <div class="about-hero-banner">
        <div class="about-hero-text">
            <h1>Know more about Us</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a viverra leo. </p>
        </div>
    </div>
    <!-- =========About Conetnt Area=========== -->
    <section id="about">
        <div class="abou-us-area">
            <div class="container">
                <!-- about team photo-->
                <div class="row about-section-separate">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="about-team">
                            <img src="img/carechter.png" alt="">
                        </div>
                    </div>
                    <!-- about brief-->
                    <div class="col-xl-6 col-lg-6 col-md-6 margin-top-sb-30 margin-top-lb-30">
                        <div class="about-content about-content-right">
                            <div class="about-section-title ">
                                <h4>Most Dedicated team we have</h4>
                            </div>
                            <p>There are many use variations of passages of Lorem Ipsum available, but the have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly. If you are going to use a passage of Lorem Ipsum, you need to be sure there .</p>
                            <div class="section-button">
                                <a href="#">Request Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========About Countdown Area=========== -->
    <div class="about-counter-area">
        <div class="container">
            <div class="row">
                <!-- section heading text-->
                <div class="col-xl-6 d-flex align-items-center">
                    <div class="section-heading-2 section-heading-2-p-a about-counter-text">
                        <h4>Summary</h4>
                        <h3>Achivement we have</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eos iste accusamus ipsum temporibus officia assumenda, in tempora expedita aperiam magnam voluptatum culpa hic dolore molestiae eius magni! Accusantium optio impedit neque assumenda autem exercitationem aliquam cupiditate, quaerat iusto vero, necessitatibus sapiente accusamus blanditiis voluptas aperiam deleniti alias.</p>
                        <div class="section-button">
                            <a href="#">Request quote</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <!-- single-coutdown-->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 single-count-item-mb">
                            <div class="single-count-area"><img src="img/counter/manager.png" alt=""> <br> <span class="counter">1800</span><span>+</span>
                                <p>projects</p>
                            </div>
                        </div>
                        <!-- single-coutdown-->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 single-count-item-mb">
                            <div class="single-count-area"><img src="img/counter/chart.png" alt=""><br><span class="counter">1000</span><span>+</span>
                                <p>clients</p>
                            </div>
                        </div>
                        <!-- single-coutdown-->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-count-area"> <img src="img/counter/coin.png" alt=""> <br> <span class="counter">150</span><span>k+</span>
                                <p>profit</p>
                            </div>
                        </div>
                        <!-- single-coutdown-->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 margin-top-sb-30">
                            <div class="single-count-area"> <img src="img/counter/theme.png" alt=""> <br> <span class="counter">500</span><span>+</span>
                                <p>coming</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =========Call to Action=========== -->
    <div class="callto-action">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7">
                    <div class="callto-action-text">
                        <h5>Like what you see? <span>Let’s work</span> </h5>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                    <div class="callto-action-btn">
                        <a href="#">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
