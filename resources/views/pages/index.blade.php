@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')
    <!-- Preloader -->
    <div id="preloader">
        <div class="wrapper">
            <div class="cssload-loader"></div>
        </div>
    </div>

    <!-- Header -->
    <header id="agency2" class="dark1">
        <video autoplay muted loop poster="" id="bgvid" style="background-image:url(/images/btcc-home-banner.jpg)">
        </video>
        <div class="header-in">
            <div class="caption center">
                <img src="/images/logo-middle.png" alt="">
                <h1>Unite &amp; Excel</h1>
                <h2>ஒன்றிணைந்து உயர்வோம்</h2>
                <br/><br/>
                <a class="slider-btn" href=" {{ route('register') }}"></i> <i class="fa fa-handshake-o" style="color: gray"></i> Join BTCC&nbsp;&nbsp;&nbsp;</a>
                <!--<a class="slider-btn-2" href="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FLondonTamilMarket%2Fvideos%2F2398069716927195%2F&show_text=0&width=560" data-lity><i class="fa fa-play" style="color: #535353"></i> &nbsp;Latest Event</a>-->
                <!--<a class="slider-btn-2" href="{{ url('uk/tamil-heritage-month') }}"><i class="fa fa-play" style="color: #535353"></i> &nbsp;Latest Event</a>-->
                <a class="slider-btn-2" href="{{ url('london-tamil-market-2023') }}"><i class="fa fa-play" style="color: #535353"></i>&nbsp;London Tamil Market 2023</a>
            </div>
            <img class="arrow" src="{{ asset('images/arrow.svg')}}" alt="arrow">
        </div>
    </header>


    <section class="iconblock center  slider-left" style="background: #67738d">
        <div class="web-in container-line ">
            <div class="row m-space portfolio list">
                <div class="col-md-2 col-xs-6 mh tooltip">
                    <a href="{{ route('advice') }}">
                        <div class="service-card-image">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <div class="project-image pro-img">
                                <img src="/images/services/advice.jpg" />
                            </div>
                        </div>
                    </a>
                    <div class="tooltiptext"><b>ADVICE</b><hr class="border-line" />Business Start-ups, Legal, Accounting tax , IT and many more…</div>
                </div>

                <div class="col-md-2 col-xs-6 mh tooltip">
                    <a href="{{ route('introduction') }}">
                        <div class="service-card-image">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <div class="project-image pro-img">
                                <img src="/images/services/introduction.jpg" alt="Introduction">
                            </div>
                        </div>
                    </a>
                    <div class="tooltiptext"><b>INTRODUCTION</b><hr class="border-line" />via Networking, Events, E-Marketing, Business Directories &amp; Direct meeting</div>
                </div>


                <div class="col-md-2 col-xs-6 mh tooltip">
                    <a href="{{ url('classified-ads/tamil-business-offers') }}">
                        <div class="service-card-image">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <div class="project-image pro-img">
                                <img src="/images/services/iadvertisement.jpg" alt="Advertisement">
                            </div>
                        </div>
                    </a>
                    <div class="tooltiptext"><b>ADVERTISEMENT</b><hr class="border-line" />Free &amp; paid ADS within the membership &amp; community</div>
                </div>
                <div class="col-md-2 col-xs-6 mh tooltip">
                    <a href="{{ route('investment') }}">
                        <div class="service-card-image">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <div class="project-image pro-img">
                                <img src="/images/services/investment.jpg" alt="Investment">
                            </div>
                        </div>
                    </a>
                    <div class="tooltiptext"><b>INVESTMENT</b><hr class="border-line" />Opportunities &amp; business for sales &amp; purchases.</div>
                </div>
                <div class="col-md-2 col-xs-6 mh tooltip">
                    <a href="{{ route('government') }}">
                        <div class="service-card-image">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <div class="project-image pro-img">
                                <img src="/images/services/government.jpg" alt="Government Connection">
                            </div>
                        </div>
                    </a>
                    <div class="tooltiptext"><b>GOVERNMENT</b><hr class="border-line" />Representation to the local &amp; central.</div>
                </div>
                <div class="col-md-2 col-xs-6 mh tooltip">
                    <a href="{{ url('classified-ads/jobs') }}">
                        <div class="service-card-image">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <div class="project-image pro-img">
                                <img src="/images/services/job.jpg" alt="Job Portal">
                            </div>
                        </div>
                    </a>
                    <div class="tooltiptext"><b>JOB PORTAL</b><hr class="border-line" />Job opportunities &amp; employee searching.</div>
                </div>
                <!-- end of item -->
            </div>
        </div>
    </section>

    <section class="iconblock grey" >
        <div class="container ">
            <div class="row" style="margin-top: -15px;">
                <div class="col col-md-8">
                    <h2 class="text-uppercase">British Tamil Chamber of Commerce Welcomes You</h2>
                    <div class="title-border"></div>
                    <h6>In the modern day globally-competitive business world, every business organization
                        requires assistance, guidance and collective-strength to enter, establish, grow and
                        sustain in any market. We provide marketing opportunities, advices, information, networking,
                        guidance on financial, legal, Tax, HR, IT and various other relevant topics, Job Portal and
                        professional services.</h6>
                    <a href="/signup" class="btnnn uza-btn-2"><span>Join us today &nbsp;<i class="ion-android-person-add"></i></span></a>
                </div>
                <div class="col-md-4">
                    <a href="/london-tamil-market">
                        <div class="project-image project-image-2">
                            <img class="img-responsive" src="/images/join-us.jpg" alt="Join with BTCC">
                        </div>
                        <div class="project-info">
                            <h3 class="center get-btn">Gateway to Professional Networking!</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="dark1" style="background-image:url(images/image5.png)">
        <div class="container">
            <div class="row">
                <div class="col-md-12 title-with-button">
                    <a style="margin-left: 4px;" href="{{ url('posts/news') }}" class="btn uza-btn-3"><span><i class="fa fa-eye" aria-hidden="true"></i> &nbsp;All News</span></a>
                    <a href="{{ url('posts/blog') }}" class="btn btn uza-btn-3"><span><i class="fa fa-eye" aria-hidden="true"></i> &nbsp;All Blogs</span></a>
                    <h2>Keeping you updated</h2>
                    <div class="title-border"></div>
                </div>
            </div>
            <div class="row">
                @foreach($posts AS $k => $post)
                    <div class="col-md-4">
                        <div class="blog-item">
                            <div class="thumb1">
                                <a href="{{ url('blog-and-news/'.$post->slug) }}">
                                    <img class="img-responsive blog-img" src="{{ Voyager::image($post->image) }}" alt="BTCC Post - {{ $post->title }}">
                                </a>
                            </div>
                            <div class="article">
                                <span class="tag">{{ $post->name }}</span>
                                <a href="{{ url('blog-and-news/'.$post->slug) }}">
                                    <p>{{ $post->updated_at }}</p>
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                <p class="ptext">{{ str_limit($post->excerpt, $limit = 125, $end = '...') }}</p>
                                <hr>
                                <h5 class="author">By Admin</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 title-with-button text-center">
                    <h2>Our Partners</h2>
                    <h4>UK's four major business leaders are our partners.</h4>
                    <div class="title-border"></div>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-sm-4 col-md-3 col-xs-6">
                    <div class="blog-item">
                        <div class="team-profile">
                            <div class="team-pic" style="background-color:white; background-image:url(/images/lyca.png)">
                            </div>
                            <div class="name center">
                                <p>Platinum Partner</p>
                                <h3>Lyca</h3>
                                <hr/>
                                <div class="social">
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                    <a href="#"><i class="ion-social-googleplus"></i></a>
                                    <a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    <div class="clear-blank"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of person -->

                <div class="col-sm-4 col-md-3 col-xs-6">
                    <div class="blog-item">
                        <div class="team-profile">
                            <div class="team-pic" style="background-color:white; background-image:url(/images/carlton.jpg)">
                            </div>
                            <div class="name center">
                                <p>Platinum Partner</p>
                                <h3>Carlton Leisure</h3>
                                <hr/>
                                <div class="social">
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                    <a href="#"><i class="ion-social-googleplus"></i></a>
                                    <a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    <div class="clear-blank"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of person -->

                <div class="col-sm-4 col-md-3 col-xs-6">
                    <div class="blog-item">
                        <div class="team-profile">
                            <div class="team-pic" style="background-color:white; background-image:url(/images/btm_logo.jpg)">
                            </div>
                            <div class="name center">
                                <p>Our Patron</p>
                                <h3>BTM</h3>
                                <hr/>
                                <div class="social">
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                    <a href="#"><i class="ion-social-googleplus"></i></a>
                                    <a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    <div class="clear-blank"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of person -->
                <div class="col-sm-4 col-md-3 col-xs-6">
                    <div class="blog-item">
                        <div class="team-profile">
                            <div class="team-pic" style="background-color:white; background-image:url(/images/rubys.jpg)">
                            </div>
                            <div class="name center">
                                <p>Platinum Partner</p>
                                <h3>Ruby's</h3>
                                <hr/>
                                <div class="social">
                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                    <a href="#"><i class="ion-social-googleplus"></i></a>
                                    <a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                    <div class="clear-blank"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of person -->
            </div>
        </div>
    </section>
    <!-- Header -->
    <header id="creative">
        <div class="slideshow dark" tabindex="0">
            <div class="slide slide--layout-1" data-layout="layout1">
                <div class="slide-imgwrap">
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/5.jpg);"></div>
                    </div>
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/6.jpg);"></div>
                    </div>
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/7.jpg);"></div>
                    </div>
                </div>
                <div class="slide__title">
                    <img src="/images/single_logo.png" alt="">
                    <h1>London Tamil Market 2019</h1>
                    <h6>London base Tamil Trade Show and is called "London Tamil Market - 2019" and our aim is to promote Tamil businesses</h6>
                </div>
            </div>
            <div class="slide slide--layout-7" data-layout="layout7">
                <div class="slide-imgwrap">
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/8.png);"></div>
                    </div>
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/9.png);"></div>
                    </div>
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/10.png);"></div>
                    </div>
                </div>
                <div class="slide__title">
                    <img src="/images/single_logo.png" alt="">
                    <h1>London Tamil Market 2018</h1>
                    <h6>London base Tamil Trade Show and is called "London Tamil Market - 2018" and our aim is to promote Tamil businesses</h6>
                </div>
            </div>
            <div class="slide slide--layout-4" data-layout="layout4">
                <div class="slide-imgwrap">
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/1.jpg);"></div>
                    </div>
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/2.jpg);"></div>
                    </div>
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/3.jpg);"></div>
                    </div>
                    <div class="slide__img">
                        <div class="slide__img-inner" style="background-image: url(images/headers/slideshow/4.jpg);"></div>
                    </div>
                </div>
                <div class="slide__title">
                    <img src="/images/single_logo.png" alt="">
                    <h1>London Tamil Market Awards</h1>
                    <h6>London base Tamil Trade Show and is called "London Tamil Market shows" and our aim is to promote Tamil businesses</h6>
                </div>
            </div>
            <div class="slideshow__nav slideshow__nav--arrows">
                <button id="next-slide" class="btn btn--arrow" aria-label="Next slide"><img src="images/headers/arrow-right-b.svg" class="icon icon--next" alt=""></button>
                <button id="prev-slide" class="btn btn--arrow" aria-label="Previous slide"><img src="images/headers/arrow-left-b.svg" class="icon icon--prev" alt=""></button>
            </div>
        </div>
    </header>

    <!-- Work with us -->
    <div id="c_workwithus" class="area center primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="promo-heading">Are you interested to join us?</span>
                    <a href="{{ url('contact-us') }}" class="btn"><span>Contact us</span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_script')
    <!-- Additional Js -->
@endsection
