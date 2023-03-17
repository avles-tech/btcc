@extends('layouts.app')
@section('extra_css')
@endsection
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">{{ $page->title }}</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
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
    <header id="sp2" class="center parallax-container dark" data-overlay="9">
        <div class="parallax"><img src="{{ Voyager::image($page->image) }}" alt="{{ $page->title }}" style="display: block; transform: translate3d(-50%, 358px, 0px);"></div>
        <div class="header-in">
            <div class="caption" style="transform: translateY(0px); opacity: 1;margin-bottom: 20px;">
                <h1>{{ $page->title }}</h1>
            </div>
            <img class="arrow" src="/images/arrow.svg" alt="" style="transform: translateY(0px); opacity: 1;">
        </div>
    </header>

    <section class="iconblock grey">
        <div class="container">
            <div class="row">
                {!! $page->body !!}
            </div>
        </div>
    </section>

    <!-- Work with us -->
    <div id="c_workwithus" class="area center primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="promo-heading">Are you interested to join us?</span>
                    <a href="{{ url('contact-us') }}" class="btn"><span>Contact us</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
