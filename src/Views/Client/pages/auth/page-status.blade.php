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
    </style>
@endsection

@section('content')
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                @isset($_SESSION['notify']['danger'])
                    <div class="error-page text-center col">
                        <div class="error-code">
                            <h2><strong>&#x2716</strong></h2>
                        </div>
                        <div class="error-message">
                            <h3>Fails</h3>
                        </div>
                        <div class="error-body">@include('components.alert')<br>
                            <a href="/" class="btn btn-primary">Back to Home</a> 
                        </div>
                    </div>
                @endisset
                @isset($_SESSION['notify']['success'])
                    <div class="success-wrap text-center col">
                        <div class="success-code">
                            <h2><strong>&#10004</strong></h2>
                        </div>
                        <div class="error-message">
                            <h4>Success</h4>
                        </div>
                        <div class="error-body">@include('components.alert')<br>
                            <a href="/" class="btn btn-primary">Back to Home</a> 
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </section>
@endsection