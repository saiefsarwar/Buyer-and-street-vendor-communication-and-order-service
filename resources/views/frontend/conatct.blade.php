@extends('layouts.default')
@section('title','Contact')
@section('styles')
    <style>
        .contact__widget i{ color: green; font-size: 25px;}
    </style>
@endsection
@section('content')
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('images/product-pictures/Vegetables/Tomato.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-phone"></i>
                        <h4>Phone</h4>
                        <p>+88017000000</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address</h4>
                        <p>Bashundhara, Dhaka</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-clock-o"></i>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <i class="fa fa-envelope"></i>
                        <h4>Email</h4>
                        <p>support@eseller.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.089175441318!2d90.42269834991944!3d23.815427792131548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c46dc7541%3A0xcd98d3b733278242!2sNSU%20Main%20Campus%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1603736286687!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Bashundhara</h4>
                <ul>
                    <li>Phone: +88017000000</li>
                    <li>Add: Bashundhar, Dhaka</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">SEND MESSAGE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->
@endsection
@section('scripts')
@endsection