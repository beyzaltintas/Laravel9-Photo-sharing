@extends('layouts.frontbase')

@section('title', 'References | '.$setting->title)
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
                        <h3>References</h3>
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
                    <div class="section_title text-center">
                        <h3>Our References</h3>
                        {!! $setting->references !!}
                    </div>
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
                            <p>Whether you’re about to create a website for the first time or you’re looking.</p>
                        </div>
                        <div class="address_info">
                            <h4>Address</h4>
                            <ul class="Address" >
                                <li>
                                    200/D, Green lane, Kings street, New York
                                </li>
                                <li>
                                    +10 787 367 2567
                                </li>
                                <li>
                                    <a href="#">contact08@halen.com</a>
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
