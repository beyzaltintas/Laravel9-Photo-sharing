@extends('layouts.adminbase')

@section('title', 'Show Photo :' .$data->title)



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Show Photo</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

   <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <a href="{{route('admin.photo.edit',['id'=>$data->id])}}" class="btn btn-primary btn-fw" style="width: 200px">Edit</a>
                <a href="{{route('admin.photo.destroy',['id'=>$data->id])}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-fw" style="width: 200px">Delete</a>
                <br>
            </br>
                <div class="card">
                    <h5 class="card-header">Detail Data</h5>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 200px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{$data->category_id}}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{$data->title}}</td>
                            </tr>
                            <tr>
                                <th>Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$data->description}}</td>
                            </tr>
                            <tr>
                                <th>Camera</th>
                                <td>{{$data->camera}}</td>
                            </tr>
                            <tr>
                                <th>Lens</th>
                                <td>{{$data->lens}}</td>
                            </tr>
                            <tr>
                                <th>Dimensions</th>
                                <td>{{$data->dimensions}}</td>
                            </tr>
                            <tr>
                                <th>Location</th>
                                <td>{{$data->location}}</td>
                            </tr>
                            <tr>
                                <th>Detail Inf.</th>
                                <td>{{$data->detail}}</td>
                            </tr>
                            <tr>
                                <th>VideoLink</th>
                                <td>{{$data->videolink}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td>
                                    @if ($data->image)
                                        <img src="{{Storage::url($data->image)}}" style="height: 40px">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$data->status}}</td>
                            </tr>
                            <tr>
                                <th>Created Data</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Update Data</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>



                        </table>
                    </div>
                </div>







@endsection
