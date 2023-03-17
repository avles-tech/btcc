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
                        <p class="title-head">London Tamil Market - 2018</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('london_tamil_market') }}"> London Tamil Market</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market 2018</li>
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


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <br/><br/><br/>
                <h2>Official Event Partner</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/members/company/258" target="_blank">
                        <div class="project-image">
                            <img src="/images/companies/258/lyca-group.png" alt="Lyca Group">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Sponsors</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/members/company/288" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/288/mez.jpg" alt="Mez Construction">
                        </div>
                    </a>
                    <a href="/members/company/275" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/275/jura.png" alt="Jura Products">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Co-Sponsors</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">

                    <a href="/members/company/266" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/266/lycatv.png" alt="Lyca TV">
                        </div>
                    </a>

                    <a href="/members/company/259" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/259/lyca-mobile.jpg" alt="Lyca Mobile">
                        </div>
                    </a>

                    <a href="/members/company/261" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/261/lyca-fly-400.jpg" alt="Lyca Fly">
                        </div>
                    </a>

                    <a href="/members/company/29" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/29/brown2.jpg" alt="Accountancy Group">
                        </div>
                    </a>

                    <a href="/members/company/72" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/72/dover.jpg" alt="Dover Marina Hotel & Spa">
                        </div>
                    </a>

                    <a href="/members/company/308" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/308/anj-400.jpg" alt="ANJ Print">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Official Media Partner</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/members/company/98" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/98/ibc.jpg" alt="IBC Tamil">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Official Event Caterers</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/members/company/97" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/97/rubys2.jpg" alt="Ruby's">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Stage Performance Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/members/company/92" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/92/stepon.png" alt="Stepon">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Associate Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">

                    <a href="/members/company/274" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/274/jnl.png" alt="JNL">
                        </div>
                    </a>

                    <a href="/members/company/16" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/16/cartec.jpg" alt="Cartec Graphics">
                        </div>
                    </a>

                    <a href="/members/company/4" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/4/berkeley.jpg" alt="berkeley private wealth">
                        </div>
                    </a>

                    <a href="/members/company/96" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/96/links-legal.png" alt="Links Legal">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <h2>Charity Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">

                    <a href="/members/company/319" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/319/wwat-400.jpg" alt="World Wide Awareness Trust">
                        </div>
                    </a>

                    <a href="/members/company/270" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/270/utha.png" alt="United Trust For Humanitarian Aid">
                        </div>
                    </a>

                    <a href="/members/company/271" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/271/data.jpg" alt="Tamil Para Sports">
                        </div>
                    </a>

                    <a href="/members/company/55" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/55/childfirst.jpg" alt="Child First">
                        </div>
                    </a>

                    <a href="/members/company/19" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/19/tile.png" alt="Tamil Institute for Leadership Excellence">
                        </div>
                    </a>

                    <a href="/members/company/48" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/48/serendib.png" alt="Serendip">
                        </div>
                    </a>

                    <a href="/members/company/255" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/255/building-youths-logo.jpg" alt="Building Youths">
                        </div>
                    </a>

                    <a href="/members/company/306" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/306/ksc-400.jpg" alt="Koddaimunai Sports Club">
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
                    <a href="/members/company/91" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/91/deepam.jpg" alt="Deepam">
                        </div>
                    </a>

                    <a href="/members/company/329" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/329/tamil-dip-400.jpg" alt="Samakalam and Tamil Diplomat ">
                        </div>
                    </a>

                    <a href="/members/company/263" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/263/athavan-radio.jpg" alt="Athavan Radio">
                        </div>
                    </a>

                    <a href="/members/company/264" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/264/athavan-news.jpg" alt="Athavan News">
                        </div>
                    </a>

                    <a href="/members/company/265" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/265/athavan-tv.jpg" alt="Athavan TV">
                        </div>
                    </a>

                    <a href="/members/company/36" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/36/ilc.jpg" alt="ILC">
                        </div>
                    </a>

                    <a href="/members/company/90" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/90/athirvu-400.jpg" alt="Athirvu">
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

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/members/company/30" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/30/btm.png" alt="BTM International">
                        </div>
                    </a>

                    <a href="/members/company/295" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/295/radio-matrix-400.jpg" alt="Radiometrix Ltd ">
                        </div>
                    </a>

                    <a href="/members/company/317" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/317/longlek-400.jpg" alt="LONGTEK">
                        </div>
                    </a>

                    <a href="/members/company/312" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/312/bbk-400.jpg" alt="BBK Partneership">
                        </div>
                    </a>

                    <a href="/members/company/293" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/293/vk%20400.jpg" alt="VK Silks">
                        </div>
                    </a>

                    <a href="/members/company/318" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/318/catereach-400.jpg" alt="Cate Reach">
                        </div>
                    </a>

                    <a href="/members/company/12" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/12/shriba.jpg" alt="Shriba ltd">
                        </div>
                    </a>


                    <a href="/members/company/123" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/123/valentine-400.jpg" alt="Valentine">
                        </div>
                    </a>

                    <a href="/members/company/60" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/60/cks-400.jpg" alt="CKS Saree">
                        </div>
                    </a>

                    <a href="/members/company/27" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/27/vrddhi.png" alt="Vrddhi">
                        </div>
                    </a>

                    <a href="/members/company/292" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/292/shivi-400.jpg" alt="SHIVI Collections">
                        </div>
                    </a>

                    <a href="/members/company/305" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/305/sheya-400.jpg" alt="Sheya Distributions LTD">
                        </div>
                    </a>

                    <a href="/members/company/76" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/76/blueocean.jpg" alt="Blue Ocean">
                        </div>
                    </a>

                    <a href="/members/company/313" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/313/eighty-400.jpg" alt="Eighty Investments">
                        </div>
                    </a>

                    <a href="/members/company/254" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/254/utpp-400.jpg" alt="UTPPALAKSHI">
                        </div>
                    </a>

                    <a href="/members/company/287" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/287/ic.jpg" alt="IC Training Centre">
                        </div>
                    </a>

                    <a href="/members/company/9" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/9/cylon-400.jpg" alt="Ceylon Silks">
                        </div>
                    </a>

                    <a href="/members/company/10" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/10/anr.jpg" alt="A & R Solicitors">
                        </div>
                    </a>

                    <a href="/members/company/15" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/15/kkr-logo.jpg" alt="KKR Planning and Design LTD">
                        </div>
                    </a>

                    <a href="/members/company/82" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/82/cnr.jpg" alt="CNR Security">
                        </div>
                    </a>

                    <a href="/members/company/22" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/22/beauty.jpg" alt="Beauty Complex">
                        </div>
                    </a>

                    <a href="/members/company/280" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/280/sonthary.jpg" alt="Sounthary Silks">
                        </div>
                    </a>

                    <a href="/members/company/320" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/320/lis-400.jpg" alt="The London Interactive school">
                        </div>
                    </a>

                    <a href="/members/company/321" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/321/bill-400.jpg" alt="Billman Ltd">
                        </div>
                    </a>

                    <a href="/members/company/322" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/322/isha-400.jpg" alt="Isha Foundation">
                        </div>
                    </a>

                    <a href="/members/company/45" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/45/clicksri.jpg" alt="CLICKSRI">
                        </div>
                    </a>

                    <a href="/members/company/323" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/323/tamil-empire-400.jpg" alt="Tamil Empire">
                        </div>
                    </a>

                    <a href="/members/company/63" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/63/srikanth.jpg" alt="Sri Kanth & Co">
                        </div>
                    </a>

                    <a href="/members/company/286" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/286/tamil-web-ad.jpg" alt="TamilWebAd">
                        </div>
                    </a>

                    <a href="/members/company/291" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/291/sona.jpg" alt="Sona Tours">
                        </div>
                    </a>

                    <a href="/members/company/296" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/296/nehanaa.jpg" alt=" Nehanaa Bridal & Beauty Services">
                        </div>
                    </a>

                    <a href="/members/company/324" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/324/emo-400.jpg" alt="Emotional Wellness Clinic">
                        </div>
                    </a>

                    <a href="/members/company/325" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/325/autumn-400.jpg" alt="Autumn By Shanthi">
                        </div>
                    </a>

                    <a href="/members/company/326" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/326/goran-400.jpg" alt="Goran Gates (UK) Ltd">
                        </div>
                    </a>

                    <a href="/members/company/49" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/49/tamil.jpg" alt="Tamil Housing">
                        </div>
                    </a>

                    <a href="/members/company/327" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/327/jenthy-400.jpg" alt="Jenthy Arjun Designer Collections">
                        </div>
                    </a>

                    <a href="/members/company/278" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/278/thulasi.jpg" alt="Thulasi Henna Art">
                        </div>
                    </a>

                    <a href="/members/company/328" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/328/very-sure-400.jpg" alt="Verisure Smart Alarm">
                        </div>
                    </a>

                    <a href="/members/company/71" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/71/go-400.jpg" alt="Gocode">
                        </div>
                    </a>

                    <a href="/members/company/316" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/316/miot-400.jpg" alt="MEDICAL INSTITUTE OF TAMILS">
                        </div>
                    </a>

                    <a href="/members/company/315" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/315/svm-400.jpg" alt="SVM International Ltd">
                        </div>
                    </a>

                    <a href="/members/company/256" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/256/owl.png" alt="Loyalty Financial Consultancy">
                        </div>
                    </a>

                    <a href="/members/company/88" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/88/mia.jpg" alt="MIA Mortgage">
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
                    <a href="{{ route('london-tamil-market-2017') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2017</span></a>
                </div>
                <div class="col-md-4 col-xs-6 mh">
                    <a href="{{ route('london-tamil-market-2016') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2016</span></a>
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
