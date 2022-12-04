@extends('admin.app')
@section('admin')
    <link href="{{ asset('backend/vendor') }}/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="{{ asset('backend/vendor') }}/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
    <link href="{{ asset('backend/css') }}/style.css" rel="stylesheet" />
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="javascript:void(0)">Table</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Multi Images</a>
                    </li>
                </ol>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About MultiImages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th style="width: 90%">About Image</th>
                                            <th>Action</th>
                                            <th>Edit</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i = 1)
                                        @foreach ($allMultiImages as $item)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>
                                                    <img src="{{ asset($item->multi_image) }}" alt=""
                                                        style="width: 60px;hight:50px">
                                                </td>
                                                <td>
                                                    deneme
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{route('edit.multi.image',$item->id)}}"
                                                            class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                                class="fas fa-pencil-alt"></i></a>
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                                class="fa fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('backend/vendor') }}/global/global.min.js"></script>
    <script src="{{ asset('backend/vendor') }}/chart.js/Chart.bundle.min.js"></script>

    <script src="{{ asset('backend/vendor') }}/apexchart/apexchart.js"></script>

    <script src="{{ asset('backend/vendor') }}/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend/js') }}/plugins-init/datatables.init.js"></script>
    <script src="{{ asset('backend/vendor') }}/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('backend/js') }}/custom.min.js"></script>
    <script src="{{ asset('backend/js') }}/dlabnav-init.js"></script>
    <script src="{{ asset('backend/js') }}/demo.js"></script>
    <script src="{{ asset('backend/js') }}/styleSwitcher.js"></script>
@endsection
