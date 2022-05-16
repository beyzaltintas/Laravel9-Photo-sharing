@extends('layouts.adminwindow')

@section('title', 'Photo Image Gallery')

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <h3>{{$photo->title}}</h3>
    <hr>
    <form class="forms-sample" action="{{route('admin.image.store',['pid'=>$photo->id])}}" method="post" enctype="multipart/form-data" >
        @csrf

            <div class="input-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Title">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
                    </div>
                    <div class="input-group-append">
                        <input class="input-group-text" type="submit" value="Upload">
                    </div>
            </div>
    </form>

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
                    @foreach($images as $rs)
                    <tr>

                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                          @if ($rs->image)
                          <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                          @endif
                        </td>
                        <td><a href="{{route('admin.image.destroy',['pid'=>$photo->id,'id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                               onclick="return confirm('Are you sure you want to delete?')">Delete</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
