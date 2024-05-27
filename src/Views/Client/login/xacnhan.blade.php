@extends('layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('page-title')
    Nhập mã OTP
@endsection
@section('content')
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mrb-40">
                    <div class="text-center">
                        <h3>Nhập mã OTP</h3>



                        <div class="d-flex no-block justify-content-center align-items-center">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="">
                                        <div class="form-group">
                                            <input class="form-control " placeholder="Email*" type="email" required
                                                style="width: 450px">
                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-primary" type="submit">Gửi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
