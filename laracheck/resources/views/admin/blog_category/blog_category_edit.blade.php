@extends('admin.app')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Blog Category Forms</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="POST" action="{{ route('update.blog.category',$blog_category->id) }}"
                                    class="form-valide-with-icon needs-validation">
                                    @csrf

                                    <div class="mb-4" style="display :flex">
                                        <label class="form-control text-label btn btn-primary form-label center text-4xl"
                                            style="width: 150px ;padding:5px ; font-size:14px; height:40px ; border-radius:8px"
                                            for="validationCustomUsername">
                                            Portfolio Name
                                        </label>
                                        <div class="input-group">
                                            <input name="blog_category_name" type="text" class="form-control"
                                                style="margin-left: 30px" id="validationCustomUsername" value="{{$blog_category->blog_category_name}}" required />
                                        </div>
                                        @error('portfolio_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr />

                                    <button type="submit" class="mt-5 btn me-2 btn-primary">
                                        Update Category
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
