@extends('layouts.app')
@section('extra_css')
    <style>
        /* Popu Css
       -----------
       */
        #popup {
            display: none;
            position: fixed;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.2);
            z-index: 9999;
        }

        /* Modal Content */
        .modal-contentt {
            position: relative;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 50%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s;
            background: url(/images/paralex1.jpg);
            background-size: cover;
            background-position: center;
        }

        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        .closee {
            position: absolute;
            top: 5px;
            right: 35px;
            color: black;
            float: right;
            font-size: 28px;
            font-weight: bold;
            transition: 0.3s;
        }

        .closee:hover,
        .closee:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 12px;
            color: white;
            border-bottom: none;
            background: rgba(0,0,0,0.5);
        }

        .modal-body {
            padding: 2px 16px;
            background: rgba(0,0,0,0.5);
        }
        .modal-body h2{
            color:white;
            text-align: center;
        }

        .modal-footer {
            padding: 2px 10px;
            color: gray;
            background: rgba(246, 246, 246, 0.7);
            border-bottom: 1px solid gray;
        }

        @media only screen and (max-width: 700px) {
            .modal-contentt {
                width: 80%;
            }
        }
    </style>
@endsection
@section('content')

    <div id="popup" class="popup panel panel-primary">
        <!-- Modal content -->
        <div itemscope class="modal-contentt">
            <div class="modal-header">
                <span id="close" class="closee ">&times;</span>
                <h2 itemprop="Heading" class="bannerheading">&nbsp;</h2>
            </div>
            <div itemprop="description" class="modal-body">
                <h2>Become a BTCC member today</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <br/>
                            <a class="slider-btn" href=" {{ route('register') }}"></i> <i class="fa fa-handshake-o" style="color: gray"></i> Join BTCC&nbsp;&nbsp;&nbsp;</a>
                            <br/><br/><br/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <img itemprop="logo" src="/images/logo.png" alt="Logo"/>
            </div>
        </div>
    </div>

    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">Membership Type</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Membership Type</li>
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


    <section id="pricing" class="center grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 title">
                    <h5>Please register an account and request to become a business member from your account.</h5>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-md-4 col-sm-6">
                    <div class="free-pack price-section mh highlight" style="height: 725px;">
                        <h4>Free Membership</h4>
                        <h2>Free</h2>
                        <p>Company Profile Required!</p>
                        <hr>
                        <div style="text-align: left;">
                        <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Listed as a free member on your website</strong></p>
                            <div class="listing-text">
                                <ul class="list listingText">
                                    <li>A basic listing under the relevant category</li>
                                    <li>Logo | Name of the business| Address | Contact No</li>
                                    <li>Publish your discount on our website for a discounted fee</li>
                                    <li>Publish your job offers on our website for a discounted fee</li>
                                </ul>
                            </div>
                         <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Membership without voting rights</strong></p>
                         <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Free Legal and other professional advice (Initial Consultation Free)</strong></p>
                         <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Better Utility rates, Insurance premiums and other cost savings</strong></p>
                         <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Access to BTCC organised networking events</strong></p>
                         <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Discounted price on BTCC Organised panel discussions</strong></p>
                         <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Use of Chamber of commerce logo in your website</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="free-pack price-section mh highlight" style="height: 725px;">
                        <h4>Gold Membership</h4>
                        <h2 class="bigger">100<b>&#0163;</b></h2>
                        <p>Company Profile Required!</p>
                        <hr>
                        <div style="text-align: left;">
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;All the benefits of a free member</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Membership with voting rights</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Listed as a full member on our website</strong></p>
                            <div class="listing-text">
                                <ul class="list listingText">
                                    <li>Comprehensive listing on our website with a separate business profile page for your business</li>
                                    <li>Listed on top of free members in each relevant category</li>
                                    <li>Publish discount offers on our website once a month</li>
                                    <li>Publish unlimited number of jobs</li>
                                    <li>Member portal to manage your company details</li>
                                </ul>
                            </div>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Contribute to our blog section and get a link to your website</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Once free pass for paid networking events, training events and gala awards night</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Discounted sponsorship price BTCC organised events such as London Tamil Market & Tamil's & Tamil's Gala Awards Night</strong></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="free-pack price-section mh highlight" style="height: 725px;">
                        <h4>Platinum Membership</h4>
                        <h2 class="bigger">500<b>&#0163;</b></h2>
                        <p>Company Profile Required!</p>
                        <hr>
                        <div style="text-align: left;">
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;All the benefits of a paid member</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Listed as a full member on our website</strong></p>
                            <div class="listing-text">
                                <ul class="list listingText">
                                    <li>Logo displayed on the main landing page in our members directory section</li>
                                    <li>iesBusiness listed on top of the paid members in their respective categor</li>
                                    <li>Publish discount offers on our website twice a month</li>
                                </ul>
                            </div>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Be Featured in our monthly newsletters to BTCC members (at the discretion of BTCC)</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Nominate one paid/gold member per year (at the discretion of BTCC)</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Ability to supplement a paid member for one year</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Option to be one BTCC organised TV shows and be on short interviews for social media</strong></p>
                            <p><strong><i class="fa fa-play" aria-hidden="true"></i> &nbsp;Two free passes for paid networking events, training</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Work with us -->
    <div id="c_workwithus" class="area center primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="promo-heading">Become a BTCC member today</span>
                    <a href="{{ url('register') }}" class="btn uza-btn-3"><span>Click here register</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->
@endsection
@section('extra_script')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        window.setTimeout(function () {
            $("#popup").hide().fadeIn(1000);

        }, 30000)

        $(document).ready(function () {
            $("#close").on("click", function (e) {
                e.preventDefault();
                $("#popup").fadeOut(1000);
            });
        });
    </script>
@endsection
