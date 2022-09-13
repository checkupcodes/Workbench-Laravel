@extends('admin.app')
@section('admin')
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
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger solid alert-dismissible fade show">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('update.profile') }}"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf


                                    <div class="mb-3">
                                        <label class="text-label form-label" for="dlab-password">Old Password *</label>
                                        <div class="input-group transparent-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input name="old_password" type="password" class="form-control"
                                                id="old_password" placeholder="Choose a safe one.."  />
                                            <span class="input-group-text show-pass">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="dlab-password">New Password *</label>
                                        <div class="input-group transparent-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input name="new_password" type="password" class="form-control"
                                                id="new_password" placeholder="Choose a safe one.." />
                                            <span class="input-group-text show-pass">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="dlab-password">Confirm Password *</label>
                                        <div class="input-group transparent-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input name="confirm_password" type="password" class="form-control"
                                                id="confirm_password" placeholder="Choose a safe one.."  />
                                            <span class="input-group-text show-pass">
                                                <i class="fa fa-eye-slash"></i>
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn me-2 btn-primary">
                                        Submit
                                    </button>
                                    <button type="submit" class="btn btn-light">
                                        Cancel
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
