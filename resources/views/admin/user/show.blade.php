@extends('layouts.adminwindow')

@section('title', 'User Detail:' .$data->title)



@section('content')
    <!-- wrapper  -->
    <!-- ============================================================== -->

        <div class="container-fluid dashboard-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="text-center">User Data</h3>
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
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Roles</th>
                                <td>
                                    @foreach($data->roles as $role)
                                        {{$role->name}}
                                    <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                           onclick="return confirm('Are you sure you want to delete?')">[x]</a>

                                    @endforeach
                                </td>
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
                                <th>Add Role to User</th>
                                <td>
                                    <form class="forms-sample"  action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post"  >
                                      @csrf
                                     <select name="role_id">
                                    @foreach($roles as $role)
                                             <option value="{{$role->id}}">{{$role->name}}</option>                                    @endforeach
                                     </select>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary me-2">Add Role</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>







@endsection
