@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style type="text/css">
        .bootstrap-tagsinput .tag{
            margin-right: 5px;
            color: #ccc;
            font-weight: 700px;
        } 
    </style>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Blog Add Forms</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('store.portfolio') }}" enctype="multipart/form-data"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf


                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Select Category
                                        </label>
                                        <div class="input-group">
                                            <div class="card" style="width:100%; margin-left: 20px">
                                                <select name="blog_category_id"
                                                    class="default-select form-control wide mb-3">
                                                    <option>Option 1</option>
                                                    <option>Option 2</option>
                                                    <option>Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Blog Title
                                        </label>
                                        <div class="input-group">
                                            <input name="blog_title" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername" required />
                                        </div>
                                        @error('blog_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Blog Tags
                                        </label>
                                        <div class="input-group">
                                            <input name="blog_tags" type="text" value="home,tech" class="form-control"
                                                style="margin-left: 30px" data-role="tagsinput" required />
                                        </div>
                                        @error('blog_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex;">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Blog Description
                                        </label>
                                        <div class="input-group card-body custom-ekeditor">
                                            <textarea id="ckeditor" name="blog_description" type="text" class="form-control"></textarea>
                                            @error('blog_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr />



                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px">
                                            Blog Image <div class="input-group" style="margin-top: 15px;">
                                                <input name="blog_image" id="image" type="file" class=""
                                                    style="width: 220px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px" />
                                                @error('blog_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </label>

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img id="ProfileImage" src="{{ url('upload/no_image.jpg') }}"
                                                        class=" img-fluid" alt="profile_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="mt-5 btn me-2 btn-primary">
                                        Insert Blog
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
