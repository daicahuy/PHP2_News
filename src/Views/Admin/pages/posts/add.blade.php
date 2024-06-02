@extends('layouts.master')

@section('css')
    <!-- Summernote css -->
    <link
    href="/assets/admin/assets/plugins/summernote/summernote-bs4.css"
    rel="stylesheet"
    />
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#!">Drixo</a></li>
                        <li class="breadcrumb-item"><a href="/admin/posts">Posts</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h5 class="page-title">Posts</h5>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">
                            <span class="badge badge-default"> Add Post </span>
                        </h2>
                        @include('components.alert')

                        <form action="/admin/posts/add" method="POST" enctype="multipart/form-data" class="mt-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">    
                                        <label class="d-block">Content</label>
                                        <div class="summernote">Content Post</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">    
                                        <label class="d-block">Title</label>
                                        <input class="form-control" type="text" placeholder="Title Post..."
                                            name="title">
                                    </div>
                                    <div class="form-group">
                                        <label class="d-block">Image</label>
                                        <input type="file" name="image" accept="image/*">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="d-block" for="">Name Category</label>
                                                <select class="form-control" name="idCategory" >
                                                    @foreach ($cate as $item)
                                                    <option value="{{$item['idCategory']}}" > {{$item['nameCategory']}} </option>
                                                     @endforeach
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="d-block" for="">Type</label>
                                                <select class="form-control" name="idType">
                                                   @foreach ($type as $item)
                                                       <option value="{{$tiem['id']}}">{{$item['name']}}</option>
                                                   @endforeach
                                                  </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <button
                                        name="btn-add"
                                        type="submit"
                                        class="btn btn-success waves-effect waves-light float-right mt-8"
                                        style="
                                            position: absolute;
                                            bottom: 0;
                                            right: 0;
                                        "
                                    >
                                        Add
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <!--Summernote js-->
    <script src="/assets/admin/assets/plugins/summernote/summernote-bs4.min.js"></script>

    <script>
    jQuery(document).ready(function () {
        $(".summernote").summernote({
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true, // set focus to editable area after initializing summernote
        });
    });
    </script>
@endsection