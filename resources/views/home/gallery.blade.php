@extends('layouts.frontbase')

@section('title', $data->title . ' ' . 'Gallery')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Albums</h3>
                        <p>Photography / Baby</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / bradcam_area  -->

    <!-- gallery_area  -->
    <div class="gallery_area baby_gallery_wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="section_title text-center mb-50">
                        <h3>My world class photography</h3>
                        <p>Whether you’re about to create a website for the first time, or you’re looking
                            for a theme that provides advanced capabilities, we have got them in
                            Blacksilver theme.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="row no-gutters grid">
                @foreach($photos as $rs)
                <div class="single_gallery grid-item large_img ">
                    <a  href="{{route('photo',['id'=>$rs->id])}}" >
                        <img src="{{Storage::url($rs->image)}}" alt="">
                    </a>

                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- /gallery_area  -->



@endsection
