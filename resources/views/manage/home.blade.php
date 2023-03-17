@extends('manage.includes.menu')
@section('member_body')

    <!-- Member Modal -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="member_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <h2>Become a Member</h2>
                        <!-- Member type details-->
                        <section id="pricing" class="center grey">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Form -->
                                    <form method="post" action="{{ url('member/become') }}">
                                        @csrf
                                        <label class="col-md-9">
                                            <input type="checkbox" required> I have a registered business in the UK
                                        </label>
                                        <label class="col-md-9">
                                            <input type="checkbox" required> I am  of Tamil origin
                                        </label>
                                        <label class="col-md-9" style="margin-bottom: 20px;">
                                            <input type="checkbox" required> I am over 18
                                        </label>
                                        <div class="col-md-9">
                                            <label for="member_type_id">Choose Your Member Type</label>
                                            <select class="form-control custom-select" style="font-size:14px;height: 46px;" name="member_type_id" id="member_type_id">
                                                @foreach($member_types AS $k=>$member_type)
                                                    <option value="{{ $member_type->title }}">{{ $member_type->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn" style="margin-top: 22px;">Request</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 title">
                                        <h3>Inclusion for different types of Member!</h3>
                                        <h5>Please check which category of membership you wanted to be when you sign-up.</h5>
                                    </div>
                                </div>
                                <div class="row m-space">
                                    <div class="col-md-4 col-sm-6">
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
                                    <div class="col-md-4 col-sm-6">
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
                                    <div class="col-md-4 col-sm-6">
                                        <div class="free-pack price-section mh" style="height: 544px;">
                                            <h4>Platinum Membership</h4>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-9">
        <div class="content-fixer">
            <div class="content-holder">

                @if($member['member_type_id']=="Non-Business Member")
                    <h5><span style="color:red;">{{ $member['member_type_id'] }}</span></h5>
                    <h3>
                        <span>Do you own a business in the UK?</span>
                        <a href="#" data-toggle="modal" data-target="#member_modal" class="btn float-right"><span>Become a Member Now!</span></a>
                    </h3>
                @else
                    <h5>BTCC Member</h5>
                @endif
                <hr/>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2>Dash Board </h2>
                <div class="row">
                    <div class="col-md-5">
                        <div class="blog-item">
                            <div class="thumb1">
                                <a href="#">
                                    <!--<i class="ion-bowtie" style="font-size:96px;margin-left:30%;"></i>-->
                                    <img class="img-responsive blog-img" src="{{ asset('images/dash-member.gif') }}" alt="BTCC - Member Details Dashboard">
                                </a>
                            </div>
                            <div class="article">
                                <span class="tag">Member Details</span>
                                <h3>Member ID:
                                    @if($member['member_type_id']=="Non-Business Member")
                                        NA
                                    @elseif($member['member_type_id']=="Platinum Membership")
                                        BTCC-PL-{{ sprintf("%06s", $member['user_id']) }}
                                    @elseif($member['member_type_id']=="Gold Membership")
                                        BTCC-GL-{{ sprintf("%06s", $member['user_id']) }}
                                    @elseif($member['member_type_id']=="Free Membership")
                                        BTCC-FR-{{ sprintf("%06s", $member['user_id']) }}
                                    @else
                                        Not-Set
                                    @endif
                                </h3>
                                <h5>Member Type: {{ $member['member_type_id'] }}</h5>
                                <h5>Member Status: {{ $member['status'] }}</h5>
                                <hr>
                                <p class="ptext">Comment: {{ $member['comment'] }}</p>
                                <hr>
                                <h5 class="author">Became Member on: {{ $member['created_at'] }}</h5>
                                <h5 class="author">Updated Member on: {{ $member['updated_at'] }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="blog-item">
                            <div class="thumb1">
                                <a href="#">
                                    <!--<i class="ion-bowtie" style="font-size:96px;margin-left:30%;"></i>-->
                                    <img class="img-responsive blog-img" src="{{ Voyager::image(Auth::user()->avatar) }}" alt="BTCC - User Details Dashboard">
                                </a>
                            </div>
                            <div class="article">
                                <span class="tag">User Details</span>
                                <h3>User Name: {{ Auth::user()->name }}</h3>
                                <h5>Email: {{ Auth::user()->email }}</h5>
                                <h5>User Number: BTCC-{{ sprintf("%06s", Auth::user()->id) }}</h5>
                                <hr>
                                <h5 class="author">Became User on: {{ Auth::user()->created_at }}</h5>
                                <h5 class="author">Updated User on: {{ Auth::user()->updated_at }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
