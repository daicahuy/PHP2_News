@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#!">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="/admin/posts">Posts</a></li>
                        <li class="breadcrumb-item active">Hide</li>
                    </ol>
                </div>
                <h5 class="page-title">Posts</h5>
            </div>
            <div class="col-md-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h2 class="mb-4">
                            <span class="badge badge-default"> Posts Hide </span>
                        </h2>
                        <div class="alert alert-success mb-4" role="alert">
                            <strong>Success:</strong>
                            and try submitting
                            again.
                        </div>
                        <div class="d-flex justify-content-between mb-4" style="width: 100%">
                            <div class="d-flex">
                                <div style="margin-right: 32px">
                                    <a href="/admin/posts/" class="btn btn-secondary mo-mb-2" data-toggle="tooltip"
                                        data-placement="left" title=""
                                        data-original-title="List Posts">
                                        <i class="dripicons-view-list"></i>
                                    </a>
                                </div>
                                @include('components.table.filter')
                            </div>
                            @include('components.table.search')
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Author</th>
                                        <th>Category Name</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{$item['id']}}</th>
                                        <td>{{$item['title']}}</td>
                                        <td>
                                            <img
                                                src="/assets/uploads/gir2.jpg"
                                                alt=""
                                                width="80"
                                                height="80"
                                                style=" object-fit: cover;
                                                        border-radius: 4px;
                                                        box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
                                                        "
                                            >
                                        </td>
                                        <td>{{$item['userName']}}</td>
                                        <td>{{$item['nameCategory']}}</td>
                                        <td>
                                            <span class="badge badge-danger" style="font-size: 1rem;">
                                                {{$item['typeName']}}
                                            </span>
                                        </td>
                                        <td>
                                            <a  href="/admin/posts/show/{{$item['id']}}"
                                                class="btn btn-success waves-effect waves-light"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title=""
                                                data-original-title="Show"
                                            >
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                            <a  href='/admin/posts/delete/{{$item['id']}}'
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
                                    @endforeach
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
@endsection
