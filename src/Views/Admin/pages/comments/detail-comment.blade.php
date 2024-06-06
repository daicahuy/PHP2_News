@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#!">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="/admin/comments">Comments</a></li>
                        <li class="breadcrumb-item active">Detail Comment</li>
                    </ol>
                </div>
                <h5 class="page-title">Detail Comment</h5>
            </div>
            <div class="col-md-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h2 class="mb-4">
                            <span class="badge badge-default"> Detail Comment </span>
                        </h2>
                        <div class="alert alert-success mb-4" role="alert">
                            <strong>Success:</strong>
                            and try submitting
                            again.
                        </div>
                        <div class="d-flex justify-content-between mb-4" style="width: 100%">
                            <div></div>
                            @include('components.table.search')
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th style="width: 10%">Username</th>
                                        <th style="width: 10%">Image</th>
                                        <th style="width: 50%">Content</th>
                                        <th style="width: 10%; text-align: center">Reply Username</th>
                                        <th style="width: 15%">Submited On</th>
                                        <th style="width: 5%">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    <tr>
                                        <th>1</th>
                                        <td>
                                            huydeptrai2222
                                        </td>
                                        <td>
                                            <img src="/assets/uploads/gir2.jpg" alt="" width="80" height="80"
                                                style=" object-fit: cover;
                                                        border-radius: 4px;
                                                        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
                                                        ">
                                        </td>
                                        <td>
                                            <p
                                                style="
                                                        font-size: 1rem;
                                                        background-color: #eff3f6;
                                                        color: #0a1832;
                                                        padding: 8px 16px;
                                                        text-align: justify;
                                                        border-radius: 8px;">
                                                Admin Admin Admin Admin Admin Admin Admin Admin \n Admin Admin Admin Admin
                                                Admin Admin Admin Admin Admin Admin AdminAdmin Admin Admin Admin Admin Admin
                                                Admin AdminAdmin Admin Admin Admin Admin Admin Admin Admin
                                            </p>
                                        </td>
                                        <td style="text-align: center">
                                            <label for="">huydeptrai2222</label>
                                        </td>
                                        <td>
                                            <label for="">2024-23-05 09:59:00 PM</label>
                                        </td>
                                        <td>
                                            <a
                                                href="/admin/comments/delete-reply"
                                                class="btn btn-danger waves-effect waves-light"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" onclick="return confirm('Delete ??')"
                                            >
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 d-flex justify-content-between">
                            @include('components.table.pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
