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
                        <p class="title-head">Sign Up</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign up</li>
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
    <header id="sp3" class="dark1"
            data-overlay="9">
        <div class="header-in">
            <div class="caption2">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 page-title">
                            <h1 class="h3">Sign Up</h1></div>
                        <div class="col-xs-6 right breadcrumbs hidden-xs">
                            <a href="#">Home</a> <i class="ion-chevron-right"></i> <a href="#">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->


    <section id="pricing" class="center grey">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 title">
                    <h5>Please check which category of membership you wanted to be when you sign-up.</h5>
                    <h3>Scroll down for sign-up form!</h3>
                </div>
            </div>
            <div class="row m-space">
                <div class="col-md-3 col-sm-6">
                    <div class="free-pack price-section mh" style="height: 544px;">
                        <h4>User</h4>
                        <h2>Free</h2>
                        <p style="color: darkred;">No Company Profile!</p>
                        <hr>
                        <ul class="list">
                            <li>Receive updates</li>
                            <li>BTCC Events</li>
                            <li>Job Listing</li>
                            <li>Offers Listing</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="free-pack price-section mh" style="height: 544px;">
                        <h4>Free Membership</h4>
                        <h2>Free</h2>
                        <p>Company Profile Required!</p>
                        <hr>
                        <ul class="list">
                            <li>Business Member</li>
                            <li>Receive updates</li>
                            <li>BTCC Events</li>
                            <li>Listed in Company Page</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="free-pack price-section mh highlight" style="height: 544px;">
                        <h4>Gold Membership</h4>
                        <h2 class="bigger">100<b>&#0163;</b></h2>
                        <p>Company Profile Required!</p>
                        <hr>
                        <ul class="list">
                            <li>Business Member</li>
                            <li>Receive updates</li>
                            <li>BTCC Events</li>
                            <li>Post Business Offers</li>
                            <li>Post Jobs</li>
                            <li>Listed in Company Page with Logo and Contact Details</li>
                            <li>Dedicated Company Page</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="free-pack price-section mh" style="height: 544px;">
                        <h4>Gold Membership</h4>
                        <h2 class="bigger">500<b>&#0163;</b></h2>
                        <p>Company Profile Required!</p>
                        <hr>
                        <ul class="list">
                            <li>Business Member</li>
                            <li>Receive updates</li>
                            <li>BTCC Events</li>
                            <li>Post Business Offers</li>
                            <li>Post Jobs</li>
                            <li>Post Blog</li>
                            <li>Listed in Company Page with Logo and Contact Details</li>
                            <li>Dedicated Company Page</li>
                            <li>Company Logo in BTCC Home Page</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="c_contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form role="form" method="post" action="/sign/signup/process" class="ajax-form validation-engine">
                        <div class="col-xs-12">
                            <h2>Sign up <small class="hidden-xs">It's free and always will be.</small></h2>
                            <hr>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg validate[required]" name="firstname" value="<?=isset($_POST['first_name'])?$_POST['first_name']:''?>" maxlength="20" placeholder="First name" />
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg validate[required]" name="lastname" value="<?=isset($_POST['last_name'])?$_POST['last_name']:''?>" maxlength="20" placeholder="Last name" />
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="password" class="form-control input-lg validate[required]" name="password" id="txtPassword" placeholder="Password" />
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="password" class="form-control input-lg validate[required,equals[txtPassword]]" name="password_confirm" placeholder="Password again" />
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="email" class="form-control input-lg validate[required,custom[email]]" name="email" value="<?=isset($_POST['email'])?$_POST['email']:''?>" maxlength="40" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="tel" class="form-control input-lg validate[required,custom[phone]]" name="telephone" value="<?=isset($_POST['telephone'])?$_POST['telephone']:''?>" placeholder="Mobile number" maxlength="15" />
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <select class="form-control input-lg validate[required]" name="member_type" value="<?=isset($_POST['member_type'])?$_POST['member_type']:''?>">
                                <option value="" selected disabled>Member Type</option>
                                <option value="user">User</option>
                                <option value="free">Free Membership</option>
                                <option value="paid">Gold Membership</option>
                                <option value="platinum">Platinum Membership</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <small>We never share your Email or Telephone number for any advertising purpose.</small>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn uza-btn-3 btn-block pull-right">Sign up</button>
                        </div>
                        <div class="col-xs-12">
                            <hr>
                            <small>By clicking 'Sign Up', you agree to the Terms and Conditions set out by this site</small>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-body text-center">
                            Already have an account?
                            <a class="btn uza-btn-3" href="/signin"><span>Sign in</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
@section('extra_script')
@endsection
