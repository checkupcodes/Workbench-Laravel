@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Footer Page Forms</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('upload.about') }}"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $footer->id }}">

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Number
                                        </label>
                                        <div class="input-group">
                                            <input name="title" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->number }}" required="" />
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Short Description
                                        </label>
                                        <div class="input-group">
                                            <input name="short_title" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->short_description }}" required="" />
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Address
                                        </label>
                                        <div class="input-group">
                                            <input name="address" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->address }}" required="" />
                                        </div>
                                    </div>
                                    <hr />


                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Email
                                        </label>
                                        <div class="input-group">
                                            <input name="email" type="email" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->email }}" required="" />
                                        </div>
                                    </div>
                                    <hr />


                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Facebook
                                        </label>
                                        <div class="input-group">
                                            <input name="facebook" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->facebook }}" required="" />
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Twitter
                                        </label>
                                        <div class="input-group">
                                            <input name="twitter" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->twitter }}" required="" />
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Linkedin
                                        </label>
                                        <div class="input-group">
                                            <input name="linkedin" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->linkedin }}" required="" />
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Github
                                        </label>
                                        <div class="input-group">
                                            <input name="github" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->github }}" required="" />
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Copyright
                                        </label>
                                        <div class="input-group">
                                            <input name="copyright" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername"
                                                value="{{ $footer->copyright }}" required="" />
                                        </div>
                                    </div>
                                    <hr />


                                    <button type="submit" class="mt-5 btn me-2 btn-primary">
                                        Update
                                    </button>
                                    <button type="submit" class="mt-5 btn btn-light">
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
