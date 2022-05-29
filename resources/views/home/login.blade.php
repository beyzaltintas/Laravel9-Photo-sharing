@extends('layouts.frontbase')

@section('title', 'User Login | ')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
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
                        @include('auth.login')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /photography_skill_area  -->


@endsection
