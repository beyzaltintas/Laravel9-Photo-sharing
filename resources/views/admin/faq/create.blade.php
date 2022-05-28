@extends('layouts.adminbase')

@section('title', 'Add Photo')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="text-center">Add Photo</h2>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->

   <! -- default --!>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header" id="top">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">FAQ Elements</h3>
            </div>

                <form class="forms-sample" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <input type="text" class="form-control" name="question" placeholder="Question">
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Answer </label>
                            <textarea class="form-control" id="answer" name="answer">

                            </textarea>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#answer' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
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
