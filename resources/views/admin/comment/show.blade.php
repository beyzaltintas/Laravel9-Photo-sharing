@extends('layouts.adminwindow')

@section('title', 'Show Message :' .$data->title)



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->

        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">Show Message</h3>
                </div>
            </div>

        <!-- ============================================================== -->

                <div class="card">
                    <h5 class="card-header">Detail Message Data</h5>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 200px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>{{$data->photo->title}}</td>
                            </tr>
                            <tr>
                                <th>Name & Surname</th>
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Review</th>
                                <td>{{$data->review}}</td>
                            </tr>
                            <tr>
                                <th>Rate</th>
                                <td>{{$data->rate}}</td>
                            </tr>
                            <tr>
                                <th>Ip number</th>
                                <td>{{$data->IP}}</td>
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
                            <tr>
                                <th>Update Note</th>
                                <td>
                                    <form class="forms-sample"  action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post"  >
                                      @csrf
                                        <select name="status">
                                            <option>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary me-2">Update Comment</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>







@endsection
