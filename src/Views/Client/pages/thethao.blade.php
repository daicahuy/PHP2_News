@extends('layouts.master')
@section('title')
    {{ $title }}
@endsection
@section('page-title')
    {{ $title }}
@endsection
@section('content')
    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="block category-listing category-style2">
                        <h3 class="utf_block_title"><span>{{ $title }}
                            </span></h3>
                        <ul class="subCategory unstyled">
                            <li><a href="#">Traveling</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>

                        @include('components.static.post')
                        @include('components.static.post')
                        @include('components.static.post')
                        @include('components.static.post')
                        @include('components.static.post')



                    </div>

                    @include('components.table.pagination')
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="sidebar utf_sidebar_right">
                        {{-- FOLLOW US  --}}
                        @include('components.static.follow-us')

                        <div class="widget color-default">
                            <h3 class="utf_block_title"><span>Tin mới</span></h3>
                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">
                                    {{-- Post-sidebar  --}}

                                    @include('components.static.post-sidebar')
                                    @include('components.static.post-sidebar')
                                    @include('components.static.post-sidebar')
                                    @include('components.static.post-sidebar')

                                </ul>
                            </div>
                        </div>

                        @include('components.static.ads')


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->
@endsection
