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
                        <p class="title-head">Members</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Members</li>
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

    <div class="promo area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <h5 class="no-pad-top no-pad-bot">members</h5>
                    <span class="promo-heading">
                  Looking for Professionals? Check-out all our members here...
               </span>
                    <a href="{{ route('list_all_members') }}" class="btnnn uza-btn-2"><span style="font-size: 13px !important;"><i class="fa fa-user-o" style="font-size: 18px !important;"></i> &nbsp;List All Members</span></a>
                </div>
                <div class="col-sm-8 col-lg-8">
                    <img class="promo-image" src="/images/all-members.png" alt="BTCC All Members">
                </div>
            </div>
        </div>
    </div>

    <section class="dark1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="move-down-1">Click and explore our members</h5>
                    <h2>Popular Categories</h2>
                    <div class="title-border"></div>
                </div>
            </div>

            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    @foreach($business_categories AS $k => $business_category)
                        <!-- Single Portfolio Slide -->
                        <div class="single-portfolio-slide">
                            <div class="news-item short mr-bg">
                                <div class="article-short">
                                    <div class="user-pic">
                                        <img src="{{ Voyager::image($business_category->image) }}" alt="BTCC - Business category - {{ $business_category->title }}">
                                        <span class="tag-2">{{ $business_category->business_count }}</span>
                                        <a href="{{ url('members/list/'.$business_category->slug) }}">
                                        <h3>{{ $business_category->title }} <small></small></h3>
                                        <p>{{ $business_category->description }}</p>
                                        </a>
                                        <a href="{{ url('members/list/'.$business_category->slug) }}"><div class=" border-btn-2 mx-5 cat-move">
                                            <span><i class="fa fa-eye"></i> View More</span>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

<!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Platinum Members</h2>
                        <p class="move-up">Work with people whom you trust</p>
                        <br/>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                @if(count($businesses)<1)
                    <h5>No business has been listed currently!</h5>
                @else
                    <!--<div class="portfolio-sildes owl-carousel">-->
                        <!-- Single Portfolio Slide -->
                        @foreach($businesses AS $k => $business)
                            @if($business->member->member_type_id == "Platinum Membership")
                          
                                <div class="col-md-3 single-portfolio-slide single-portfolio-slide-bg">
                                    <img src="{{ Voyager::image($business->image) }}" alt="BTCC Platinum Member - {{ $business->business_name }}">
                                    <div class="overlay-effect">
                                        <h4>{{ $business->business_name }}</h4>
                                        <p>Platinum Member</p>
                                    </div>
                                    <div class="view-more-btn">
                                        <a href="{{ url('members/business/'.$business->slug) }}"><i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    <!--</div>-->
                @endif
            </div>
        </div>
        <!-- Border -->
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="/images/curve-3.png" alt="">
        </div>
    </section>


    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80" style="background-color: #CFB53B !important;">

        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Our Gold members</h2>
                        <p class="move-up" style="color:white;">Work with people whom you trust</p>
                        <br/>
                        <div class="title-border"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                @if(count($businesses)<1)
                    <h5>No business has been listed currently!</h5>
                @else
                    <div class="portfolio-sildes owl-carousel">
                        <!-- Single Portfolio Slide -->
                        @foreach($businesses AS $k => $business)
                            @if($business->member->member_type_id == "Gold Membership")
                                <div class="single-portfolio-slide single-portfolio-slide-bg">
                                    <img src="{{ Voyager::image($business->image) }}" alt="BTCC Gold Member - {{ $business->business_name }}">
                                    <!-- Overlay Effect -->
                                    <div class="overlay-effect">
                                        <h4>{{ $business->business_name }}</h4>
                                        <p>Gold Member</p>
                                    </div>
                                    <!-- View More -->
                                    <div class="view-more-btn">
                                        <a href="{{ url('members/business/'.$business->slug) }}"><i class="arrow_right"></i></a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </section>


@endsection
@section('extra_script')
<!--<style>
.owl-carousel {
    display: block !important;
}
</style>-->
@endsection
