@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">Tamil Heritage Month</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tamil Heritage Month</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-background">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** Breadcrumb Area End ***** -->
    <header id="sp2" class="center parallax-container dark" data-overlay="9">
        <div class="parallax"><img src="{{ asset('images/Tamil-Heritage-Month.jpg') }}" alt="BTCC - Tamil Heritage Month" style="display: block; transform: translate3d(-50%, 358px, 0px);"></div>
        <div class="header-in">
            <div class="caption" style="transform: translateY(0px); opacity: 1;">
                <!--<h1 id="countdown" style="color:#F18562;font-size: 32px; margin-top: -100px;"></h1>
                <a style="padding-bottom: 20px;" href="https://www.eventbrite.co.uk/e/tamil-heritage-month-celebration-tickets-88909044345" target="_blank" class="btn btn-success"><i class="fa fa-ticket"></i> <span>BUY TICKETS</span></a>-->
                <h1>Tamil Heritage Month</h1>
            </div>
            <img class="arrow" src="/images/arrow.svg" alt="" style="transform: translateY(0px); opacity: 1;">
        </div>
    </header>

    <!-- Gallery -->
    <section class="gallery" style="margin-top: -40px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 mh">
                    <div class="content-fixer">
                        <div class="content-holder">
                            <p style="text-align: justify;">British Tamil Chamber of Commerce welcomes the idea of celebrating the month of January as Tamil Heritage Month and will celebrate January 2020 as Tamil Heritage Month in the UK. Tamil Heritage Month was first recognised in Canada and unanimously adopted in the parliament in 2016. There are over 70 million Tamils around the world, and in the UK alone boasts around 250k Tamils. It is very important to make the contribution of British Tamils in the UK and their homeland.</p>
                            <p style="text-align: justify;">BTCC is proud to celebrate January month as Tamil Heritage Month, this would help bring the richness of the Tamil language and culture to the British public and let them embrace the cultural heritage of British Tamils.</p>
                            <p style="text-align: justify;">Celebrating Tamil Heritage in the month of January would be an extension of the Tamil New Year ‘Thai Pongal’ that is celebrated worldwide by Tamils.</p>
                            <p style="text-align: justify;">BTCC welcome all the organisations to take part in the Tamil Heritage Month in the UK, and organise various cultural and Tamil recognition events throughout the year.</p>
                        </div>
                    </div>
                    <a href="{{ asset('images/thm/BTCC-THM-Press-Release.pdf') }} " target="_blank"><h4>BTCC Tamil Press Release on Tamil Heritage Month Launch Event (ஊடக அறிக்கை)</h4></a>
                </div>
                <div class="col-sm-3 mh">
                    <div class="content-fixer">
                        <div class="content-holder">
                            <img src="{{ asset('images/thm/thm-logo.png') }}" alt="BTCC - Tamil Heritage Month - 2020">
                            <img src="{{ asset('images/tamil-heritage-month-2020.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                            <a href="https://www.facebook.com/events/872843099799420/" target="_blank" class="btn"><span>JOIN OUR FACEBOOK EVENT</span></a>
                        </div>
                    </div>
                    <div class="single-pic">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Company -->
    <section class="iconblock center dark1">
        <div class="container border">
            <div class="row">
                <div class="col col-md-12 title">
                    <h2>Organisations Support Tamil Heritage Month</h2><div class="title-border"></div>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-data.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-child-first.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-ttw.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-sports.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-institute.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-housing.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-bright.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-wfts.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-step.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-wtbf.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-ppa.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-medical.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-scot.png') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-kili.png') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12 title">
                    <h2>Tamil Heritage Month Media Partners</h2><div class="title-border"></div>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-md-offset-2 col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-ibc.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-samakalam.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-pamuham.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{ asset('images/thm/thm-vanakam.jpg') }}" alt="BTCC - Tamil Heritage Month - 2020">
                </div>
            </div>
            <br/>
        </div>
    </section>


    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 18, 2020 18:00:00").getTime();

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
