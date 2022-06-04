@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')

    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="forms-sample" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data" >
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            @csrf
            <div class="row">


                <div class="tab-regular">
                    <ul class="nav nav-tabs nav-fill" id="one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="one-tab-general" data-toggle="tab" href="#general" role="tab" aria-controls="one-tab-general" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="one-tab-smtpemail" data-toggle="tab" href="#one-tab-smtp" role="tab" aria-controls="one-tab-smtpemail" aria-selected="false">Smtp Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="one-tab-socialmedia" data-toggle="tab" href="#one-tab-social" role="tab" aria-controls="one-tab-socialmedia" aria-selected="false">Social Media</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="one-tab-aboutus" data-toggle="tab" href="#one-tab-about" role="tab" aria-controls="one-tab-aboutus" aria-selected="false">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="one-tab-contactpage" data-toggle="tab" href="#one-tab-contact" role="tab" aria-controls="one-tab-contactpage" aria-selected="false">Contact Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="one-tab-reference" data-toggle="tab" href="#one-tab-references-1" role="tab" aria-controls="one-tab-references" aria-selected="false">References</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="one-tab-general">
                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"  id="title" name="title" value="{{$data->title}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text"  name="keywords" value="{{$data->keywords}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="description" value="{{$data->description}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text"  name="company" value="{{$data->company}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text"  name="address" value="{{$data->address}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text"  name="phone" value="{{$data->phone}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text"   name="email" value="{{$data->email}}"  class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected="selected">{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Icon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="icon">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Icon File</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="one-tab-smtp" role="tabpanel" aria-labelledby="one-tab-smtpemail">
                            <div class="form-group">
                                    <label>Smtp Server</label>
                                    <input type="text"   name="smtpserver" value="{{$data->smtpserver}}"  class="form-control">
                                </div>
                            <div class="form-group">
                                <label>Smtp Email</label>
                                <input type="text"   name="smtpemail" value="{{$data->smtpemail}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Smtp Password</label>
                                <input type="text"  name="smtppassword" value="{{$data->smtppassword}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Smtpport</label>
                                <input type="text"  name="smtpport" value="{{$data->smtpport}}"  class="form-control">
                            </div>
                        </div>

                        <div class="tab-pane fade" id="one-tab-social" role="tabpanel" aria-labelledby="one-tab-socialmedia">
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text"   name="fax" value="{{$data->fax}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" name="facebook" value="{{$data->facebook}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text"   name="instagram" value="{{$data->instagram}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text"   name="twitter" value="{{$data->twitter}}"  class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text"   name="youtube" value="{{$data->youtube}}"  class="form-control">
                            </div>
                        </div>

                            <div class="tab-pane fade" id="one-tab-about" role="tabpanel" aria-labelledby="one-tab-aboutus">
                                <div class="form-group">
                                    <label>About Us</label>
                                    <textarea  id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="one-tab-contact" role="tabpanel" aria-labelledby="one-tab-contactpage">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea  id="contact" name="contact">{{$data->contact}}</textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="one-tab-references-1" role="tabpanel" aria-labelledby="one-tab-references">
                                <div class="form-group">
                                    <label>References</label>
                                    <textarea  id="references" name="references">{{$data->references}}</textarea>
                                </div>
                            </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary me-2">Update Settings</button>
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
        $(document).ready(function () {
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#references').summernote();
        });
    </script>

@endsection
