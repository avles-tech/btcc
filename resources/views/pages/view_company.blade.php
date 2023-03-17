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
                        <p class="title-head">Company Profile</p>
                        <nav aria-label="breadcrumb" style="width:100% !important;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('members') }}">Members</a></li>
                                <li class="breadcrumb-item"><a href="">{{ $business_category->title }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ isset($business->business_name) ? $business->business_name : 'Not-set' }}</li>
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

    <section class="gallery">
        <div>
            <div class="row">
                <div class="col-sm-offset-1 col-sm-2 mh">
                    <div>
                        <img class="img-responsive img-thumbnail" style="float:right; max-height: 300px;" src="{{ Voyager::image($business->image) }}" alt="BTCC Member - {{ isset($business->business_name) ? $business->business_name : 'Not-set' }}">
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="center">
                        <div class="social img-thumbnail" style="width: 100%;">
                            {!! isset($business->facebook) ? '<a href="'.$business->facebook.'"><i style="font-size:20px; margin:0 12px;" class="ion-social-facebook"></i></a>' : '' !!}
                            {!! isset($business->google) ? '<a href="'.$business->google.'"><i style="font-size:20px; margin:0 12px;" class="ion-social-googleplus"></i></a>' : '' !!}
                            {!! isset($business->instagram) ? '<a href="'.$business->instagram.'"><i style="font-size:20px; margin:0 12px;" class="ion-social-instagram"></i></a>' : '' !!}
                            {!! isset($business->twitter) ? '<a href="'.$business->twitter.'"><i style="font-size:20px; margin:0 12px;" class="ion-social-twitter"></i></a>' : '' !!}
                            {!! isset($business->linkedin) ? '<a href="'.$business->linkedin.'"><i style="font-size:20px; margin:0 12px;" class="ion-social-linkedin"></i></a>' : '' !!}
                            {!! isset($business->pinit) ? '<a href="'.$business->pinit.'"><i style="font-size:20px; margin:0 12px;" class="ion-social-pinterest"></i></a>' : '' !!}
                        </div>
                    </div>
                    <h5 style="text-transform:none;font-size:10px;border-radius: 6px; background-color: #f0f0f080; padding: 12px 6px 12px 6px;">
                        <i class="ion-ios-eye-outline" style="color:#4B596A;margin-right: 8px;margin-left: 4px;"></i>
                        {{ $business->business_views }}
                    </h5>
                    <h5 style="text-transform:none;font-size:10px;border-radius: 6px; background-color: #f0f0f080; padding: 12px 6px 12px 6px;">
                        <i class="ion-ios-email-outline" style="color:#4B596A;margin-right: 8px;margin-left: 4px;"></i>
                        {{ isset($business->business_email) ? $business->business_email : 'Not-set' }}
                    </h5>
                    <h5 style="text-transform:none;font-size:10px;border-radius: 6px; background-color: #f0f0f080; padding: 12px 6px 12px 6px;">
                        <i class="ion-ios-telephone-outline" style="color:#4B596A;margin-right: 8px;margin-left: 4px;"></i>
                        {{ isset($business->business_telephone) ? $business->business_telephone : 'Not-set' }}
                    </h5>
                    <h5 style="text-transform:none;font-size:10px;border-radius: 6px; background-color: #f0f0f080; padding: 12px 6px 12px 6px;">
                        <i class="ion-ios-location-outline" style="color:#4B596A;margin-right: 8px;margin-left: 4px;"></i>
                        {{ isset($business->business_address) ? $business->business_address : 'Not-set' }}
                        <br/><hr/>
                        {{ isset($business->business_city) ? $business->business_city : 'Not-set' }}<br/>
                        {{ isset($business->postcode) ? $business->postcode : 'Not-set' }}
                    </h5>
                </div>
                <div class="col-sm-6">
                    <div class="content-fixer">
                        <div class="content-holder">
                            <h5>BTCC Member</h5>
                            <h2>{{ isset($business->business_name) ? $business->business_name : 'Not-set' }}</h2>
                            <p>Description</p>
                            <div style="padding:12px;border-style: solid;border-width: 1px 1px 12px 1px;">
                                {!! $business->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget grey">
                        <h5>Quick Links for company name</h5>
                        <div class="news-item short no-border">
                            <div class="article-short" style="padding: 4px 0 4px 12px !important;">
                                <a href="">
                                    <h5>
                                        <i class="ion-ios-briefcase-outline" style="font-size:20px;margin-right: 20px;"></i>
                                        Available Jobs
                                        <span style="font-size:11px;float: right; margin-right: 12px;">[ 00 ]</span>
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="news-item short no-border">
                            <div class="article-short" style="padding: 4px 0 4px 12px !important;">
                                <a href="">
                                    <h5>
                                        <i class="ion-ios-lightbulb-outline" style="font-size:20px;margin-right: 20px;"></i>
                                        Posted Offers
                                        <span style="font-size:11px;float: right; margin-right: 12px;">[ 00 ]</span>
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <p class="clearfix"></p>
                        <h5>Company Name's Specialised Sector/s</h5>

                        <h6 style="text-align:center; color:#4B596A; font-size:12px;border-radius: 16px; border:solid 1px #5cb85c; padding: 6px 4px 6px 4px;">{{ isset($business->sector) ? $business->sector : 'Not-set' }}</h6>
                        <p class="clearfix"></p>
                        <h3>Wana list your business as well?</h3>
                        <a href="{{ url('register') }}" class="btn"><span>Become Member</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('extra_script')
@endsection
