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

                        <div class="utf_post_block_style post-list clearfix">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="utf_post_thumb thumb-float-style">
                                        <a href="#">
                                            <img class="img-fluid" src="/assets/client/assets/images/news/tech/robot5.jpg"
                                                alt="" />
                                        </a>
                                        <a class="utf_post_cat" href="#">Traveling</a>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-6">
                                    <div class="utf_post_content">
                                        <h2 class="utf_post_title title-large">
                                            <a href="chitiet">Robots in hospitals can be quite handy to navigate
                                                around the hospital</a>
                                        </h2>
                                        <div class="utf_post_meta">
                                            <span class="utf_post_author"><i class="fa fa-user"></i>
                                                <a href="#">John Wick</a></span>
                                            <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                            <span class="post-comment pull-right"><i class="fa fa-comments-o"></i>
                                                <a href="#" class="comments-link"><span>03</span></a></span>
                                        </div>
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing type
                                            setting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever galley of type...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('components.static.post')
                        @include('components.static.post')
                        @include('components.static.post')
                        @include('components.static.post')
                        @include('components.static.post')
                    </div>
                    {{-- phân trang  --}}
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

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb">
                                                <a href="#">
                                                    <img class="img-fluid"
                                                        src="/assets/client/assets/images/news/tech/gadget3.jpg"
                                                        alt="" />
                                                </a>
                                                <a class="utf_post_cat" href="#">Lifestyle</a>
                                            </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small">
                                                    <a href="#">Zhang social media pop also known when smart
                                                        innocent...</a>
                                                </h2>
                                                <div class="utf_post_meta">
                                                    <span class="utf_post_author"><i class="fa fa-user"></i>
                                                        <a href="#">John Wick</a></span>
                                                    <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                        2022</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

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