@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1 black_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>User Comments & Reviews</h3>
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



                                        <div class="col-md-10">
                                            <div class="section_title">
                                            <h5 class="contact-title">User Comments & Reviews</h5>
                                        </div>
                                           <div class="input-group">
                                               <table class="table table-striped">
                                                   <thead>
                                                   <tr>
                                                       <th scope="col">Id</th>
                                                       <th scope="col">Photo</th>
                                                       <th scope="col">Subject</th>
                                                       <th scope="col">Review</th>
                                                       <th scope="col">Rate</th>
                                                       <th scope="col">Status</th>
                                                       <th style="width: 40px">Delete</th>

                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                   @foreach($comments as $rs)
                                                       <tr>

                                                           <td>{{$rs->id}}</td>
                                                           <td><a href="{{route('photo',['id'=>$rs->photo_id])}}">
                                                                   {{$rs->photo->title}}</a></td>
                                                           <td>{{$rs->subject}}</td>
                                                           <td>{{$rs->review}}</td>
                                                           <td>{{$rs->rate}}</td>
                                                           <td>{{$rs->status}}</td>
                                                           <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                                                                  onclick="return confirm('Are you sure you want to delete?')">Delete</a> </td>


                                                       </tr>
                                                   @endforeach
                                                   </tbody>
                                               </table>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>



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
