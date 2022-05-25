
<!-- slider_area_start -->

<div class="slider_area">
    <div class="slider_active owl-carousel">
        @foreach($sliderdata as $rs)
        <div class="swiper-slide d-flex align-items-center ">
            <img src="{{Storage::url($rs->image)}}" alt="" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center ">
                            <h3 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s" >{{$rs->title}}</h3>
                            <div class="video_service_btn wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                                <a href="#" class="boxed-btn3">Explore Work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
        </div>
        </div>
<!-- slider_area_end -->
