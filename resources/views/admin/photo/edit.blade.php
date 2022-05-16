@extends('layouts.adminbase')

@section('title', 'Edit Photo :'.$data->title)

@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Edit Photo</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

   <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">
                <h2 class="pageheader-title">Edit Photo:{{$data->title}} </h2>

            <br>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Photo Elements</h4>
            </div>

                <form class="forms-sample" action="{{route('admin.photo.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Parent Category</label>

                            <select class="form-control select2" name="category_id" style="width: 100%;">
                                @foreach($datalist as $rs)
                                    <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                        {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">VideoLink</label>
                            <input type="text" class="form-control" name="videolink" value="{{$data->videolink}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dimensions</label>
                            <input type="text" class="form-control" name="dimensions" value="{{$data->dimensions}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Camera</label>
                            <input type="text" class="form-control" name="camera" value="{{$data->camera}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lens</label>
                            <input type="text" class="form-control" name="lens" value="{{$data->lens}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" class="form-control" name="location" value="{{$data->location}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Detail Inf.</label>
                            <textarea class="textarea" id="detail" name="detail">
                                {{$data->detail}}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image">
                                    <label class="custom-file-label" for="exampleInputFile">Choose Image File</label>
                                </div>
                            </div>
                        </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                        <div class="card-footer">
                    <button type="submit" class="btn btn-primary me-2">Update Data</button>
                        </div>
                    </div>
                </form>
            </div>

@endsection
@section('foot')
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
      $(function () {
          //Summernote
          $('.textarea').summernote()
      })
    </script>

@endsection
