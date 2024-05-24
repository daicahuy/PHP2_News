@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#!">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="/admin/categories">Categories</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
                <h5 class="page-title">Edit Category</h5>
                
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="mb-4">
                                    <span class="badge badge-default"> Edit Category </span>
                                </h2>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="d-block">ID</label>
                                        <input class="form-control" type="text" name="id" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Name</label>
                                        <input class="form-control" type="text" placeholder="Name Category..." name="name">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label class="d-block">Image</label>
                                        <input type="file" name="image" accept="image/*">
                                    </div> --}}
                                    <button type="submit" class="btn btn-warning waves-effect waves-light float-right">
                                        Edit
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
