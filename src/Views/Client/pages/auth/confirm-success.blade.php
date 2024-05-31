@extends('layouts.master')
@section('css')
    <style>
        .success-wrap {
            margin-bottom: 18px;
        }

        .success-code h2 {
            display: block;
            font-size: 150px;
            line-height: 150px;
            color: #23ad00;
            margin-bottom: 12px;
            font-weight: 800 !important;
        }
        .d-none {
            display: none;
        }
    </style>
@endsection
@section('content')
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="success-wrap text-center col">
                    <div class="success-code">
                        <h2><strong>&#10004</strong></h2>
                    </div>
                    <div class="error-message">
                        <h4>Confirm Success</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mrb-40">
                    <div class="text-center">
                        <h3>Nhập mật khẩu mới cho huynhph46090@fpt.edu.vn</h3>
                        <div class="d-flex no-block justify-content-center align-items-center">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="">
                                        <div class="form-group">
                                            <input class="form-control " type="text"
                                                style="width: 450px">
                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-primary btn-submit" type="submit">Xác nhận</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
