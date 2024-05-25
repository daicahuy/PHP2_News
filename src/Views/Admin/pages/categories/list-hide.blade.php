@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#!">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="/admin/categories">Categories</a></li>
                        <li class="breadcrumb-item active">Hide</li>
                    </ol>
                </div>
                <h5 class="page-title">Categories</h5>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <h2 class="mb-4">
                                    <span class="badge badge-default"> Categories Hide </span>
                                </h2>
                                <div class="alert alert-success mb-4" role="alert">
                                    <strong>Success:</strong>
                                    and try submitting
                                    again.
                                </div>
                                <div class="d-flex justify-content-between mb-4" style="width: 100%">
                                    <div>
                                        <a href="/admin/categories" class="btn btn-secondary mo-mb-2" data-toggle="tooltip"
                                            data-placement="left" title=""
                                            data-original-title="List Categories">
                                            <i class="dripicons-view-list"></i>
                                        </a>
                                    </div>
                                    @include('components.table.search')
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                {{-- <th>Image</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                {{-- <td>
                                                    <img src="/assets/uploads/gir2.jpg" alt="" width="80"
                                                        height="80"
                                                        style=" object-fit: cover;
                                                                border-radius: 4px;
                                                                box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
                                                              ">
                                                </td> --}}
                                                <td>
                                                    <a  href="/admin/categories/show"
                                                        class="btn btn-success waves-effect waves-light"
                                                        data-toggle="tooltip"
                                                        data-placement="top"
                                                        title=""
                                                        data-original-title="Show"
                                                    >
                                                        <i class="mdi mdi-eye"></i>
                                                    </a>
                                                    <a  href='/admin/categories/delete'
                                                        class='btn btn-danger waves-effect waves-light'
                                                        data-toggle='tooltip'
                                                        data-placement='top'
                                                        title=''
                                                        data-original-title='Delete'
                                                        onclick="return confirm('Delete ??')"
                                                    >
                                                        <i class="mdi mdi-delete"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="mt-4 d-flex justify-content-between">
                                    @include('components.table.show-row')
                                    @include('components.table.pagination')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection