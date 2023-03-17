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
                        <p class="title-head">About us</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About us</li>
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

    <!-- Gallery -->
    <section class="gallery" style="margin-top: -40px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mh">
                    <div class="single-pic">
                        <img src="/images/btcc-about-us-1.jpg" alt="BTCC">
                        <img src="/images/btcc-about-us-2.jpg" alt="BTCC">
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1 mh">
                    <div class="content-fixer">
                        <div class="content-holder">
                            <h5>Welcome to British Tamil Chamber of Commerce</h5>
                            <h2>We don't have Rules, We have Values!</h2>
                            <p style="text-align: justify;">
                                The British Tamil Chamber of Commerce (Tamil Chamber), was established in the United Kingdom,
                                in January 2010. The primary objective of the Tamil Chamber is to invest in the
                                socio-economic advancement of the Tamil Business Community, initially in the UK also
                                worldwide, helping to generate wealth and contribute towards country’s economy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-md-6">
                    <div class="accordion">
                        <li class="open default">Vision
                            <ul>
                                <h3>Our Vision</h3>
                                <p style="text-align: justify;">To be a forum for individuals and enterprises to network, exchange ideas, share
                                    knowledge and insight while fostering Tamil enterprises to thrive and contribute to
                                    the economy of the United Kingdom and Tamil Nation.
                                </p>
                            </ul>
                        </li>

                        <li>Our Mission
                            <h3>Mission</h3>
                            <ul>
                                <p>&#8226; To be a not-for-profit organisation passionate about promoting and empowering new and growing Tamil Entrepreneurs</p>
                                <p>&#8226; To become the Voice of the Tamil businesses and business interests in the United Kingdom.</p>
                                <p>&#8226; Promote corporate sustainability (CS), corporate social responsibility (CSR), charitableness and volunteerism among Tamil enterprises.</p>
                            </ul>
                        </li>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <h3>More about us...</h3>
                    <p style="text-align: justify;">
                        As you may aware of; economy is the backbone of a community in the perspective of empowerment and
                        overall success & other collective benefits that the members of the community can accomplish which
                        would never be possible to do so as an individual. Achievement of this vision takes a long time &
                        the team of BTCC believes that individual successes when united and aligned can lead to collective
                        achievements. BTCC has been successful in assisting many Tamil businesses over the last four years
                        in many ways; however, the scope of our vision exceeds the boundaries of tangible short-term gains.
                    </p>
                    <p style="text-align: justify;">
                        The BTCC considers every Tamil business in the UK as a single dignity that is part of our vision so
                        that providing a ground for all Tamil businesses to grow in their means of operations, and
                        financial stance is our partial objective.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social -->
    <div class="social-strip">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 social twitter"><a href="https://www.facebook.com/British-Tamil-Chamber-of-Commerce-1478478205771245"><i class="ion-social-facebook"></i></a></div>
                <div class="col-xs-3 social twitter"><a href="https://twitter.com/btccukorg"><i class="ion-social-twitter"></i></a></div>
                <div class="col-xs-3 social instagram"><a href="https://www.instagram.com/londontamilmarket/"><i class="ion-social-instagram-outline"></i></a></div>
                <div class="col-xs-3 social linkedin"><a href="https://www.linkedin.com/company/british-tamil-chamber/"><i class="ion-social-linkedin-outline"></i></a></div>
            </div>
        </div>
    </div>

    <!-- About Company -->
    <section class="iconblock center dark1">
        <div class="container border">
            <div class="row">
                <div class="col col-md-12 title">
                    <h2>Our Management Committee</h2>
                    <h4 class="sub-heading-title">Our Voluntary committee members are passionate about helping tamil businesses grow and succeed. They bring years of business and social knowledge of our community.</h4>
                    <div class="title-border"></div>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Bernard Alphonsus</h3>
                    <p class="user-pos">Chairman</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Jeevah Haran Daniel</h3>
                    <p class="user-pos">Vice Chairman</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon R Chandrakumar</h3>
                    <p class="user-pos">Secretary</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Iynkaran Nathan</h3>
                    <p class="user-pos">Asst secretary/membership</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon M Thiruvasagam</h3>
                    <p class="user-pos">Treasurer</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Subash Shangari</h3>
                    <p class="user-pos">Asst Treasurer</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Selvanathan</h3>
                    <p class="user-pos">Media Co-ordinator</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Asst media coordinator</h3>
                    <p class="user-pos">Asst media coordinator</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon S Sutharshan</h3>
                    <p class="user-pos">Events coordinator</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon S Mangaleswaran</h3>
                    <p class="user-pos">Asst Events coordinator</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Goldan Lambert</h3>
                    <p class="user-pos">Committee Member</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon N Jegatheeswaran</h3>
                    <p class="user-pos">Committee Member</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Akshaiyan</h3>
                    <p class="user-pos">Committee Member</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Robert</h3>
                    <p class="user-pos">Committee Member</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Rajkumar</h3>
                    <p class="user-pos">Committee Member</p>
                </div>
                <div class="col-sm-6 col-md-3">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Thevalojan</h3>
                    <p class="user-pos">Committee Member</p>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="text-center">
                    <i class="ion-ios-person-outline"></i>
                    <h3>Hon Vijayaratnam Anthony</h3>
                    <p class="user-pos">Committee Member</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection
