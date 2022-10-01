@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Page Forms</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('upload.about') }}" enctype="multipart/form-data"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $aboutPage->id }}">

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">
                                            Title
                                        </label>
                                        <div class="input-group">
                                            <input name="title" type="text" class="form-control"
                                                id="validationCustomUsername" value="{{ $aboutPage->title }}"
                                                required="" />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">
                                            Short Title
                                        </label>
                                        <div class="input-group">
                                            <input name="short_title" type="text" class="form-control"
                                                id="validationCustomUsername" value="{{ $aboutPage->short_title }}"
                                                required="" />
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">
                                            Short Description
                                        </label>
                                        <div class="input-group">
                                            <textarea name="short_description" id="validationCustomUsername" type="text" class="form-control" rows="4"
                                                id="comment">
                                                {{ $aboutPage->short_description }}
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label class="text-label form-label" for="validationCustomUsername">
                                            About Image
                                        </label>
                                        <div class="input-group">
                                            <div class="form-file py-2">
                                                <input name="about_image" id="image" type="file"
                                                    class="form-file-input form-control" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xl-12 col-xxl-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Description</h4>
                                                </div>
                                                <div class="card-body custom-ekeditor">
                                                    <div id="ckeditor" name="description" type="text"
                                                        class="form-control" rows="4" id="comment">
                                                        {{ $aboutPage->description }}></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="mt-5 btn me-2 btn-primary">
                                        Submit
                                    </button>
                                    <button type="submit" class="mt-5 btn btn-light">
                                        Cancel
                                    </button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Image</h4>
                        </div>
                        <div class="card-body">
                            <img id="ProfileImage"
                                src="{{ !empty($aboutPage->about_image) ? url($aboutPage->about_image) : url('upload/no_image.jpg') }}"
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
