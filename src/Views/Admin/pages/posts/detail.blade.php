@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#!">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="/admin/posts">Posts</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
                <h5 class="page-title">Posts</h5>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">
                            <span class="badge badge-default"> Detail Post </span>
                        </h2>
                        <img src="{{ show_upload($data['image']) }}" alt="" width="80" height="80"
                            style=" object-fit: cover;
                                    border-radius: 4px;
                                    box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
                                    margin-bottom: 16px
                                    ">
                        @include('components.alert')

                        <form action="" method="POST" enctype="multipart/form-data" class="mt-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block" style="font-weight: bold; font-size: large">Content</label>
                                        <div class="cart-body">
                                            <div class="content">
                                                {!! $data['content'] !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="d-block">Title</label>
                                        <input class="form-control" type="text" placeholder="Title Post..." disabled
                                            name="title" value="{{ $data['title'] }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Description</label>
                                        <input class="form-control" type="text" placeholder="Title Post..." disabled
                                            name="title" value="{{ $data['description'] }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="d-block" for="">Name Category</label>
                                                <select class="form-control" disabled>
                                                    @foreach ($cate as $item)
                                                        <option value="{{ $item['idCategory'] }}"
                                                            {{ $data['idCategory'] == $item['id'] ? 'selected' : '' }}>
                                                            {{ $item['nameCategory'] }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="d-block" for="">Type</label>
                                                <select class="form-control" disabled>
                                                    @foreach ($type as $item)
                                                        <option value="{{ $item['id'] }}"
                                                            {{ $data['idType'] == $item['id'] ? 'selected' : '' }}>
                                                            {{ $item['name'] }} </option>
                                                    @endforeach
                                                </select>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="d-block" for="">Author</label>
                                                <select class="form-control" disabled>
                                                    @foreach ($user as $us)
                                                        <option value="{{ $us['id'] }}"
                                                            {{ $data['idAuthor'] == $us['id'] ? 'selected' : '' }}>
                                                            {{ $us['name'] }} </option>
                                                    @endforeach
                                                </select>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
