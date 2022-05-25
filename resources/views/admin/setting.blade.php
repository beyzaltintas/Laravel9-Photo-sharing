@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

    <!-- wrapper  -->
    <!-- ============================================================== -->
    <form class="forms-sample" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data" >
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            @csrf
            <div class="row">
                <div class="tab-regular">
                    <ul class="nav nav-tabs nav-fill" id="one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-general" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-smtpemail" data-toggle="tab" href="#smtpemail" role="tab" aria-controls="smtpemail" aria-selected="false">Smtp Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab-socialmedia" data-toggle="tab" href="#socialmedia" role="tab" aria-controls="socialmedia" aria-selected="false">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab-aboutus" data-toggle="tab" href="#aboutus" role="tab" aria-controls="aboutus" aria-selected="false">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab-contact" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab-references" data-toggle="tab" href="#references" role="tab" aria-controls="references" aria-selected="false">References</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general">
                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"  id="title" name="title" value="{{$data->title}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text"  id="keywords" name="title" value="{{$data->keywords}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text"  id="description" name="title" value="{{$data->description}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text"  id="company" name="title" value="{{$data->company}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text"  id="address" name="title" value="{{$data->address}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text"  id="phone" name="title" value="{{$data->phone}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text"  id="email" name="title" value="{{$data->email}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"  id="title" name="title" value="{{$data->title}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp">
                            <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text"  id="smtpserver" name="smtpserver" value="{{$data->smtpserver}}"  class="form-control">
                                </div>
                            <div class="form-group">
                                <label>Smtp Email</label>
                                <input type="text"  id="smtpemail" name="smtpemail" value="{{$data->smtpemail}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Smtp Password</label>
                                <input type="text"  id="smtppassword" name="smtppassword" value="{{$data->smtppassword}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Smtpport</label>
                                <input type="text"  id="smtpport" name="smtpport" value="{{$data->smtpport}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text"  id="fax" name="fax" value="{{$data->fax}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text"  id="facebook" name="facebook" value="{{$data->facebook}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text"  id="instagram" name="instagram" value="{{$data->instagram}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text"  id="twitter" name="twitter" value="{{$data->twitter}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text"  id="youtube" name="youtube" value="{{$data->youtube}}"  class="form-control">
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about">
                                <div class="form-group">
                                    <label>About Us</label>
                                    <textarea  id="aboutus" name="abouts">{{$data->aboutus}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea  id="contact" name="contact">{{$data->contact}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="references">
                                <div class="form-group">
                                    <label>References</label>
                                    <textarea  id="references" name="references">{{$data->references}}</textarea>
                                </div>
                                <script>
                                    $(document).ready(function () {
                                        $('$aboutus').summernote();
                                        $('contact').summernote();
                                        $('references').summernote();
                                        });
                                </script>
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary me-2">Update Setting</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    </form>

        <!-- ============================================================== -->
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
