@extends('layouts.frontbase')

@section('title', 'User Panel')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>User Menu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / bradcam_area  -->

    <!-- photography_skill_area  -->
    <div class="photography_skill_area">
        <div class="container">



                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="section_title">
                                        <h2 class="contact-title">User Menu</h2>
                                    </div>
                                    @include('home.user.usermenu')
                                </div>


                                <div class="col-lg-10 offset-lg-1">
                                        <div class="col-md-10">
                                            <div class="section_title">
                                            <h5 class="contact-title">User Profile</h5>
                                        </div>
                                           <div class="input-group">
                                               @include('profile.show')
                                        </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    </section>

    <!-- /photography_skill_area  -->



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
