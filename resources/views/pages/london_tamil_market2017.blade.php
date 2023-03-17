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
                        <p class="title-head">London Tamil Market - 2017</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('london_tamil_market') }}"> London Tamil Market</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market 2017</li>
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
                                    <img class="img-responsive" style="width:200px !important;height:120px !important;" src="/images/banners/3/img{{$i}}.jpg" alt="">
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
            <iframe class="center-block" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ftamiltradeshow%2Fvideos%2F1457095534357956%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
        </div>
        <div class="container" style=" height: 540px;">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-6 col-sm-offset-4" style="margin-top:-95px;">
                    <h5>Visual Treat</h5>
                    <h2><i class="ion-ios-arrow-thin-left"></i> Official Event Trailer</h2>
                    <p>London Tamil Market 2017, London organised by British Tamil Chamber of Commerce on 8th and 9th of
                        April 2017. This is the third consecutive year and by far the most successful event of this sort.
                        This year saw a lot of young people's participation and many people embraced the idea of bringing
                        all the tamil business together under one roof.</p>
                    <p>Lebara is the title sponsor for this years event and there were over 100 business participated in
                        this tradeshow to showcase their business. We also had various stage events promoting our local
                        young tamil talents also recognised young tamil entrepreneurs on stage.</p>
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 title">
                <br/><br/><br/>
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

                    <a href="/images/banners/4/aachi.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/aachi.jpg" alt="aachi">
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
                    <a href="/images/banners/4/ibc.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ibc.jpg" alt="ibc">
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
                <h2>Official Event Caterers</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/images/banners/4/rubys2.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/rubys2.jpg" alt="rubys2">
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
                <h2>Associate Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/images/banners/4/accountancy.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/accountancy.jpg" alt="accountancy">
                        </div>
                    </a>

                    <a href="/images/banners/4/links.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/links.jpg" alt="links">
                        </div>
                    </a>

                    <a href="/images/banners/4/cartec.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cartec.jpg" alt="cartec">
                        </div>
                    </a>

                    <a href="/images/banners/4/long.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/long.jpg" alt="long">
                        </div>
                    </a>

                    <a href="/images/banners/4/jnl.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/jnl.jpg" alt="jnl">
                        </div>
                    </a>

                    <a href="/images/banners/4/conversation.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/conversation.jpg" alt="conversation">
                        </div>
                    </a>

                    <a href="/images/banners/4/berkeley.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/berkeley.jpg" alt="berkeley">
                        </div>
                    </a>

                    <a href="/images/banners/4/green.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/green.jpg" alt="green">
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
                <h2>Media Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">
            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="/images/banners/4/uyir.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/uyir.jpg" alt="uyir">
                        </div>
                    </a>


                    <a href="/images/banners/4/samakalam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/samakalam.jpg" alt="samakalam">
                        </div>
                    </a>

                    <a href="/images/banners/4/aea.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/aea.jpg" alt="aea">
                        </div>
                    </a>

                    <a href="/images/banners/4/vanakkam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vanakkam.jpg" alt="vanakkam">
                        </div>
                    </a>

                    <a href="/images/banners/4/stepon.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/stepon.jpg" alt="stepon">
                        </div>
                    </a>


                    <a href="/images/banners/4/deepam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/deepam.jpg" alt="deepam">
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
                    <a href="/images/banners/4/subara.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/subara.jpg" alt="subara">
                        </div>
                    </a>

                    <a href="/images/banners/4/btm.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/btm.jpg" alt="btm">
                        </div>
                    </a>

                    <a href="/images/banners/4/mia.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/mia.jpg" alt="mia">
                        </div>
                    </a>

                    <a href="/images/banners/4/blueocean.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/blueocean.jpg" alt="blueocean">
                        </div>
                    </a>

                    <a href="/images/banners/4/salad.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/salad.jpg" alt="salad">
                        </div>
                    </a>

                    <a href="/images/banners/4/easyshipping.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/easyshipping.jpg" alt="easyshipping">
                        </div>
                    </a>

                    <a href="/images/banners/4/greenfinch.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/greenfinch.jpg" alt="greenfinch">
                        </div>
                    </a>

                    <a href="/images/banners/4/silverline.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/silverline.jpg" alt="silverline">
                        </div>
                    </a>

                    <a href="/images/banners/4/anr.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/anr.jpg" alt="anr">
                        </div>
                    </a>

                    <a href="/images/banners/4/sugun.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sugun.jpg" alt="sugun">
                        </div>
                    </a>

                    <a href="/images/banners/4/ranjinas.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ranjinas.jpg" alt="ranjinas">
                        </div>
                    </a>

                    <a href="/images/banners/4/loukiya.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/loukiya.jpg" alt="loukiya">
                        </div>
                    </a>

                    <a href="/images/banners/4/ceylon.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ceylon.jpg" alt="ceylon">
                        </div>
                    </a>

                    <a href="/images/banners/4/vriddhi.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vriddhi.jpg" alt="vriddhi">
                        </div>
                    </a>

                    <a href="/images/banners/4/glenmore.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/glenmore.jpg" alt="glenmore">
                        </div>
                    </a>

                    <a href="/images/banners/4/krishna.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/krishna.jpg" alt="krishna">
                        </div>
                    </a>

                    <a href="/images/banners/4/digital.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/digital.jpg" alt="digital">
                        </div>
                    </a>

                    <a href="/images/banners/4/brown.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/brown.jpg" alt="brown">
                        </div>
                    </a>

                    <a href="/images/banners/4/sriram.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sriram.jpg" alt="sriram">
                        </div>
                    </a>

                    <a href="/images/banners/4/britannia.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/britannia.jpg" alt="britannia">
                        </div>
                    </a>

                    <a href="/images/banners/4/harleystreet.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/harleystreet.jpg" alt="harleystreet">
                        </div>
                    </a>

                    <a href="/images/banners/4/sakthi.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sakthi.jpg" alt="sakthi">
                        </div>
                    </a>

                    <a href="/images/banners/4/clicksri.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/clicksri.jpg" alt="clicksri">
                        </div>
                    </a>

                    <a href="/images/banners/4/visalam.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/visalam.jpg" alt="visalam">
                        </div>
                    </a>

                    <a href="/images/banners/4/lemonade.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/lemonade.jpg" alt="lemonade">
                        </div>
                    </a>

                    <a href="/images/banners/4/gocode.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/gocode.jpg" alt="gocode">
                        </div>
                    </a>

                    <a href="/images/banners/4/srikanth.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/srikanth.jpg" alt="srikanth">
                        </div>
                    </a>

                    <a href="/images/banners/4/arka.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/arka.jpg" alt="arka">
                        </div>
                    </a>

                    <a href="/images/banners/4/vibsu.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vibsu.jpg" alt="vibsu">
                        </div>
                    </a>

                    <a href="/images/banners/4/cisimoda.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cisimoda.jpg" alt="cisimoda">
                        </div>
                    </a>

                    <a href="/images/banners/4/vksilks.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vksilks.jpg" alt="vksilks">
                        </div>
                    </a>

                    <a href="/images/banners/4/rusha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/rusha.jpg" alt="rusha">
                        </div>
                    </a>

                    <a href="/images/banners/4/shriba.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/shriba.jpg" alt="shriba">
                        </div>
                    </a>

                    <a href="/images/banners/4/anish.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/anish.jpg" alt="anish">
                        </div>
                    </a>

                    <a href="/images/banners/4/sris.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sris.jpg" alt="sris">
                        </div>
                    </a>

                    <a href="/images/banners/4/malarum.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/malarum.jpg" alt="malarum">
                        </div>
                    </a>

                    <a href="/images/banners/4/jewelleryoptions.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/jewelleryoptions.jpg" alt="jewelleryoptions">
                        </div>
                    </a>

                    <a href="/images/banners/4/unavu.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/unavu.jpg" alt="unavu">
                        </div>
                    </a>

                    <a href="/images/banners/4/londonobesity.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/londonobesity.jpg" alt="londonobesity">
                        </div>
                    </a>

                    <a href="/images/banners/4/jerra.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/jerra.jpg" alt="jerra">
                        </div>
                    </a>

                    <a href="/images/banners/4/ienergy.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ienergy.jpg" alt="ienergy">
                        </div>
                    </a>

                    <a href="/images/banners/4/oritha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/oritha.jpg" alt="oritha">
                        </div>
                    </a>

                    <a href="/images/banners/4/gotravelyn.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/gotravelyn.jpg" alt="gotravelyn">
                        </div>
                    </a>

                    <a href="/images/banners/4/tile.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/tile.jpg" alt="tile">
                        </div>
                    </a>

                    <a href="/images/banners/4/gp.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/gp.jpg" alt="gp">
                        </div>
                    </a>

                    <a href="/images/banners/4/ammadio.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ammadio.jpg" alt="ammadio">
                        </div>
                    </a>

                    <a href="/images/banners/4/chithiram.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/chithiram.jpg" alt="chithiram">
                        </div>
                    </a>

                    <a href="/images/banners/4/sriaishvarya.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sriaishvarya.jpg" alt="sriaishvarya">
                        </div>
                    </a>

                    <a href="/images/banners/4/nava.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/nava.jpg" alt="nava">
                        </div>
                    </a>

                    <a href="/images/banners/4/ecologital.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/ecologital.jpg" alt="ecologital">
                        </div>
                    </a>

                    <a href="/images/banners/4/cks.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/cks.jpg" alt="cks">
                        </div>
                    </a>

                    <a href="/images/banners/4/nachiyar.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/nachiyar.jpg" alt="nachiyar">
                        </div>
                    </a>

                    <a href="/images/banners/4/maha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/maha.jpg" alt="maha">
                        </div>
                    </a>

                    <a href="/images/banners/4/thinesh.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/thinesh.jpg" alt="thinesh">
                        </div>
                    </a>

                    <a href="/images/banners/4/vesta.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/vesta.jpg" alt="vesta">
                        </div>
                    </a>

                    <a href="/images/banners/4/wilson.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/wilson.jpg" alt="wilson">
                        </div>
                    </a>

                    <a href="/images/banners/4/btsc.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/btsc.jpg" alt="btsc">
                        </div>
                    </a>

                    <a href="/images/banners/4/hariharan.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/hariharan.jpg" alt="hariharan">
                        </div>
                    </a>

                    <a href="/images/banners/4/sj.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/sj.jpg" alt="sj">
                        </div>
                    </a>

                    <a href="/images/banners/4/kamli.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/kamli.jpg" alt="kamli">
                        </div>
                    </a>

                    <a href="/images/banners/4/kesha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/kesha.jpg" alt="kesha">
                        </div>
                    </a>

                    <a href="/images/banners/4/dover.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/dover.jpg" alt="dover">
                        </div>
                    </a>

                    <a href="/images/banners/4/adlupa.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/adlupa.jpg" alt="adlupa">
                        </div>
                    </a>

                    <a href="/images/banners/4/tcha.jpg" data-lity="">
                        <div class="project-image">
                            <img src="/images/banners/4/tcha.jpg" alt="tcha">
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
