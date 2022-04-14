@extends('layouts.adminbase')

@section('title', 'Show Category :' .$data->title)



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Show Category</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

   <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <a href="/admin/category/edit/{{$data->id}}" class="btn btn-primary btn-fw" style="width: 200px">Edit</a>
                <a href="/admin/category/destroy/{{$data->id}}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-fw" style="width: 200px">Delete</a>
                <br>
            </br>
                <div class="card">
                    <h5 class="card-header">Detail Data</h5>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 150px">Id</th>
                                <td>{{$data->id}}</td>
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
                                <th>Image</th>
                                <td></td>
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
