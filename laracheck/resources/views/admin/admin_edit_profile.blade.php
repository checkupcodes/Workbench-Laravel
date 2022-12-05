@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile Forms</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('store.profile') }}" enctype="multipart/form-data"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Name and
                                            Surname</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input name="name" type="text" class="form-control"
                                                id="validationCustomUsername" value="{{ $editData->name }}"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input name="username" type="text" class="form-control"
                                                id="validationCustomUsername" value="{{ $editData->username }}"
                                                required="" />
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <input name="email" type="text" class="form-control"
                                                id="validationCustomUsername" value="{{ $editData->email }}"
                                                required="" />
                                        </div>
                                    </div>

                                    {{-- <div class="mb-3">
                                        <label class="text-label form-label" for="dlab-password">Password *</label>
                                        <div class="input-group transparent-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input type="password" class="form-control" id="dlab-password"
                                                placeholder="Choose a safe one.." required="" />
                                            <span class="input-group-text show-pass">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                            <div class="invalid-feedback">
                                                Please Enter a username.
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">Select new
                                            Image</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fa fa-image"></i>
                                            </span>
                                            <div class="form-file py-2">
                                                <input name="profile_image" id="image" type="file"
                                                    class="form-file-input form-control" />
                                            </div>
                                        </div>
                                    </div>



                                    <button type="submit" class="mt-5 btn btn-primary btn-md "
                                        style="width:200px; height:40px;border-radius:8px">
                                        Submit
                                    </button>
                                    <button type="submit" class="mt-5 btn btn-light btn-md"
                                        style="width:200px; height:40px;border-radius:8px">
                                        Cancel
                                    </button>

                                </form>
                                <hr>
                                <a href="{{ route('change.password') }} ">
                                    Şifreni değiştirmek mi istiyorsun ? <br/>
                                    <button type="submit" class="mt-3 py-1 btn p-5 btn-primary"
                                        style="border-radius: 8px; height:30px">
                                        Change Password
                                    </button>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile Image</h4>
                        </div>
                        <div class="card-body">
                            <img id="ProfileImage"
                                src="{{ !empty($editData->profile_image) ? url('upload/admin_images/' . $editData->profile_image) : url('upload/no_image.jpg') }}"
                                class="rounded-circle img-fluid" alt="profile_image">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#ProfileImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
