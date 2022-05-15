@extends('layouts.adminwindow')

@section('title', 'Photo Image Gallery')

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->

        <div class="card">
            <h5 class="card-header">Photo Image List</h5>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th style="width: 40px">Update</th>
                        <th style="width: 40px">Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>

                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                          @if ($rs->image)
                          <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                          @endif
                        </td>
                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a> </td>
                        <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}"class="btn btn-block btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete?')">Delete</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
