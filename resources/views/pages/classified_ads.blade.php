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
                        <p class="title-head">{{ $classified_ad_type->title }}</p>
                        <h6 style="margin-top:-19px; margin-bottom:19px;">Click on your favourite {{ ($classified_ad_type->title) }} and check for more details &amp; print.</h6>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}"> Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $classified_ad_type->title }}</li>
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

    <section>
        <div class="container-fluid no-max">
            <div class="row">
                <!-- Business offers -->
                <div class="col-md-12">

                    @if(count($classified_ads)==0)
                        <h3>There are no any ads for this category at this moment!</h3>
                    @else
                        @foreach($classified_ads AS $k => $classified_ad)
                                <div class="blog four-col">
                                    <div class="blog-sizer"></div>
                                    <div class="blog-item">
                                        <div class="thumb1">
                                            <a href="#">
                                                <img src="{{ Voyager::image($classified_ad->image) }}" alt="BTCC - {{ $classified_ad_type->title }}">
                                            </a>
                                        </div>
                                        <div class="article">
                                            <span class="tag">{{ $classified_ad->business->business_name }}</span>
                                            <h4>{{ $classified_ad->title }}</h4>
                                            <a href="#">
                                                <p>Starts from: {{ $classified_ad->from }}<br/>Ends on: {{ $classified_ad->to }}</p>
                                            </a>
                                            <hr>
                                            <a href="{{ url('classified_ads/'. $classified_ad->business->slug .'/'. $classified_ad->slug ) }}" class="btn" style="border-color: teal !important;"><span style="color:teal !important;">View More</span></a>
                                        </div>
                                    </div>
                                    <!-- end of item -->
                                </div>
                        @endforeach
                    @endif
                </div>
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
