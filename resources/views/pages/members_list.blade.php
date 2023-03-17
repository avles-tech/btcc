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
                        <p class="title-head">Members List</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('members') }}">Members</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Category</li>
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

    <section class="uza-portfolio-area">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <img src="/images/diamond.png" alt="Icon">
                <h2>All Category</h2>
                <h4>Take a look at our members listing for your required category</h4>
            </div>
        </div>
        <div class="row m-space">
            <div class="col-md-offset-1 col-md-6" id="job-div">

                @foreach($businesses AS $k => $business)
                    @if($business->member->member_type_id == "Platinum Membership")
                        <div class="job clickable">
                            <img src="{{ isset($business->member->member_type_id) ? (asset('images/'. $business->member->member_type_id . '.png')) : '' }}" width="64" alt="BTCC Platinum Member" class="img-responsive category-banner"/>
                            <h3>{{ $business->business_name }}
                                <img class="img-responsive company-logo" src="{{ Voyager::image($business->image) }}" alt="BTCC Member - {{ $business->business_name }}">
                            </h3>
                            <hr>
                            <h5>{{ $business->sector }}</h5>
                            <p>{{ $business->excerp_description }}</p>
<div class="phone-view">
                            <a href="{{ url('members/business/' . $business->slug ) }}" class="uza-btn btn-2 uza-down">More information</a>
                            <a href="tel:" class="uza-btn btn-new "><i class="fa fa-phone"></i> {{ isset($business->business_telephone) ? $business->business_telephone : 'Not Provided' }}</a>
</div>

                        </div>
                    @endif
                @endforeach

                @foreach($businesses AS $k => $business)
                    @if($business->member->member_type_id == "Gold Membership")
                        <div class="job clickable">
                            <img src="{{ isset($business->member->member_type_id) ? (asset('images/'. $business->member->member_type_id . '.png')) : '' }}" width="64" alt="BTCC Platinum Member" class="img-responsive category-banner"/>
                            <h3>{{ $business->business_name }}
                                <img class="img-responsive company-logo" src="{{ Voyager::image($business->image) }}" alt="BTCC Member - {{ $business->business_name }}">
                            </h3>
                            <hr>
                            <h5>{{ $business->sector }}</h5>
                            <p>
                           @if(strlen($business->excerp_description)<15)
                           &nbsp;<br/><br/><br/>
                           @else
                            {{ $business->excerp_description }}
                            @endif
                            </p>
<div class="phone-view">
                            <a href="{{ url('members/business/' . $business->slug ) }}" class="uza-btn btn-2 uza-down">More information</a>
                            <a href="tel:" class="uza-btn btn-new"><i class="fa fa-phone"></i> {{ isset($business->business_telephone) ? $business->business_telephone : 'Not Provided' }}</a>
</div>
                        </div>
                    @endif
                @endforeach
                @foreach($businesses AS $k => $business)
                    @if($business->member->member_type_id == "Free Membership")
                        <div class="job">
                            <h3>{{ $business->business_name }}
                                <img class="img-responsive company-logo-single"  src="{{ Voyager::image($business->image) }}" alt="BTCC Member - {{ $business->business_name }}">
                            </h3>
                            <hr>
                            <h5>{{ $business->sector }}</h5>
                            <p>{{ $business->excerp_description }}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="widget grey">
                    <h3>Search by Company Name</h3>
                    <form class="contact-form">
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for company names...">
                    </form>
                    <hr/>
                </div>
                <div class="widget grey">
                    <h3>Categories</h3>

                    @foreach($business_categories AS $k => $business_category)
                        <div class="news-item short move-reduce">
                            <div class="article-short" style="padding: 15px 0 15px 70px !important;">
                                <div class="user-pic-2">
                                    <img src="{{ Voyager::image($business_category->image) }}" alt="BTCC - Business category - {{ $business_category->title }}">
                                </div>
                                <a href="{{ url('members/list/'.$business_category->slug) }}">
                                    <h5 class="comname">{{ $business_category->title }}</h5>
                                </a>
                            </div>
                            <span class="tag-3">{{ $business_category->business_count }}</span>
                        </div>
                    @endforeach

                </div>
            </div>
            <!--
            <div class="col-md-2">
                <div class="widget grey">
                    <h5>Filter by</h5>
                    <a href="#" class="btn btn-sm"><span>A - Z</span></a>
                    <a href="#" class="btn btn-sm"><span>Z - A</span></a>
                    <h3>Wana list your business as well?</h3>
                    <a href="#" class="btn"><span>Become Member</span></a>
                </div>
            </div>-->
        </div>
        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="/img/core-img/curve-3.png" alt="">
        </div>
    </section>

    <script type="application/javascript">
        function myFunction() {
            // Declare variables
            var input, filter, div, job_class, h3, i;
            input = document.getElementById('myInput');
            filter = input.value.toUpperCase();
            div = document.getElementById("job-div");
            job_class = div.getElementsByClassName('job');
            // Loop through all job_classst items, and hide those who don't match the search query
            for (i = 0; i < job_class.length; i++) {
                h3 = job_class[i].getElementsByTagName("h3")[0];
                if (h3.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    job_class[i].style.display = "";
                } else {
                    job_class[i].style.display = "none";
                }
            }
        }
    </script>

    <style type="text/css">
        .clickable:hover{
            cursor: pointer;
        }
    </style>
@endsection
@section('extra_script')
@endsection
