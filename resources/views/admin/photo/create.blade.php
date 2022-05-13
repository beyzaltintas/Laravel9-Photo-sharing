@extends('layouts.adminbase')

@section('title', 'Add Photo')



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Add Photo</h3>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

   <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Photo Elements</h4>
            </div>

                <form class="forms-sample" action="{{route('admin.photo.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label>Parent Photo</label>

                            <select class="form-control" name="category_id" style="width: 100%;">
                                @foreach($data as $rs)
                                    <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">VideoLink</label>
                            <input type="text" class="form-control" name="videolink" placeholder="VideoLink">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Dimensions</label>
                            <input type="text" class="form-control" name="dimensions" placeholder="Dimensions">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Camera</label>
                            <input type="text" class="form-control" name="camera" placeholder="Camera">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lens</label>
                            <input type="text" class="form-control" name="lens" placeholder="Lens">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Location</label>
                            <input type="text" class="form-control" name="location" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Detail Inf. </label>
                            <textarea class="form-control" name="detail">

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
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                        <div class="card-footer">
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                        </div>
                    </div>
                </form>
            </div>


@endsection
