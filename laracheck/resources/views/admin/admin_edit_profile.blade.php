@extends('admin.app')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical Forms with icon</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon needs-validation" novalidate="">
                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Name and Surname</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            value="{{$editData->name}}" required="" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            value="{{$editData->username}}" required="" />
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" class="form-control" id="validationCustomUsername"
                                            value="{{$editData->email}}" required="" />
                                    </div>
                                </div>
                                       
                                <div class="mb-3">
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
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Select new Image</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fa fa-image"></i>
                                        </span>
                                        <div class="form-file py-2">
                                            <input type="file" class="form-file-input form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class ="mb-3">
                                    <img src="{{ asset('backend/images/profile/itsme.jpeg') }}" alt="">
                                </div>
                                
                                <button type="submit" class="btn me-2 btn-primary">
                                    Submit
                                </button>
                                <button type="submit" class="btn btn-light">
                                    cencel
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
