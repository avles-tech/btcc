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
                        <p class="title-head">Jobs Portal</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Jobs Portal</li>
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

                    <h2>Companies with the Job Opportunity</h2>
                    <h4>Please click on your favourite company to browse their vacancy list.</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-10 sidebar">
                    <!-- Masonry -->
                    <div class="masonry three-col">
                        <div class="grid-sizer"></div>

                        <div class="grid-item">
                            <a href=""><img src="/images/noimage.jpg" alt="BTCC - company name">
                                <div class="project-info">
                                    <h5>jobs at</h5>
                                    <h2>Company Name</h2>
                                    <ul class="tags">
                                        <li>Company Email</li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                        <!-- end of item -->
                    </div>
                </div>

                <div class="col-md-2 sidebar">
                    <div class="item">
                        <h3>Categories</h3>
                        <hr>
                        <ul class="list">
                            <li><a href="">Category Name</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
@section('extra_script')
@endsection
