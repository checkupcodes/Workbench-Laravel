@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Portfolio Edit </h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('update.portfolio') }}" enctype="multipart/form-data"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $portfolio->id }}">

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Portfolio Name
                                        </label>
                                        <div class="input-group">
                                            <input name="portfolio_name" type="text" class="form-control"
                                                style="margin-left: 30px" value="{{ $portfolio->portfolio_name }}"
                                                id="validationCustomUsername" required />
                                        </div>
                                        @error('portfolio_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr />

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Portfolio Title
                                        </label>
                                        <div class="input-group">
                                            <input name="portfolio_title" type="text" class="form-control"
                                                style="margin-left: 30px" value="{{ $portfolio->portfolio_title }}"
                                                id="validationCustomUsername" required="" />
                                            @error('portfolio_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr />


                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            P. Description
                                        </label>
                                        <div class="input-group card-body custom-ekeditor">
                                            <textarea id="ckeditor" name="portfolio_description" type="text" class="form-control">{{ $portfolio->portfolio_description }}</textarea>
                                            @error('portfolio_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <hr />



                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px">
                                            Portfolio Image <div class="input-group" style="margin-top: 15px;">
                                                <input name="portfolio_image" id="image" type="file" class=""
                                                    style="width: 220px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px" />
                                                @error('portfolio_image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                        </label>

                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img id="ProfileImage" src="{{ asset($portfolio->portfolio_image) }}"
                                                        class=" img-fluid" alt="profile_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="mt-5 btn me-2 btn-primary">
                                        Update Portfolio
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
