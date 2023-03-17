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
                        <h1>{{ $classified_ad_type->title }} - {{ $classified_ad->title }}</h1>
                        <h5 style="margin-top:-19px; margin-bottom:19px;">
                            by {{ $classified_ad->business->business_name }}
                        </h5>
                        <h6 style="margin-top:-19px; margin-bottom:19px;"><i class="fa fa-eye"  style="color: #d9d9d9;"></i> Total Views - {{ $classified_ad->views }}</h6>

                        <h5>
                            <a href="#" class="btn" onclick="VoucherPrint({{ Voyager::image($classified_ad->image) }}); return false;" style="float:right;border-color: red !important;"><span style="color:red !important;">Print This</span></a>
                        </h5>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('services') }}"> Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $classified_ad_type->title }}</li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $classified_ad->title }}</li>
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
                <div class="col-md-9">
                    <div class="blog one-col">
                        <div class="blog-sizer"></div>
                        <div class="blog-item">
                            <div class="thumb1">
                                <a href="#">
                                    <img src="{{ Voyager::image($classified_ad->image) }}" alt="BTCC - {{ $classified_ad_type->title }}">
                                </a>
                            </div>
                            <div class="article">
                                <span class="tag">{{ $classified_ad->business->business_name }}</span>
                                <a href="#">
                                    <p>Starts from: {{ $classified_ad->from }}<br/>Ends on: {{ $classified_ad->to }}</p>
                                </a>
                                <hr>
                                {!! $classified_ad->description !!}
                            </div>
                        </div>
                        <!-- end of item -->
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget grey">
                        <h3>Similar Ads</h3>

                        @foreach($classified_ads AS $k => $classified_ad)
                            <div class="news-item short move-reduce">
                                <div class="article-short" style="padding: 15px 0 15px 70px !important;">
                                    <div class="user-pic-2">
                                        <img src="{{ Voyager::image($classified_ad->image) }}" alt="BTCC - Classified ads - {{ $classified_ad->title }}">
                                    </div>
                                    <a href="{{ url('classified_ads/'. $classified_ad->business->slug .'/'. $classified_ad->slug ) }}">
                                        <h5 class="comname">{{ $classified_ad->title }}</h5>
                                    </a>
                                </div>
                                <span class="tag-3"><i class="fa fa-eye" style="color: white;"></i> {{ $classified_ad->views }}</span>
                            </div>
                        @endforeach

                    </div>
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
