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
                        <img
                            src="/assets/uploads/gir2.jpg"
                            alt=""
                            width="80"
                            height="80"
                            style=" object-fit: cover;
                                    border-radius: 4px;
                                    box-shadow: 0 2px 8px 0 rgba(0, 0, 0, 0.2);
                                    margin-bottom: 16px
                                    "
                        >
                        <div class="alert alert-danger mb-2" role="alert">
                            <strong>Error:</strong>
                            and try submitting
                            again.
                        </div>
                        <form action="" method="POST" enctype="multipart/form-data" class="mt-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">    
                                        <label class="d-block">Content</label>
                                        <div class="cart-body">
                                            <div class="content">
                                                <h1>THIS IS EXAMPLE TITLE POST</h1>
                                                <h1>Content POST</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">    
                                        <label class="d-block">Title</label>
                                        <input class="form-control" type="text" placeholder="Title Post..."
                                            name="title">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="d-block" for="">Name Category</label>
                                                <select class="form-control">
                                                    <option>Heath</option>
                                                    <option>Life</option>
                                                    <option>Football</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="d-block" for="">Type</label>
                                                <select class="form-control">
                                                    <option>Default</option>
                                                    <option>Hot</option>
                                                    <option>Breaking</option>
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