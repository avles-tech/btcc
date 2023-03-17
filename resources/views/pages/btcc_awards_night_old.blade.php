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
                        <p class="title-head">BTCC Awards Night</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">BTCC Awards Night</li>
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
        <div class="parallax"><img src="/images/2.jpg" alt="" style="display: block; transform: translate3d(-50%, 358px, 0px);"></div>
        <div class="header-in">
            <div class="caption" style="transform: translateY(0px); opacity: 1;margin-bottom: 20px;">
                <h1>BTCC Awards Night - 2020</h1>
                <h6>The event is on - 18 January 2020</h6>
                <!--<h1>Get Ready for LTM - 2020</h1>-->
                <h1 id="countdown" style="color:#F18562;font-size: 32px; padding-top: 10px;"></h1>
            </div>
            <img class="arrow" src="/images/arrow.svg" alt="" style="transform: translateY(0px); opacity: 1;">
        </div>
    </header>

    <section class="iconblock grey">
        <div class="container">
            <div class="row">


                <div class="col col-md-8">
                    <h2 class="text-uppercase">BTCC Awards Night</h2>
                    <div class="title-border"></div>
                    <h4>“Recognising and Celebrating Tamil Businesses”</h4>
                    <p>British Tamil Chamber of Commerce has grown exponentially since its inception in 2009. After 10 years of serving the Tamil business community, we are pleased to announce the launch of BTCC Awards Night 2019.
                        <br/>The aim of this awards night is to bring a level of competitiveness into new business startups and we also want to start recognising successful Tamil businesses in the UK
                    </p>

                    <h2>What you can Expect</h2>
                    <p>A unique event structure that promotes the personal and professional growth of young Tamil entrepreneurs.
                        <br/>A platform to recognise successful Tamil Businesses
                        <br/>Strong networking opportunities with hundreds of like-minded professionals
                        <br/>Supporting Tamil business startups with relevant industry knowledge and investment
                        <br/>Recognising people who worked for the betterment of Tamil Community
                    </p>


                    <h2>Why Compete?</h2>
                    <p>Gain recognition for your work and improve your business profile
                        <br/>Boost your morale by knowing what you are doing right
                        <br/>Compare yourself with the industry and understand what you are doing wrong
                        <br/>Share your knowledge with others and grow collectively
                        <br/>Improve your business by benchmarking successful businesses
                    </p>

                    <h2>Who Can Enter?</h2>

                    <p>Anyone who runs a business or aspire to run a business, from a Tamil origin can be nominated for the award.</p>


                    <h2>Key Dates</h2>
                    <ul>
                        <!--<li>01 August 2019 - Call for nominations</li>
                        <li>31 August 2019 - Nominations Close</li>
                        <li>21 September 2019 - Shortlist Announced</li>
                        <li>14 October 2019 - Investor Presentation</li>
                        <li>20 October 2019 - Online Voting Open</li>
                        <li>30 October 2019 - Online Voting Close</li>-->
                        
                        <li>01 November 2019 - Call for nominations</li>
                        <li>31 November 2019 - Nominations Close</li>
                        <li>21 December 2019 - Shortlist Announced</li>
                        <li>01 January 2020 - Online Voting Open</li>
                        <li>14 January 2020 - Online Voting Close</li>


                    </ul>
                </div>
                <div class="col-md-4">
                    <div class="project-image project-image-2">
                        <img style="border-radius: 50% !important;" class="img-responsive" src="/images/btcc_awards_night.jpg" alt="BTCC Awards Night">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 18, 2020 10:00:00").getTime();

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
