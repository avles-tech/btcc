@extends('layouts.app')
@section('con_title')
    <title>{{ isset($page_title) ? $page_title : 'BTCC Member Management' }}</title>
    <meta name="description" content="{{isset($description) ? $description : 'British Tamil Chamber of Commerce - Member Management'}}">
    <meta name="keywords" content="{{isset($keywords) ? $keywords : 'British Tamil Chamber of Commerce - Member Management'}}" />
    <meta name="abstract" content="{{isset($abstract) ? $abstract : 'British Tamil Chamber of Commerce - Member Management'}}" />

@endsection
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
                        <p class="title-head">Member Control Panel</p>
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
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget grey">
                        <h5>Controls</h5>
                        <div class="news-item short no-border">
                            <div class="article-short" style="padding: 4px 0 4px 12px !important;">
                                <a href="{{ url('member/home') }}">
                                    <h5>
                                        <i class="ion-ios-speedometer-outline" style="font-size:20px;margin-right: 20px;"></i>
                                        Dashboard
                                        <!--<span style="font-size:11px;float: right; margin-right: 12px;">[ 00 ]</span>-->
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="news-item short no-border">
                            <div class="article-short" style="padding: 4px 0 4px 12px !important;">
                                <a @if($member['member_type_id']=="Non-Business Member") href="#" title="Disabled for Non-Business Member" @else href="{{ url('member/business') }}" @endif>
                                    <h5>
                                        <i class="ion-ios-briefcase-outline" style="font-size:20px;margin-right: 20px;"></i>
                                        Business
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="news-item short no-border">
                            <div class="article-short" style="padding: 4px 0 4px 12px !important;">
                                <a @if($member['member_type_id']=="Non-Business Member") href="#" title="Disabled for Non-Business Member" @else href="{{ url('member/ads') }}" @endif>
                                    <h5>
                                        <i class="ion-images" style="font-size:20px;margin-right: 20px;"></i>
                                        Ads
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <div class="news-item short no-border">
                            <div class="article-short" style="padding: 4px 0 4px 12px !important;">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <h5>
                                        <i class="ion-ios-locked-outline" style="font-size:20px;margin-right: 20px;"></i>
                                        Logout
                                    </h5>
                                </a>
                            </div>
                        </div>
                        <p class="clearfix"></p>
                        <h5>Quick Links</h5>
                        <a></a>
                        <p class="clearfix"></p>
                        <a href="{{ url('job-portal') }}" class="btn"><span>Job Portal</span></a>
                        <p class="clearfix"></p>
                        <a href="{{ url('investment') }}" class="btn"><span>Investments</span></a>
                        <p class="clearfix"></p>
                        <a href="{{ url('advertisements') }}" class="btn"><span>Advertisements</span></a>
                    </div>
                </div>
                @yield('member_body')
            </div>
        </div>

@endsection
@section('extra_script')
@endsection
