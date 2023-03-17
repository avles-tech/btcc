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
                        <p class="title-head">Blogs</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('blogs') }}"> Blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Title</li>
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
            <div class="row">
                <div class="col-md-8 col-md-offset-2 title">
                    <h2>Blog Title</h2>
                    <h4>10.10.10</h4>
                </div>
            </div>
            <div class="row m-space image-fw">
                <div class="col-md-12">
                    <img src="/images/noimage.jpg" alt="">
                </div>
            </div>
            <div class="row m-space">
                <div class="col-md-12">
                    <p>Description of blog</p>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('extra_script')
@endsection
