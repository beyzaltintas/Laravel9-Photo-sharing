@extends('layouts.frontbase')

@section('title', 'Contact | '.$setting->title)
@section('description', $setting->description)
@section('keywords',  $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / bradcam_area  -->

    <!-- photography_skill_area  -->
    <div class="photography_skill_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-12">
                    <section class="contact-section">
                        <div class="container">
                            <div class="d-none d-sm-block mb-5 pb-4">



                            <div class="row">
                                <div class="col-12">
                                    <h2 class="contact-title">Get in Touch</h2>
                                </div>
                                <div class="col-lg-8">
                                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Name"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3 offset-lg-1">
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                                        <div class="media-body">
                                            <h3>{!! $setting->adress !!}</h3>
                                            <p>{!! $setting->company !!}</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                        <div class="media-body">
                                            <h3>{!! $setting->phone !!}</h3>
                                            <p>Mon to Fri 9am to 6pm</p>
                                        </div>
                                    </div>
                                    <div class="media contact-info">
                                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                                        <div class="media-body">
                                            <h3>{!! $setting->email !!}</h3>
                                            <p>E-mail us anytime!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- /photography_skill_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="testimonial_active owl-carousel">
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking
                                for a theme that provides advanced capabilities, we have got them in
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking
                                for a theme that provides advanced capabilities, we have got them in
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                        <div class="single_testmonial text-center">
                            <h3>Our Customers Say</h3>
                            <p>
                                Whether you’re about to create a website for the first time, or you’re looking
                                for a theme that provides advanced capabilities, we have got them in
                                Blacksilver theme.
                            </p>
                            <div class="author_name d-flex align-items-center justify-content-center">
                                <div class="thumb">
                                    <img src="{{asset('assets')}}/img/testmonial/author.png" alt="">
                                </div>
                                <span>- Robert Thomson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- team_area  -->
    <div class="team_area">
        <div class="container">
            <div class="border_bottom">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="{{asset('assets')}}/img/team/3.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Milani Mou</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="{{asset('assets')}}/img/team/2.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Jasmine Pinky</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single_team">
                            <div class="team_thumb">
                                <img src="{{asset('assets')}}/img/team/1.png" alt="">
                            </div>
                            <div class="team_info text-center">
                                <h3>Piya Zosoldos</h3>
                                <p>Photographer</p>
                                <div class="social_link">
                                    <ul>
                                        <li><a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /team_area  -->

    <div class="contact_info_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="cotact_info">
                        <div class="section_title">
                            <h3>Contact Us</h3>
                            <p> {!! $setting->contact !!}</p>
                        </div>
                        <div class="address_info">
                            <h4>Address</h4>
                            <ul class="Address" >
                                <li>
                                    {!! $setting->address !!}
                                </li>
                                <li>
                                    {!! $setting->phone !!}
                                </li>
                                <li>
                                    {!! $setting->fax !!}
                                </li>
                                <li>
                                    {!! $setting->email !!}
                                </li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- instragram_area  -->
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="{{asset('assets')}}/img/instragram/1.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('assets')}}/img/instragram/2.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('assets')}}/img/instragram/3.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('assets')}}/img/instragram/4.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('assets')}}/img/instragram/5.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="{{asset('assets')}}/img/instragram/6.png" alt="">
            <div class="ovrelay">
                <a href="#">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /instragram_area  -->
@endsection
