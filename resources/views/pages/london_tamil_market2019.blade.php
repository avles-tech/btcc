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
                        <p class="title-head">London Tamil Market - 2019</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('london_tamil_market') }}"> London Tamil Market</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market 2019</li>
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
                        @for($i=1; $i<=13; $i++)
                            <div>
                                <a href="/images/banners/5/img{{$i}}.jpg" data-lity="">
                                    <img class="img-responsive" style="width:200px !important;height:120px !important;" src="/images/banners/5/img{{$i}}.jpg" alt="">
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
            <iframe class="center-block" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FLondonTamilMarket%2Fvideos%2F2398069716927195%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
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

    <div class="container">
        <div class="row" style="margin-top: -95px;">
            <div class="col-md-8 col-md-offset-2 title">
                <br/><br/><br/>
                <h2>Official Event Partner</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="members/company/258" target="_blank">
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

                    <a href="members/company/288" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/288/mez.jpg" alt="Mez Construction">
                        </div>
                    </a>

                    <a href="members/company/272" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/272/ruby-400.jpg" alt="Ruby’s Catering">
                        </div>
                    </a>

                    <a href="members/company/98" data-lity="">
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
                <h2>Co-Sponsors</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="members/company/343" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/343/brown.png" alt="Spoton Money">
                        </div>
                    </a>

                    <a href="members/company/344" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/344/dvg.png" alt="DVG Star Publishing">
                        </div>
                    </a>

                    <a href="members/company/261" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/261/lyca-fly-400.jpg" alt="Lyca Fly">
                        </div>
                    </a>

                    <a href="members/company/266" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/266/lycatv.png" alt="Lyca TV">
                        </div>
                    </a>

                    <a href="members/company/267" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/267/lycaremit-400.jpg" alt="Lycaremit">
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
                <h2>Charity Partners</h2>
                <div class="title-border"></div>
            </div>
        </div>
        <div class="row m-space portfolio list">

            <div class="col-md-12 col-xs-6 mh" >
                <div class="logo-line text-center">
                    <a href="members/company/55" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/55/childfirst.jpg" alt="Child First">
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
                    <a href="members/company/84" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/84/ranjinas.jpg" alt="Ranjinas">
                        </div>
                    </a>

                    <a href="members/company/323" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/323/tamil-empire-400.jpg" alt="Tamil Empire">
                        </div>
                    </a>

                    <a href="members/company/362" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/362/york.jpg" alt="York Solicitors">
                        </div>
                    </a>

                    <a href="members/company/30" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/30/btm.png" alt="BTM International">
                        </div>
                    </a>

                    <a href="members/company/328" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/328/very-sure-400.jpg" alt="Verisure Smart Alarm">
                        </div>
                    </a>

                    <a href="members/company/390" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/390/de.jpg" alt="Dealdio">
                        </div>
                    </a>

                    <a href="members/company/280" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/280/sonthary.jpg" alt="Sounthary Silks">
                        </div>
                    </a>

                    <a href="members/company/364" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/364/cars.jpg" alt="Carsons Estate Agents">
                        </div>
                    </a>

                    <a href="members/company/365" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/365/aaa.jpg" alt="AA Designer Collections">
                        </div>
                    </a>

                    <a href="members/company/312" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/312/bbk-400.jpg" alt="BBK Partneership">
                        </div>
                    </a>

                    <a href="members/company/293" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/293/vk%20400.jpg" alt="VK Silks">
                        </div>
                    </a>

                    <a href="members/company/366" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/366/nila.jpg" alt="Nila Cards">
                        </div>
                    </a>

                    <a href="members/company/336" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/336/kanavu.jpg" alt="Kanavu Collections">
                        </div>
                    </a>

                    <a href="members/company/7" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/7/niru.jpg" alt="Niru Product">
                        </div>
                    </a>

                    <a href="members/company/367" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/367/watf.jpg" alt="Watford Notary Public">
                        </div>
                    </a>

                    <a href="members/company/27" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/27/vrddhi.png" alt="Vrddhi">
                        </div>
                    </a>

                    <a href="members/company/368" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/368/alpha.jpg" alt="Alphaa Constructions LTD">
                        </div>
                    </a>

                    <a href="members/company/369" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/369/somerset.jpg" alt="Somerset Financial Services Ltd">
                        </div>
                    </a>

                    <a href="members/company/9" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/9/cylon-400.jpg" alt="Ceylon Silks">
                        </div>
                    </a>

                    <a href="members/company/370" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/370/gofor.jpg" alt="Go for Veggies Ltd">
                        </div>
                    </a>

                    <a href="members/company/371" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/371/azha.jpg" alt="Azhagi">
                        </div>
                    </a>

                    <a href="members/company/372" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/372/jj.jpg" alt="J & J Design Sarees">
                        </div>
                    </a>

                    <a href="members/company/10" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/10/anr.jpg" alt="A & R Solicitors">
                        </div>
                    </a>

                    <a href="members/company/373" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/373/drinko.jpg" alt="Drinko Slush">
                        </div>
                    </a>

                    <a href="members/company/374" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/374/uni.jpg" alt="Unisnacks limited">
                        </div>
                    </a>

                    <a href="members/company/76" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/76/blueocean.jpg" alt="Blue Ocean">
                        </div>
                    </a>

                    <a href="members/company/292" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/292/shivi-400.jpg" alt="SHIVI Collections">
                        </div>
                    </a>

                    <a href="members/company/391" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/391/oviya.jpg" alt="Oviya Designer Saree">
                        </div>
                    </a>

                    <a href="members/company/375" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/375/sky.jpg" alt="Skybourne Travels">
                        </div>
                    </a>

                    <a href="members/company/92" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/92/stepon.png" alt="Stepon">
                        </div>
                    </a>

                    <a href="members/company/376" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/376/future.jpg" alt="Futture Homes">
                        </div>
                    </a>

                    <a href="members/company/392" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/392/madurandi.jpg" alt="Mudra Mehendi">
                        </div>
                    </a>

                    <a href="members/company/378" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/378/aspire.jpg" alt="Aspire Vehicle Services">
                        </div>
                    </a>

                    <a href="members/company/379" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/379/jafna.jpg" alt="Jaffna Real Estate">
                        </div>
                    </a>

                    <a href="members/company/277" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/277/pra.jpg" alt="PRAMMAS">
                        </div>
                    </a>

                    <a href="members/company/299" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/299/brown.jpg" alt="Brown Mermaids">
                        </div>
                    </a>

                    <a href="members/company/78" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/78/kronos.png" alt="Kronos">
                        </div>
                    </a>

                    <a href="members/company/380" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/380/cook.jpg" alt="Cookeesy">
                        </div>
                    </a>

                    <a href="members/company/356" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/356/vasanthara.jpg" alt="Vastraa Limited">
                        </div>
                    </a>

                    <a href="members/company/381" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/381/tamil.jpg" alt="Tamil Community Housing Association">
                        </div>
                    </a>

                    <a href="members/company/382" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/382/speedwayfinalweb-01.png" alt="Heavenly">
                        </div>
                    </a>

                    <a href="members/company/88" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/88/mia.jpg" alt="MIA Mortgage">
                        </div>
                    </a>

                    <a href="members/company/63" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/63/srikanth.jpg" alt="Sri Kanth & Co">
                        </div>
                    </a>

                    <a href="members/company/314" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/314/orhan-logo.png" alt="Orhan Sri Lanka UK ">
                        </div>
                    </a>

                    <a href="members/company/2" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/2/aea.jpg" alt="AdamEveApple">
                        </div>
                    </a>

                    <a href="members/company/386" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/386/miot.jpg" alt="MIOT">
                        </div>
                    </a>

                    <a href="members/company/393" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/393/wedding.jpg" alt="The Tamil Wedding">
                        </div>
                    </a>

                    <a href="members/company/274" data-lity="">
                        <div class="project-image">
                            <img src="/images/companies/274/jnl.png" alt="JNL">
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
                    <a href="{{ route('london-tamil-market-2018') }}" class="btn" style="width:100%;text-align: center;"><span>London Tamil Market - 2018</span></a>
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
