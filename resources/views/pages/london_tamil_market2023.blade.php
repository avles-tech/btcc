@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
    <style>
        .logo-line a{
            display: inline-block !important;
            padding: -58px !important;
            margin-top:-75px !important;
        }
        .logo-line img{
            width:200px !important;
        }
    </style>
@endsection
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">London Tamil Market - 2023</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('london_tamil_market') }}"> London Tamil Market</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market 2023</li>
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

    <section>
        <div class="container border">

            <!--<div class="row m-space image-fw">
                <div class="col-md-12">
                    <img width="400" src="/images/btcc_letter_of_potpond.jpg" alt="London tamil market 2022 - Letter of potpond">
                </div>
            </div>-->
            <div class="row m-space">
                <div class="col-md-6 mh">
                    <h5>OUR LATEST EVENT</h5>
                    <h6>London Tamil Market 2023</h6>
                    <p>British Tamil Chamber of Commerce proudly presents London Tamil Market 2023, showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.
                        <br/>Celebrate the Tamil culture and shopping, and spend an exciting and memorable time with your friends and family to experience a variety of foods, entertainers, dedicated Kids play area and much more for all ages.</p>
                    <a href="{{ url('london-tamil-market-stall-booking') }}" class="btnnn uza-btn-2"><span style="font-size: 16px !important;">Reserve Your Stall &nbsp;<i class="fa fa-ticket" style="font-size: 18px !important;"></i></span></a>

                </div>
                <div class="col-md-5 col-md-offset-1 mh">
                    <div class="video-pos">
                        <div class="video-holder">
                            <div class="video">
                                <h4>London Tamil Market 2020</h4>
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/1zpQNBGefWM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--<div class="col-md-12 center">
                    <img width="60%" src="/images/btcc_letter_of_potpond.jpg" alt="London tamil market 2022 - Letter of potpond">
                </div>-->
            </div>
        </div>
    </section>

    <section class="iconblock center dark1">
        <div class="container border">
            @foreach($participant_categories AS $k => $participant_category)
                <div class="row">
                    <div class="col col-md-12 title">
                        <h2>{{ $participant_category->title }}</h2><div class="title-border"></div>
                    </div>
                </div>
                <div class="row m-space">
                    @foreach($stalls AS $n => $stall)
                        @if(isset($stall->business_id))
                            @if(isset($stall->participant_category_id) && ($participant_category->id == $stall->participant_category_id))
                                <div class="col-md-offset-1 col-sm-6 col-md-2">
                                    <img src="{{ Voyager::image($stall->business->image) }}" alt="London Tamil Market - {{ env('LTM_YEAR').' : '. $stall->business->business_name }}" title="{{ $stall->business->business_name }}">
                                </div>
                            @endif
                        @endif
                    @endforeach                    

                    @foreach($sponsors AS $n => $sponsor)
                        @if(isset($sponsor->logo))
                            @if(isset($sponsor->participant_categories_id) && ($participant_category->id == $sponsor->participant_categories_id))
                                <div class="col-md-offset-1 col-sm-6 col-md-2">
                                    <img src="{{ Voyager::image($sponsor->logo) }}" alt="London Tamil Market - {{ env('LTM_YEAR').' : '. $sponsor->organisation_name }}" title="{{ $sponsor->organisation_name }}">
                                </div>
                            @endif
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>

@endsection
@section('extra_script')
@endsection
