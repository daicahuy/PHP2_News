@extends('layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('page-title')
    Đăng ký
@endsection
@section('content')
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <div class="text-center">
                        <h3>Đăng ký</h3>

                    </div>
                    <div class="d-flex no-block justify-content-center align-items-center">
                        <form action="/auth/sign-up" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" placeholder="Name*"
                                            type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mật khẩu*" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nhập lại mật khẩu*" type="text"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Chọn ảnh đại diện" type="file" required>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix mt-2">
                                <button class="btn btn-info float-right" type="submit">Đăng ký</button>
                                <a href="/auth/"><button class="btn btn-warning" type="button">Quay lại</button> </a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
