@extends('layouts.application')

@section('title', __('seo.index.title'))
@section('description', __('seo.index.description'))
@section('keywords', __('seo.index.keywords'))

@section('content')
    <div class="contact-hero-banner">
        <div class="contact-banner-text">
            <h1>Contact US</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis aliquet eros. Integer <br> placerat
                ultricesLorem ipsum dolor sit amet, consectetur adipiscing elit. In quis .</p>
        </div>
    </div>
    <div class="container">
        <!--contact form area-->
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form-area">
                    <!--contact left bg-->
                    <div class="contact-left-bg">
                        <img src="img/contact-p-2.png" alt="">
                    </div>
                    <div class="contact-form-heading">
                        <h3>Leave a Message</h3>
                    </div>
                    <div class="contact-form">
                        <form action="#">
                            <input type="text" placeholder="First Name">
                            <input class="margin-top-lb-30 margin-top-sb-30" type="text" placeholder="Last Name">
                            <input type="email" placeholder="Enter your email">
                            <textarea placeholder="Write your message"></textarea>
                            <div class="send-btn">
                                <input type="submit" value="send me" id="formsend">
                            </div>
                        </form>
                    </div>
                    <!--contact right bg-->
                    <div class="contact-right-bg">
                        <img src="img/contact-p-1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
