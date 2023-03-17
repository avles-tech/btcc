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
                        <p class="title-head">Events by BTCC</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
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

    <section class="dark1">

        <div class="container-fluid">
            <div class="row m-space">
                <div class="col-sm-6 col-md-3 project-select mh">
                    <a href="">
                        <img src="/images/noimage.jpg" alt="">
                        <div>
                            <h6>Event Title</h6>
                            <p>Venue | Date</p>
                            <p>10.10.2019 | 05:10 am</p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>


@endsection
@section('extra_script')
@endsection
