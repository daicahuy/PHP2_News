@extends('layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('page-title')
    Đăng nhập
@endsection
@section('content')
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mrb-40">
                    <div class="text-center">
                        <h3>Login</h3>

                    </div>

                    <div class="d-flex no-block justify-content-center align-items-center">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control form-control-lg" placeholder="Password*" type="text"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <a href="quenmatkhau">Quên mật khẩu?</a>

                            <div class="clearfix mt-2">
                                <button class="btn btn-info" type="submit">Đăng nhập</button>
                                <a href="dangky"><button class="btn btn-warning float-right" type="button">Đăng
                                        ký?</button> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
