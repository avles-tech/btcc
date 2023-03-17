@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">News</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">News</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-bg">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <section>
        <div class="container">
                <!-- Blog -->
                <div class="blog three-col">
                    <div class="blog-sizer"></div>
                    <div class="row">
                                <div class="blog-item">
                                    <div class="thumb1">
                                        <a href="/news/sample}">
                                            <img src="/images/noimage.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="article">
                                        <!--<span class="tag">Design</span>-->
                                        <a href="">
                                            <p>10.10.2019</p>
                                            <h3>News Title</h3>
                                        </a>
                                        <p>News Description</p>
                                        <hr>
                                        <h5 class="author">By Admin</h5>
                                    </div>
                                </div>
                        <!-- end of item -->
                    </div>

                </div>
            <div class="row">
                <div class="pagination">

                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection
