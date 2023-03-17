@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')
<section>
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">Register</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Register</li>
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
</section>

<section id="pricing" class="center grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 title">
                <h5>Please register an account and request to become a business member from your account.</h5>
            </div>
        </div>
        <div class="row m-space">
            <div class="col-md-4 col-sm-6">
                <div class="free-pack price-section mh highlight" style="height: 544px;">
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
                <div class="free-pack price-section mh highlight" style="height: 544px;">
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
                <div class="free-pack price-section mh highlight" style="height: 544px;">
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
<section>
    <section class="uza-contact-area section-padding-80">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Contact Form -->
                <div class="col-12 col-lg-8">
                    <div class="uza-contact-form mb-80">
                        <div class="contact-heading text-center mb-50">
                            <h2>Sign up <small class="hidden-xs">It's free and always will be.</small></h2>
                            <div class="title-border"></div><br/><br/>
                        </div>
                        <!--contact-form2-->

                        <form role="form" method="post" action="{{ route('register') }}" class="ajax-form validation-engine">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control mb-30 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name*">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control mb-30 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email*">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control mb-30 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password*">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">

                                        <input id="password-confirm" type="password" class="form-control mb-30 " name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password*">
                                    </div>
                                </div>
                                <!--
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30 input-lg validate[required,custom[email]]" name="email" value="<?=isset($_POST['email'])?$_POST['email']:''?>" maxlength="40" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control mb-30 input-lg validate[required,custom[phone]]" name="telephone" value="<?=isset($_POST['telephone'])?$_POST['telephone']:''?>" placeholder="Mobile number" maxlength="15" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control mb-30 input-lg validate[required]" name="member_type" value="<?=isset($_POST['member_type'])?$_POST['member_type']:''?>">
                                            <option value="" selected disabled>Member Type</option>
                                            <option value="user">User</option>
                                            <option value="free">Free Membership</option>
                                            <option value="paid">Gold Membership</option>
                                            <option value="platinum">Platinum Membership</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <small>We never share your Email or Telephone number for any advertising purpose.</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button style="color: black !important; width: 100%;" type="submit" class="uza-btn  btn-3 mt-15 uza-btn-log">{{ __('Register') }}</button>
                                </div>

                                <div class="col-xs-12">
                                    <hr>
                                    <small>By clicking 'Sign Up', you agree to the Terms and Conditions set out by this site</small>
                                </div>
                            </div>
                        </form>
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
                    <span class="promo-heading">Already have an account?</span>
                    <a href="{{ url('login') }}" class="btn uza-btn-3"><span>Click here Sign in</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->

@endsection
