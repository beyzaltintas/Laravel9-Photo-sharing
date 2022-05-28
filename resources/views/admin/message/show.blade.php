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
                                <th>Name & Surname</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th>Ip number</th>
                                <td>{{$data->ip}}</td>
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
                                    <form class="forms-sample"  action="{{route('admin.message.update',['id'=>$data->id])}}" method="post"  >
                                      @csrf
                                     <textarea cols="100" id="note" name="note">{{$data->note}}</textarea>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary me-2">Update Note</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>







@endsection
