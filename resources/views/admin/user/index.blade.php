@extends('layouts.adminbase')

@section('title', 'User List')

@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                </div>
            </div>
            <!-- ============================================================== -->

            <div class="card">
                <h5 class="card-header">User List</h5>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>

                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->email}}</td>
                                <td>
                                    @foreach($rs->roles as $role)
                                        {{$role->name}}
                                    @endforeach
                                </td>
                                <td>{{$rs->status}}</td>
                                <td>
                                    <a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-block btn-success btn-sm"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=100 , height=700')">
                                        Show
                                    </a>
                                </td>
                                <td><a href="{{route('admin.user.destroy',['id'=>$rs->id])}}" class="btn btn-block btn-danger btn-sm"
                                       onclick="return confirm('Are you sure you want to delete?')">Delete</a> </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
