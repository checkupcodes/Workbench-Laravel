@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Home Slider Forms</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('upload.slide') }}" enctype="multipart/form-data"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $homeSlider->id }}">

                                    <div
                                        style="
                                     display: grid;
                                    justify-content: space-between;
                                    grid-template-columns: 450px 550px; /*Make the grid smaller than the container*/
                                    gap: 100px;
                                    padding: 10px;">
                                        <div style=" text-align: center;
                                        ">
                                            <div class="mb-4" style="display :flex">
                                                <label
                                                    class="form-control text-label btn btn-primary form-label center text-4xl"
                                                    for="validationCustomUsername"
                                                    style="width: 150px ;padding:10px;height:40px ; font-size:14px;">
                                                    Title
                                                </label>
                                                <div class="input-group">
                                                    <input name="title" type="text" class="form-control "
                                                        id="validationCustomUsername" style="margin-left: 30px"
                                                        value="{{ $homeSlider->title }}" required="" />
                                                </div>
                                            </div>
                                            <div class="mb-4" style="display :flex">
                                                <label
                                                    class="form-control text-label  btn btn-primary form-label center text-4xl"
                                                    for="validationCustomUsername"
                                                    style="width: 150px ;padding:10px ;height:40px ; font-size:14px;">

                                                    Description
                                                </label>
                                                <div class="input-group">
                                                    <input name="description" type="text" class="form-control"
                                                        id="validationCustomUsername" value="{{ $homeSlider->description }}"
                                                        required=""style="margin-left: 30px" />
                                                </div>
                                            </div>
                                            <div class="mb-4" style="display :flex">
                                                <label
                                                    class="form-control text-label  btn btn-primary form-label center text-4xl"
                                                    for="validationCustomUsername"
                                                    style="width: 150px ;padding:10px ;height:40px ; font-size:14px;">
                                                    V. Button Link
                                                </label>
                                                <div class="input-group">
                                                    <input name="video_url" type="text" class="form-control"
                                                        id="validationCustomUsername" value="{{ $homeSlider->video_url }}"
                                                        required="" style="margin-left: 30px" />
                                                </div>
                                            </div>
                                        </div>
                                        <div style="  text-align: center;
                                        ">
                                            <div class="mb-4" style="display :flex ">
                                                <label
                                                    class="form-control text-label btn btn-primary form-label center text-4xl"
                                                    for="validationCustomUsername"
                                                    style="width: 220px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px">
                                                    Slide Image
                                                    <div class="input-group" style="margin-top: 14px">

                                                        <input name="home_slide" id="image" type="file"
                                                            class="btn btn-primary"
                                                            style="width: 220px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px" />
                                                    </div>
                                                </label>

                                                <div class="col-lg-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <img id="ProfileImage"
                                                                src="{{ !empty($homeSlider->home_slide) ? url($homeSlider->home_slide) : url('upload/no_image.jpg') }}"
                                                                class="rounded-circle img-fluid" alt="profile_image">
                                                        </div>
                                                    </div>
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
