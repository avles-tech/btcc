@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')

    <header id="sp2" class="center parallax-container dark home-slider" data-overlay="9">
        <div class="parallax"><img src="/images/2.jpg" alt="" style="display: block; transform: translate3d(-50%, 358px, 0px);"></div>
        <div class="header-in">
            <div class="caption" style="transform: translateY(0px); opacity: 1;margin-bottom: 20px;">
                <h1>London Tamil Market - {{ env('LTM_YEAR') }}</h1>
                <h6>Where the brightest business leaders gather</h6>
                <h1 id="countdown" style="color:#F18562;font-size: 32px; padding-top: 10px;"></h1>
            </div>
            <img class="arrow" src="/images/arrow.svg" alt="" style="transform: translateY(0px); opacity: 1;">
        </div>
    </header>
    <!-- ***** Breadcrumb Area Start ***** --
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">London Tamil Market</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-bg">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <div id="c_workwithus" class="area center primary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-6 mh">
                    <a href="{{ route('london-tamil-market-2020') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2020</span></a>
                </div>
                <div class="col-md-4 col-xs-6 mh">
                    <a href="{{ route('london-tamil-market-2019') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2019</span></a>
                </div>
                <div class="col-md-4 col-xs-6 mh">
                    <a href="{{ route('london-tamil-market-2018') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2018</span></a>
                </div>
                <div class="col-md-4 col-xs-6 mh">
                    <a href="{{ route('london-tamil-market-2017') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2017</span></a>
                </div>
                <!-- col-md-offset-2 mh-->
                <div class="col-md-4 col-xs-6">
                    <a href="{{ route('london-tamil-market-2016') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2016</span></a>
                </div>
                <div class="col-md-4 col-xs-6 mh">
                    <a href="{{ route('london-tamil-market-2015') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2015</span></a>
                </div>
            </div>
        </div>
    </div>

    <!--<section>
        <div class="container border">
            <div class="row m-space">
                <div class="col-md-6 mh">
                    <h5>OUR LATEST EVENT?</h5>
                    <h6>London Tamil Market 2022</h6>
                    <p>British Tamil Chamber of Commerce proudly presents London Tamil Market 2022, showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.
                        <br/>Celebrate the Tamil culture & shopping, and spend an exciting and memorable time with your friends and family to experience a variety of foods, entertainers, dedicated Kids play area and much more for all ages.</p>
                    <a href="{{ url('london-tamil-market-2019') }}" class="btnnn uza-btn-2"><span style="font-size: 13px !important;">Read More &nbsp;<i class="fa fa-arrow-right" style="font-size: 18px !important;"></i></span></a>

                </div>
                <div class="col-md-5 col-md-offset-1 mh">
                    <div class="video-pos">
                        <div class="video-holder">
                            <div class="video">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/pDVgRwh6l4k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <div class="promo dark area parallax-container" data-overlay="9">
        <div class="parallax"><img src="/images/floor-map-2018-countdown.jpg" alt="London Tamil Market" style="display: block; transform: translate3d(-50%, 365px, 0px);"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>The countdown has started to the mega  trade show for the next time in London. Showcasing Tamil
                        Businesses from all sectors with a huge range of products and services with a focus on a Tamil Audience.</h5>
                    <h5>We welcome you to participate in this fabulous event to celebrate the Tamil New Year, an exciting
                        and memorable time with your friends and family t o experience a variety of foods, entertainers,
                        magicians, crazy face painting and much, much more.</h5>
                    <h5>There are two full days of exhibition in Heart of London to see an array of interesting products
                        and services and to grab a great bargain.</h5>
                    <h5>Come and have a great family fun day and support our Tamil community, we can’t wait to see you there.</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="promo area dark2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-4">
                    <h5 class="no-pad-top no-pad-bot">LTM - {{ env('LTM_YEAR') }}</h5>
                    <span class="promo-heading">
                  Looking for Exhibit? Book Exhibition Space Now
                </span>
                    <a href="/london-tamil-market-{{ env('LTM_YEAR') }}" class="btn"><span>Book Now</span></a>
                </div>
                <div class="col-sm-8 col-lg-8">
                    <img class="promo-image" src="/images/ltm_book.png" alt="London Tamil Market {{ env('LTM_YEAR') }}">
                </div>
            </div>
        </div>
    </div>
    
    <!--<section>
        <div class="container border center">
            <div class="row m-space">
                <div class="col-md-12">
                    <img width="60%" src="/images/btcc_letter_of_potpond.jpg" alt="London tamil market 2022 - Letter of potpond">
                </div>
            </div>
        </div>
    </section>-->

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Apr 8, 2023 10:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("countdown").innerHTML = days + " Days : " + hours + " Hours : "
                + minutes + " Minutes : " + seconds + " Seconds";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
@endsection
@section('extra_script')
@endsection
