<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">
<head>
    <!-- meta character set -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="language" content="en">
    <meta name="robots" content="index,follow,all" />
    <!-- Author Meta -->
    <meta name="Author" content="BTCC" />
    <meta name="HandheldFriendly" content="True">
    <!-- Site Title -->
    <title>{{ isset($page_title) ? $page_title : 'BTCC' }}</title>
    <meta name="description" content="{{isset($description) ? $description : 'British Tamil Chamber of Commerce'}}">
    <meta name="keywords" content="{{isset($keywords) ? $keywords : 'British Tamil Chamber of Commerce'}}" />
    <meta name="abstract" content="{{isset($abstract) ? $abstract : 'British Tamil Chamber of Commerce'}}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Poppins:300,400,500,600" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="/vendor/reset.css">
    <link rel="stylesheet" href="/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/ion-icons/ionicons.min.css">
    <link rel="stylesheet" href="/vendor/owl-slider/owl.carousel.css">
    <link rel="stylesheet" href="/vendor/slideshow/slideshow.css">
    <link rel="stylesheet" href="/vendor/lightbox/lity.min.css">
    <!-- Theme CSS -->
    <link id="theme" rel="stylesheet" href="/css/theme4.css?v=1">
    <link id="theme" rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/customize.css">
    <script src="/vendor/modernizr.js"></script>
    <script type="text/javascript">
        GLBL_URL = '/';
    </script>

    <link type="text/css" rel="stylesheet" href="/plugins/jquery.validationEngine/validationEngine.jquery.css">
    <link type="text/css" rel="stylesheet" href="/css/application.css">
    <link rel="stylesheet" href="{{ asset('/css/jquery.cookiebar.css') }}">
@yield('extra_css')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-105692926-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-105692926-1');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '385210678953863');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=385210678953863&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
<!-- Scroll up -->
<div class="scrollup">
    <i class="ion-ios-arrow-up"></i>
</div>
@include('includes.nav_bar')
@yield('content')
@include('includes.footer')
@yield('extra_script')
</body>
</html>
