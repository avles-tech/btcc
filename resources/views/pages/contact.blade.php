@extends('layouts.app')
@section('extra_css')
    <style>
        /* The chk-container */
        .chk-container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 13px;
            text-align: left;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default checkbox */
        .chk-container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border: 1px solid #a0a0a0;
        }

        /* On mouse-over, add a grey background color */
        .chk-container:hover input ~ .checkmark {
            background-color: #59c5dc;
        }

        /* When the checkbox is checked, add a blue background */
        .chk-container input:checked ~ .checkmark {
            background-color: #59c5dc;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the checkmark when checked */
        .chk-container input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the checkmark/indicator */
        .chk-container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
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
                        <p class="title-head">Contact us</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
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

    <!-- ***** Contact Area Start ***** -->
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading mb-50">
                            <h2>Get in touch with us</h2>
                            <div class="title-border"></div>
                            <p style="color:black">Thank you for your interest. You have done the right thing by getting into business. <br>To contact us for any details to help you
                                move forward please fill the details required in the appropriate boxes given below and click the
                                submit button to send an email to us.</p>
                        </div>
                        <form action="{{url('send-contact-request')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="organization" required placeholder="Organization">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <br/>
                                    <div style="float: left !important;">
                                        <div class="col-lg-12">
                                            <label class="chk-container" style="color:black;">By submitting this form you agree to the terms of our <a href="{{ url('terms-and-conditions') }}">Terms and conditions</a>
                                                <input type="checkbox" id="checkme" name="privacy" value="terms">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="chk-container" style="color:black;"> I would like to receive new events, invites and newsletters by email, from British Tamil Chamber of Commerce.</a>
                                                <input type="checkbox" id="checkme" name="marketing" value="marketing">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn uza-btn btn-3 mt-15" style="color: black !important;" disabled id="sendNewSms">Contact Us</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Single Contact Card -->
                <div class="col-12 col-lg-3">
                    <div class="contact-sidebar-area mb-80">
                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                            <h3>British Tamil Chamber of Commerce</h3>
                            <p>is the Trading Name of: Tamil Businesses Association UK Limited (By Guarantee) Registered in England and Wales No. 07071753</p>
                            <p>Monday-Friday: 9am to 5pm <br>Closed on Weekends</p>
                        </div>

                        <!-- Single Sidebar Area -->
                        <div class="single-contact-card mb-50">
                                <h5><strong>Address</strong></h5>
                                <p>SVS House, Oliver Grove London SE25 6EJ
                                </p>
                                <a href="https://www.google.com/maps/d/u/1/viewer?hl=en&hl=en&mid=1yJWUV16qgIYJBjFWCQVhPjfIOV6ptxyb&ll=51.399080099999985%2C-0.07816830000001573&z=17">Visit on Google Maps</a>
                                <hr>
                                <h5><strong>Phone</strong></h5>
                                <p>(+44) 20 3371 9834</p>
                                <hr>
                                <h5><strong>Email</strong></h5>
                                <p>info@tamilchamberofcommerce.org.uk</p>
                                <hr>
                                <h5><strong>Fax</strong></h5>
                                <p>(+44) 20 3371 9834</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Google Maps -->
                <div class="col-12">
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/d/u/1/embed?mid=1yJWUV16qgIYJBjFWCQVhPjfIOV6ptxyb" width="100%" height="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

    <div class="area blog-social">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <h3>Follow our social channels</h3>
                </div>
                <div class="col-sm-6 col-xs-12 right xs-center">
                    <div class="social">
                        <a href="https://www.facebook.com/British-Tamil-Chamber-of-Commerce-1478478205771245"><i class="ion-social-facebook"></i></a>
                        <a href="https://twitter.com/btccukorg"><i class="ion-social-twitter"></i></a>
                        <a href="https://www.instagram.com/londontamilmarket/"><i class="ion-social-instagram-outline"></i></a>
                        <a href="https://www.linkedin.com/company/british-tamil-chamber/"><i class="ion-social-linkedin-outline"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Newsletter Area Start ***** --
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->
@endsection
@section('extra_script')
    <script type="text/javascript">
        var checker = document.getElementById('checkme');
        var sendbtn = document.getElementById('sendNewSms');
        checker.onchange = function() {
            if(this.checked){
                sendbtn.disabled = false;
            }else{
                sendbtn.disabled = true;
            }
        };
    </script>
@endsection
