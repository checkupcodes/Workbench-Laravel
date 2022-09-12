@extends('admin.app')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="javascript:void(0)">App</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Profile</a>
                    </li>
                </ol>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo rounded"></div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{ (!empty($adminData->profile_image)?url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg')) }}" class="rounded-circle img-fluid" alt="profile_image">
                                      
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{ $adminData->name }}</h4>
                                        <p>Software Enginner</p>
                                    </div>
                                    {{-- <div class="profile-email px-2 pt-2">
                                        <h4 class="text-muted mb-0">
                                            <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="8be2e5ede4cbeef3eae6fbe7eea5e8e4e6">[email&#160;protected]</a>
                                        </h4>
                                    </div> --}}

                                    <div class="dropdown ms-auto">
                                        <a href="{{route('edit.profile')}}">
                                            <button type="button" class="btn btn-primary btn-md m-3">Edit
                                                Profile</button>
                                        </a>
                                        <a href="#" class="btn btn-primary light sharp" data-bs-toggle="dropdown"
                                            aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                                viewbox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24">
                                                    </rect>
                                                    <circle fill="#000000" cx="5" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="12" cy="12" r="2">
                                                    </circle>
                                                    <circle fill="#000000" cx="19" cy="12" r="2">
                                                    </circle>
                                                </g>
                                            </svg></a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li class="dropdown-item">
                                                <i class="fa fa-user-circle text-primary me-2"></i>
                                                View profile
                                            </li>
                                            <li class="dropdown-item">
                                                <i class="fa fa-users text-primary me-2"></i> Add to
                                                btn-close friends
                                            </li>
                                            <li class="dropdown-item">
                                                <i class="fa fa-plus text-primary me-2"></i> Add to
                                                group
                                            </li>
                                            <li class="dropdown-item">
                                                <i class="fa fa-ban text-primary me-2"></i> Block
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-statistics">
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <h3 class="m-b-0">150</h3>
                                                    <span>Follower</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0">140</h3>
                                                    <span>Place Stay</span>
                                                </div>
                                                <div class="col">
                                                    <h3 class="m-b-0">45</h3>
                                                    <span>Reviews</span>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <a href="javascript:void(0);" class="btn btn-primary mb-1 me-1">Follow</a>
                                                <a href="javascript:void(0);" class="btn btn-primary mb-1"
                                                    data-bs-toggle="modal" data-bs-target="#sendMessageModal">Send
                                                    Message</a>
                                            </div>
                                        </div>

                                        <div class="modal fade" id="sendMessageModal">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Send Message</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="comment-form">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="text-black font-w600 form-label">Name
                                                                            <span class="required">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="Author" name="Author"
                                                                            placeholder="Author" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            class="text-black font-w600 form-label">Email
                                                                            <span class="required">*</span></label>
                                                                        <input type="text" class="form-control"
                                                                            value="Email" placeholder="Email"
                                                                            name="Email" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label
                                                                            class="text-black font-w600 form-label">Comment</label>
                                                                        <textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3 mb-0">
                                                                        <input type="submit" value="Post Comment"
                                                                            class="submit btn btn-primary"
                                                                            name="submit" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-blog">
                                        <h5 class="text-primary d-inline">Today Highlights</h5>
                                        <img src="{{ asset('backend/images/profile/itsme.jpeg') }}" alt=""
                                            class="img-fluid mt-4 mb-4 w-100" />
                                        <h4>
                                            <a href="post-details.html" class="text-black">Darwin Creative Agency
                                                Theme</a>
                                        </h4>
                                        <p class="mb-0">
                                            A small river named Duden flows by their place and
                                            supplies it with the necessary regelialia. It is a
                                            paradisematic country, in which roasted parts of
                                            sentences fly into your mouth.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endsection
