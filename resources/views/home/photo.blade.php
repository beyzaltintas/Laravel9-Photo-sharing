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
                        <div class="swiper-pagination">

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">

                    <h6><a href="#">{{$data->comment->count('id')}}  Comment(s)</a></h6>
                    @include('home.messages')
                    <div class="portfolio-info">
                        <h3>{{$data->title}} </h3>
                        <ul>
                            <li><strong>Location</strong>:{{$data->location}}</li>
                            <li><strong>Camera</strong>:{{$data->camera}}</li>
                            <li><strong>Lens date</strong>:{{$data->lens}}</li>
                            <li><strong>Dimensions</strong>:{{$data->dimensions}}</a></li>
                        </ul>
                    </div>


                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            {{$data->description}}
                        </p>
                    </div>
                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 posts-list">
                            @foreach($reviews as $rs)
                            <div class="single-post">
                                <div class="comments-area">

                                    <div class="comment-list">

                                            <div class="single-comment justify-content-between d-flex">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb">
                                                        <img src="{{asset('assets')}}/img/team/3.png" alt="">
                                                    </div>
                                                    <div class="desc">
                                                        <div class="comment">
                                                            <strong>{{$rs->subject}}</strong>
                                                            <p>{{$rs->review}}</p>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <div class="d-flex align-items-center">
                                                                <h5>
                                                                    <a href="#">{{$rs->user->name}}</a>
                                                                </h5>
                                                                <p class="date">{{$rs->user->created_at}}</p>
                                                            </div>

                                                                <div class="reply-btn">
                                                                    <a href="#" class="btn-reply text-uppercase">reply</a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                    @endforeach

                                <div class="reply-form">
                                    <h4>Write a Review</h4>
                                    <form class="form-contact comment_form" action="{{route('storecomment')}}" method="post"
                                          id="commentForm" >
                                        @csrf
                                        <div class="row">
                                            <input class="form-control" name="photo_id" value="{{$data->id}}"
                                                   type="hidden"/>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="subject" id="subject" type="text"
                                                           placeholder="Subject"/>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                              <textarea class="form-control w-100" name="review" id="review" cols="30" rows="9"
                                        placeholder="Review"></textarea>
                                                </div>
                                            </div>

                                            <style>
                                                .rating {
                                                    display: flex;
                                                    flex-direction: row-reverse;
                                                    justify-content: center;
                                                }

                                                .rating > input{ display:none;}

                                                .rating > label {
                                                    position: relative;
                                                    width: 1em;
                                                    font-size: 40px;
                                                    color: #FFD600;
                                                    cursor: pointer;
                                                }
                                                .rating > label::before{
                                                    content: "\2605";
                                                    position: absolute;
                                                    opacity: 0;
                                                }
                                                .rating > label:hover:before,
                                                .rating > label:hover ~ label:before {
                                                    opacity: 1 !important;
                                                }

                                                .rating > input:checked ~ label:before{
                                                    opacity:1;
                                                }

                                                .rating:hover > input:checked ~ label:before{ opacity: 0.4; }

                                                body{ background: #ffffff; color: black;}
                                                h1, p{
                                                    text-align: center;

                                                }

                                                h1{
                                                    margin-top:150px;
                                                }
                                                p{ font-size: 1.2rem;}
                                                @media only screen and (max-width: 600px) {
                                                    h1{font-size: 14px;}
                                                    p{font-size: 12px;}
                                                }

                                            </style>


                                            <div class="form-group">
                                                    <strong class="text-uppercase">Your Rating:</strong>
                                                    <div class="rating">
                                                        <input type="radio" name="rate" value="5" id="5"><label for="5">☆</label>
                                                        <input type="radio" name="rate" value="4" id="4"><label for="4">☆</label>
                                                        <input type="radio" name="rate" value="3" id="3"><label for="3">☆</label>
                                                        <input type="radio" name="rate" value="2" id="2"><label for="2">☆</label>
                                                        <input type="radio" name="rate" value="1" id="1"><label for="1">☆</label>
                                                    </div>
                                            </div>
                                        </div>
                                        @auth
                                            <div class="form-group">
                                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                                            </div>
                                        @else
                                            <div class="form-group">
                                            <a href="/login" class="button button-contactForm btn_1 boxed-btn">Login to Review</a>
                                            </div>
                                        @endauth

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Portfolio Details Section -->


@endsection
