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
                        <p class="title-head">London Tamil Market - {{ env('LTM_YEAR') }}</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('london_tamil_market') }}"> London Tamil Market</a></li>
                                <li class="breadcrumb-item active" aria-current="page">London tamil market {{ env('LTM_YEAR') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <br/><br/>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('flash_success'))
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="alert alert-success icons-alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="icofont icofont-close-line-circled"></i>
                        </button>
                        <p><i class="fa fa-check-circle"></i> <strong>Success!!</strong> {!!   session('flash_success') !!}</p>
                    </div>
                </div>
            @endif
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-bg">
        </div>
    </div>

    <section id="c_contact">
        <div class="container">
            <div class="row">

                <canvas id='myCanvas'></canvas>

                <div class="col-md-12" style="position: relative;">
                    <img style="position: relative !important; min-width:1063px !important; max-width:1063px !important; min-height:1149px !important; max-height:1149px !important;" id="LTMfloorMap" src="{{ asset('images/ltm_map_2023.jpeg') }}" width="1063" height="1149" alt="London Tamil Market 2023" usemap="#ltmFloorMap">

                    <map name="ltmFloorMap">

                        @foreach($stalls AS $k => $stall)
                        <area
                            alt="London Tamil Market 2023"
                            title="@if($stall['organisation_name']!="") {{ $stall['organisation_name'] }} @else {{ $stall['stall_name'].' (&pound;'.$stall['member_price'].' | &pound;' .$stall['non_member_price'] .') : '.$stall['status'] }} @endif"
                            @if($stall['status'] == "Available") href="{{ url('/bookings/london-tamil-market/'.base64_encode($stall['id'])) }}" @else href="#" @endif
                            shape="{{ $stall['shape'] }}"
                            coords="{{ $stall['coordinates'] }}"
                            onmouseover="myHover(this);"
                            onmouseout="myLeave();"
                            class="canvas-booked"
                        />
                        @endforeach
                    </map>
                    @foreach($stalls AS $k => $stall)
                        @if($stall['status'] == "Booked")
                            <img style="position: absolute;left: {{ explode(",", $stall['coordinates'])[0] + 18 }}px;top: {{ explode(",", $stall['coordinates'])[1] + 14 }}px;z-index:100;" src="{{ asset('images/booked.png') }}"/>
                        @elseif($stall['status'] == "Reserved")
                            <img style="position: absolute;left: {{ explode(",", $stall['coordinates'])[0] + 18 }}px;top: {{ explode(",", $stall['coordinates'])[1] + 14 }}px;z-index:100;" src="{{ asset('images/reserved.png') }}"/>
                        @elseif($stall['status'] == "On-Progress")
                            <img style="position: absolute;left: {{ explode(",", $stall['coordinates'])[0] + 18 }}px;top: {{ explode(",", $stall['coordinates'])[1] + 14 }}px;z-index:100;" src="{{ asset('images/on-progress.png') }}"/>
                    @endif

                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        canvas
        {
            pointer-events: none;       /* make the canvas transparent to the mouse - needed since canvas is position infront of image */
            position: absolute;
        }
        .ltm-stall-available{
            z-index: 10000;
        }
        .ltm-stall-booked{
            position: absolute;
            margin-left: 2px;
            margin-top: 2px;
            z-index: 10000;
            background-image: url("{{ asset('images/booked.png') }}");
        }
        .ltm-stall-reserved{
            position: absolute;
            margin-left: 2px;
            margin-top: 2px;
            z-index: 10000;
            background-image: url("{{ asset('images/reserved.png') }}");
        }
        .ltm-stall-on-progress{
            position: absolute;
            margin-left: 2px;
            margin-top: 2px;
            z-index: 10000;
            background-image: url("{{ asset('images/on-progress.png') }}");
        }
    </style>

    <script>

        // stores the device context of the canvas we use to draw the outlines
        // initialized in myInit, used in myHover and myLeave
        var hdc;

        // shorthand func
        function byId(e){return document.getElementById(e);}

        // takes a string that contains coords eg - "227,307,261,309, 339,354, 328,371, 240,331"
        // draws a line from each co-ord pair to the next - assumes starting point needs to be repeated as ending point.
        function drawPoly(coOrdStr)
        {
            var mCoords = coOrdStr.split(',');
            var i, n;
            n = mCoords.length;

            hdc.beginPath();
            hdc.moveTo(mCoords[0], mCoords[1]);
            for (i=2; i<n; i+=2)
            {
                hdc.lineTo(mCoords[i], mCoords[i+1]);
            }
            hdc.lineTo(mCoords[0], mCoords[1]);
            hdc.stroke();
        }
        function drawRect(coOrdStr)
        {
            var mCoords = coOrdStr.split(',');
            var top, left, bot, right;
            left = mCoords[0];
            top = mCoords[1];
            right = mCoords[2];
            bot = mCoords[3];
            hdc.strokeRect(left,top,right-left,bot-top);
        }

        function myHover(element)
        {
            var hoveredElement = element;
            var coordStr = element.getAttribute('coords');
            var areaType = element.getAttribute('shape');

            switch (areaType)
            {
                case 'polygon':
                case 'poly':
                    drawPoly(coordStr);
                    break;

                case 'rect':
                    drawRect(coordStr);
            }
        }

        function myLeave()
        {
            var canvas = byId('myCanvas');
            hdc.clearRect(0, 0, canvas.width, canvas.height);
        }

        function myInit()
        {
            // get the target image
            var img = byId('LTMfloorMap');

            var x,y, w,h;

            // get it's position and width+height
            x = img.offsetLeft;
            y = img.offsetTop;
            w = img.clientWidth;
            h = img.clientHeight;

            // move the canvas, so it's contained by the same parent as the image
            var imgParent = img.parentNode;
            var can = byId('myCanvas');
            imgParent.appendChild(can);

            // place the canvas in front of the image
            can.style.zIndex = 1;

            // position it over the image
            can.style.left = x+'px';
            can.style.top = y+'px';

            // make same size as the image
            can.setAttribute('width', w+'px');
            can.setAttribute('height', h+'px');

            // get it's context
            hdc = can.getContext('2d');

            // set the 'default' values for the colour/width of fill/stroke operations
            hdc.fillStyle = 'teal';
            hdc.strokeStyle = 'teal';
            hdc.shadowBlur=5;
            hdc.shadowColor = 'green';
            hdc.lineWidth = 2;
        }

        window.onload = myInit;

    </script>


@endsection
@section('extra_script')
@endsection
