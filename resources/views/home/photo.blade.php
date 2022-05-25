@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Photo Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / bradcam_area  -->
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{Storage::url($data->image)}}" style="width:700px; height:350px">
                            </div>
                            @foreach($images as $rs)
                                <div class="swiper-slide">
                                    <img src="{{Storage::url($rs->image)}}" style="width:700px; height:350px">
                                </div>
                        @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong>: Web design</li>
                            <li><strong>Client</strong>: ASU Company</li>
                            <li><strong>Project date</strong>: 01 March, 2020</li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->


@endsection
