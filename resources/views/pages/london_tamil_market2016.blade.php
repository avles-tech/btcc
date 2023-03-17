@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
    <style>
        .logo-line a{
            display: inline-block !important;
            padding: -58px !important;
            margin-top:-15px !important;
        }
        .logo-line img{
            width:100% !important;
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
                        <p class="title-head">London Tamil Market - 2016</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('london_tamil_market') }}"> London Tamil Market</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market 2016</li>
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

    <!-- Gallery -->
    <section id="gallery_owl" class="gallery no-lr-pad">
        <div class="container-fluid no-pad">
            <div class="row">
                <div class="col col-md-6 col-md-offset-3 title">
                    <h2>EVENT HIGHLIGHTS</h2>
                    <div class="title-border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 slide">
                    <div class="center-loop-fade">
                        @for($i=1; $i<=16; $i++)
                            <div>
                                <a href="/images/banners/1/img{{$i}}.jpg" data-lity="">
                                    <img class="img-responsive" style="width:200px !important;height:120px !important;" src="/images/banners/2/img{{$i}}.jpg" alt="">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="halfarea">
        <div class="col-md-6 col-sm-3 imagearea" style="height: 540px;">
            <iframe class="center-block" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fnachiyareventslondon%2Fvideos%2F1686852924896193%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
        <div class="container" style="height: 540px;">
            <div class="row">
                <div class="col-md-5 col-sm-8 col-md-offset-7 col-sm-offset-4">
                    <h5>Visual Treat</h5>
                    <h2>Official Event Trailer</h2>
                </div>
            </div>
        </div>
    </section>

    <section style="margin-top: -155px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 title">
                    <h2>Official Event Partner</h2>
                    <div class="title-border"></div>
                </div>
            </div>
            <div class="row m-space portfolio list">

                <div class="col-md-12 col-xs-6 mh">
                    <div class="logo-line text-center">
                        <a href="/images/banners/4/lebara.jpg" data-lity="">
                            <div class="project-image">
                                <img src="/images/banners/4/lebara.jpg" alt="lebara">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Main Sponsors</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/images/banners/4/carlton.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/carlton.jpg" alt="carlton">
                        </div>
                    </a>

                    <a href="/images/banners/4/rubys.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/rubys.jpg" alt="rubys">
                        </div>
                    </a>

                    <a href="/images/banners/4/links.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/links.jpg" alt="links">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <br/><br/><br/>
                <h2>Official Media Partner</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/images/banners/4/ilc.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ilc.jpg" alt="ilc">
                        </div>
                    </a>

                    <a href="/images/banners/4/samakalam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/samakalam.jpg" alt="samakalam">
                        </div>
                    </a>

                    <a href="/images/banners/4/vanakkam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vanakkam.jpg" alt="vanakkam">
                        </div>
                    </a>

                    <a href="/images/banners/4/akaram.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/akaram.jpg" alt="akaram">
                        </div>
                    </a>

                    <a href="/images/banners/4/athirvu.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/athirvu.jpg" alt="athirvu">
                        </div>
                    </a>

                    <a href="/images/banners/4/thamarai.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/thamarai.jpg" alt="thamarai">
                        </div>
                    </a>

                    <a href="/images/banners/4/thayagam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/thayagam.jpg" alt="thayagam">
                        </div>
                    </a>

                    <a href="/images/banners/4/tamildiplomat.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/tamildiplomat.jpg" alt="tamildiplomat">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <br/><br/><br/>
                <h2>Exhibitors</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/images/banners/4/mia.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/mia.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/accountancy.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/accountancy.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/blueocean.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/blueocean.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/salad.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/salad.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/sugun.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sugun.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/ceylon.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ceylon.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/monex.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/monex.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/monextel.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/monextel.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/mia.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/mia.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/aea.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/aea.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/franco.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/franco.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/krishna.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/krishna.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/cartec.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cartec.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/rsprinters.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/rsprinters.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/tgl.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/tgl.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/techcube.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/techcube.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/cnr.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cnr.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/srikanth.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/srikanth.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/conversation.jpg.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/conversation.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/ayur.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ayur.jpg" alt="">
                        </div>
                    </a>


                    <a href="/images/banners/4/utha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/utha.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/vksilks.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vksilks.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/bonauk.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/bonauk.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/wilson.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/wilson.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/sris.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sris.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/singify.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/singify.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/poobalasingham.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/poobalasingham.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/tsl.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/tsl.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/tcha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/tcha.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/ienergy.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ienergy.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/uktsi.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/uktsi.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/golden.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/golden.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/sriaishvarya.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sriaishvarya.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/uaexchange.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/uaexchange.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/abra.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/abra.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/serendip.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/serendip.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/ecologital.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ecologital.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/cks.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cks.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/berkeley.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/berkeley.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/oritha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/oritha.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/jnl.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/jnl.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/silverline.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/silverline.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/mia.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/mia.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/ranjinas.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ranjinas.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/primehealth.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/primehealth.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/childfirst.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/childfirst.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/vesta.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vesta.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/btsc.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/btsc.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/adlupa.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/adlupa.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/newwave.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/newwave.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/shopkonnect.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/shopkonnect.jpg" alt="">
                        </div>
                    </a>

                    <a href="/images/banners/4/lankasriconnect.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/lankasriconnect.jpg" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
                <div class="col-md-4 col-xs-6 col-md-offset-4 mh">
                    <a href="{{ route('london-tamil-market-2015') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2015</span></a>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('extra_script')
@endsection
