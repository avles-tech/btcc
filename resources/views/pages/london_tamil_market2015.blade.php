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
                        <p class="title-head">London Tamil Market - 2015</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('london_tamil_market') }}"> London Tamil Market</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market 2015</li>
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
                        @for($i=1; $i<=14; $i++)
                            <div>
                                <a href="/images/banners/1/img{{$i}}.jpg" data-lity="">
                                    <img class="img-responsive" style="width:200px !important;height:120px !important;" src="/images/banners/1/img{{$i}}.jpg" alt="">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logo Strip --
    <div id="c_logos" class="area grey center">
        <div class="container-fluid">
            <h5>Event Highlights</h5>
            <div class="row">
                <div class="col-md-12 slide">

                    @for($i=1; $i<=14; $i++)
                        <div>
                            <a href="/images/banners/1/img{{$i}}.jpg" data-lity="">
                                <img class="img-responsive" style="width:200px !important;height:120px !important;" src="/images/banners/1/img{{$i}}.jpg" alt="">
                            </a>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>-->

    <section class="halfarea">
        <div class="col-md-6 col-sm-3 imagearea" style="height: 540px;">
            <iframe class="center-block" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ftamiltradeshow%2Fvideos%2F886709891396526%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
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
                <div class="col-md-12 col-xs-6 mh" >
                    <div class="logo-line text-center">
                        <a  class="" href="/images/banners/4/lebara2.jpg" data-lity="">
                            <div class="project-image">
                                <img src="/images/banners/4/lebara2.jpg" alt="lebara">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Associate Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh">
                <div class="logo-line text-center">
                    <a href="/images/banners/4/accountancy.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/accountancy.jpg" alt="accountancy">
                        </div>
                    </a>
                    <a href="/images/banners/4/vanakkam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vanakkam.jpg" alt="vanakkam">
                        </div>
                    </a>
                    <a href="/images/banners/4/vettri.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vettri.jpg" alt="vettri">
                        </div>
                    </a>
                    <a href="/images/banners/4/saalai.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/saalai.jpg" alt="saalai">
                        </div>
                    </a>
                    <a href="/images/banners/4/sivasakthi.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sivasakthi.jpg" alt="sivasakthi">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Media Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">

                    <a href="/images/banners/4/gtv.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/gtv.jpg" alt="gtv">
                        </div>
                    </a>

                    <a href="/images/banners/4/ilc.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ilc.jpg" alt="ilc">
                        </div>
                    </a>

                    <a href="/images/banners/4/akaram.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/akaram.jpg" alt="akaram">
                        </div>
                    </a>

                    <a href="/images/banners/4/deepam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/deepam.jpg" alt="deepam">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Exhibitors</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh">
                <div class="logo-line text-center">

                    <a href="/images/banners/4/carlton.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/carlton.jpg" alt="carlton">
                        </div>
                    </a>

                    <a href="/images/banners/4/techcube.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/techcube.jpg" alt="techcube">
                        </div>
                    </a>

                    <a href="/images/banners/4/long.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/long.jpg" alt="long">
                        </div>
                    </a>

                    <a href="/images/banners/4/niru.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/niru.jpg" alt="niru">
                        </div>
                    </a>

                    <a href="/images/banners/4/cartec.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cartec.jpg" alt="cartec">
                        </div>
                    </a>

                    <a href="/images/banners/4/easyshipping.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/easyshipping.jpg" alt="easyshipping">
                        </div>
                    </a>

                    <a href="/images/banners/4/monextel.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/monextel.jpg" alt="monextel">
                        </div>
                    </a>

                    <a href="/images/banners/4/srikanth.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/srikanth.jpg" alt="srikanth">
                        </div>
                    </a>

                    <a href="/images/banners/4/btm.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/btm.jpg" alt="btm">
                        </div>
                    </a>

                    <a href="/images/banners/4/wilson.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/wilson.jpg" alt="wilson">
                        </div>
                    </a>

                    <a href="/images/banners/4/sakthi.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sakthi.jpg" alt="sakthi">
                        </div>
                    </a>

                    <a href="/images/banners/4/links.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/links.jpg" alt="links">
                        </div>
                    </a>

                    <a href="/images/banners/4/cnr.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cnr.jpg" alt="cnr">
                        </div>
                    </a>

                    <a href="/images/banners/4/orderfood.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/orderfood.jpg" alt="orderfood">
                        </div>
                    </a>

                    <a href="/images/banners/4/abarna.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/abarna.jpg" alt="abarna">
                        </div>
                    </a>

                    <a href="/images/banners/4/blueocean.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/blueocean.jpg" alt="blueocean">
                        </div>
                    </a>

                    <a href="/images/banners/4/bodiclinic.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/bodiclinic.jpg" alt="bodiclinic">
                        </div>
                    </a>

                    <a href="/images/banners/4/anglo.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/anglo.jpg" alt="anglo">
                        </div>
                    </a>

                    <a href="/images/banners/4/myta.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/myta.jpg" alt="myta">
                        </div>
                    </a>

                    <a href="/images/banners/4/amity.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/amity.jpg" alt="amity">
                        </div>
                    </a>

                    <a href="/images/banners/4/accidentcourtesy.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/accidentcourtesy.jpg" alt="accidentcourtesy">
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
                    <a href="{{ route('london-tamil-market-2016') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2016</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_script')
@endsection
