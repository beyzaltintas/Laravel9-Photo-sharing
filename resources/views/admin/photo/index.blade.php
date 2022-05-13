@extends('layouts.adminbase')

@section('title', 'Photo List')

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <a href="{{route('admin.photo.create')}}" class="btn btn-dark btn-fw" style="width: 200px">Add  Photo</a>
                </div>
            </div>
        <!-- ============================================================== -->

        <div class="card">
            <h5 class="card-header">Photo List</h5>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Title</th>
                        <th scope="col">Dimensions</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th style="width: 40px">Edit</th>
                        <th style="width: 40px">Delete</th>
                        <th style="width: 40px">Show</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>

                        <td>{{$rs->id}}</td>
                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->dimensions}}</td>
                        <td>
                          @if ($rs->image)
                          <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                          @endif
                        </td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.photo.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a> </td>
                        <td><a href="{{route('admin.photo.destroy',['id'=>$rs->id])}}"class="btn btn-block btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete?')">Delete</a> </td>
                        <td><a href="{{route('admin.photo.show',['id'=>$rs->id])}}" class="btn btn-success btn-sm">Show</a> </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
