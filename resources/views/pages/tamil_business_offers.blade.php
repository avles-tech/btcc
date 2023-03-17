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
                        <p class="title-head">Tamil Business Offers</p>
                        <h6 style="margin-top:-19px; margin-bottom:19px;">Click on your favourite offer and print the offer to obtain them.</h6>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}"> Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tamil business offers</li>
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

    <!-- Header --
    <header id="sp2" class="center parallax-container dark" data-overlay="9">
        <div class="parallax"><img src="/images/discount.jpg" alt="Tamil Business Offers"></div>
        <div class="header-in">
            <div class="caption">
                <h5>All offers are under merchants conditions</h5>
                <h1>Tamil Business Offers</h1>
                <h6>Click on your favourite offer and print the offer to obtain them.</h6>
            </div>
            <img class="arrow" src="/images/arrow.svg" alt="Tamil Business Offers">
        </div>
    </header>-->

    <section>
        <div class="container-fluid no-max">
            <div class="row">
                <!-- Business offers -->
                <div class="col-md-12">

                    <div class="blog four-col">
                        <div class="blog-sizer"></div>
                        <div class="blog-item">
                            <div class="thumb1">
                                <a href="#">
                                    <img src="/images/noimage.jpg" alt="Tamil Business Offers - by company name">
                                </a>
                            </div>
                            <div class="article">
                                <span class="tag">Company Name</span>
                                <a href="#">
                                    <p>Offer starts: 10.10.2019<br/>Offer ends: 14.06.2019</p>
                                </a>
                                <p>Description</p>
                                <hr>
                                <a href="#" class="btn" onclick="VoucherPrint('/images/noimage.jpg'); return false;" style="border-color: red !important;"><span style="color:red !important;">Print offer</span></a>
                            </div>
                        </div>
                        <!-- end of item -->
                    </div>

                </div>
                <!--<div class="col-md-3 sidebar">
                    <div class="item">
                        <h3>Categories</h3>
                        <hr>
                        <ul class="list">
                            <li><a href="">Flight Deals</a></li>
                            <li><a href="">Clothing</a></li>
                            <li><a href="">Development</a></li>
                            <li><a href="">Lifestyle</a></li>
                            <li><a href="">Gadgets</a></li>
                            <li><a href="">Office Wear</a></li>
                            <li><a href="">SEO</a></li>
                            <li><a href="">Marketing</a></li>
                        </ul>
                    </div>
                </div>-->
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function VoucherSourcetoPrint(source) {
            return "<html><head><script>function step1(){\n" +
                "setTimeout('step2()', 10);}\n" +
                "function step2(){window.print();window.close()}\n" +
                "</scri" + "pt></head><body onload='step1()'>\n" +
                "<img src='" + source + "' /></body></html>";
        }
        function VoucherPrint(source) {
            Pagelink = "about:blank";
            var pwa = window.open(Pagelink, "_new");
            pwa.document.open();
            pwa.document.write(VoucherSourcetoPrint(source));
            pwa.document.close();
        }
    </script>

@endsection
@section('extra_script')
@endsection
