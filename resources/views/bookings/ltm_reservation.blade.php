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
                                <li class="breadcrumb-item active" aria-current="page">{{ $stall->stall_name }}</li>
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
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-bg">
        </div>
    </div>

    <section class="uza-contact-area section-padding-80">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Contact Form -->
            <div class="col-12 col-lg-8">
                <div class="uza-contact-form mb-80">
                    <div class="contact-heading mb-50">
                        <h2>Stall Reservations</h2>
                        <div class="title-border"></div>
                        <p>That's great the Stall you selected is available for reservation. Thank you very for your Interest!</p>
                        <p>Please answer below questions and continue reserve your stall.</p>
                    </div>
                    <form action="{{url('london-tamil-market/reserve')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-12" id="question_1">
                                <h4>Are you a member of BTCC?</h4>
                                <label class="q_container">YES
                                    <input type="radio" name="is_member" id="is_member_yes" onclick="hide_question_2();" value="Current Member">
                                    <span class="q_checkmark"></span>
                                </label>
                                <label class="q_container">NO
                                    <input type="radio" name="is_member" id="is_member_no" onclick="show_question_2();" value="Not a Member">
                                    <span class="q_checkmark"></span>
                                </label>
                                <br/>
                            </div>
                            <div class="col-lg-12" id="question_2" style="display:none;">
                                <h4>Do you want to become a member of BTCC - It's free?</h4>
                                <label class="q_container">YES
                                    <input type="radio" name="become_member" id="yes_become_member" onclick="confirm_business();" value="Like to Become">
                                    <span class="q_checkmark"></span>
                                </label>
                                <label class="q_container">NO
                                    <input type="radio" name="become_member" id="no_become_member" onclick="reserve_form();" value="Not for Now">
                                    <span class="q_checkmark"></span>
                                </label>
                                <br/>
                                <br/>
                            </div>
                            <div class="col-lg-12" id="confirm_business" style="display:none;">
                                <h4>Do you qualify on <b>all</b> below points?</h4>
                                <label class="q_container">- I have a registered business in the UK</label>
                                <label class="q_container">- I am  of Tamil origin</label>
                                <label class="q_container">- I am over 18</label>
                                <br/>
                                <label class="q_container">YES
                                    <input type="radio" name="all_three" id="yes_all_three" onclick="yes_business_reserve_form();" value="All Three">
                                    <span class="q_checkmark"></span>
                                </label>
                                <label class="q_container">NO
                                    <input type="radio" name="all_three" id="no_all_three" onclick="no_business_reserve_form();" value="Not All Three">
                                    <span class="q_checkmark"></span>
                                </label>
                                <br/>
                                <br/>
                            </div>
                            <div id="reserve_form" style="display: none;">
                                <div class="col-12" id="form-heading-non-member" style="display: none;">
                                    <h4 style="color:red;">Continue reserving as a non member  - &pound; {{ $stall->non_member_price }}</h4>
                                </div>
                                <div class="col-12" id="form-heading-member" style="display: none;">
                                    <h4 style="color:green;">Continue reserving as a member  - &pound; {{ $stall->member_price }}</h4>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="name" required placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mb-30" name="email" required placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="phone" required placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mb-30" name="organisation" required placeholder="Organisation">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control mb-30" name="message" rows="8" cols="80" placeholder="Any comments/ request"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="q_container">By submitting this form you agree to the terms of our <a href="{{ url('terms-and-conditions') }}">Terms and conditions</a>
                                        <input type="checkbox" name="privacy" required value="privacy">
                                        <span class="q_checkmark"></span>
                                    </label>
                                    <label class="q_container">I would like to receive new events, invites and newsletters by email, from British Tamil Chamber of Commerce.
                                        <input type="checkbox" name="marketing" value="marketing">
                                        <span class="q_checkmark"></span>
                                    </label>
                                    <br/>
                                </div>
                                <div class="col-12">
                                    <button class="btn uza-btn btn-3 mt-15" style="color: black !important;">Reserve</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Single Contact Card -->
            <div class="col-12 col-lg-3">
                <div class="contact-sidebar-area mb-80">
                    <section class="iconblock center dark1">
                        <div class="container border">
                            <div class="row">
                                <div class="col col-md-12 title">
                                    <h2>You Picked</h2>
                                    <div class="title-border"></div>
                                </div>
                            </div>
                            <div class="row m-space">
                                <div class="col-sm-12 col-md-12">
                                    <i class="ion-ios-business"></i>
                                    <h3>{{ $stall->stall_name }}</h3>
                                    <p class="user-pos">Stall Name</p>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <i class="ion-ios-cash"></i>
                                    <h3 style="color: greenyellow !important;">&pound; {{ $stall->member_price }}</h3>
                                    <p class="user-pos">Price for BTCC Member</p>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <i class="ion-ios-cash"></i>
                                    <h3>&pound; {{ $stall->non_member_price }}</h3>
                                    <p class="user-pos">Price for BTCC Non-Member</p>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="text-center">
                                        <div class="title-border"></div>
                                        <h6>Not a BTCC Member?</h6>
                                        <h2 class="text-uppercase">It's Free!</h2>
                                        <a href="/signup" class="btnnn uza-btn-2"><span>Join us today &nbsp;<i class="ion-android-person-add"></i></span></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    <style>
        /* The container */
        .q_container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .q_container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .q_checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .q_container:hover input ~ .q_checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .q_container input:checked ~ .q_checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .q_checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .q_container input:checked ~ .q_checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .q_container .q_checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>

@endsection
@section('extra_script')
@endsection
