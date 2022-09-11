@extends('admin.app')
@section('admin')
    <div class="content-body">
        <div class="container-fluid">
            <div class="rows">
                <div class="col-xl-4">
                    <div class="card">
                      <img
                        class="card-img-top img-fluid"
                        src="{{asset('backend/images/profile/itsme.jpeg')}}"
                        alt="Card image cap"
                      />
                      <div class="card-header">
                        <h5 class="card-title">Name : {{$adminData->name}}</h5>
                      </div>
                      <div class="card-body">
                        <p class="card-text">
                          E-mail : {{$adminData->email}}
                        </p>
                      </div>
                      <div class="card-footer">
                        <p class="card-text d-inline">Card footer</p>
                        <a href="javascript:void(0);" class="card-link float-end"
                          >Edit Profile</a
                        >
                      </div>
                    </div>
                  </div>
            </div>
        @endsection
