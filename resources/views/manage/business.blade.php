@extends('manage.includes.menu')
@section('member_body')

    <!-- Member Modal -->
    <div class="top-search-area">
        <!-- Search Modal -->
        <div class="modal fade" id="business_modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <h2>Add your Business</h2>
                        <!-- Member type details-->
                        <section id="pricing" class="center grey">
                            <div class="container-fluid">
                                <div class="row">
                                    <!-- Form -->
                                    <form method="post" action="{{ url('member/business/add-new') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12" style="margin-bottom: 12px;">
                                                <label for="member_type_id">Choose Your Business Category</label>
                                                <select class="form-control custom-select" style="font-size:14px;height: 46px;" name="business_category_id" id="business_category_id">
                                                    @foreach($business_categories AS $k=>$business_category)
                                                        <option value="{{ $business_category->id }}">{{ $business_category->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image">Business Logo <small>(Max - 2Mb | jpeg/jpg/png)</small></label>
                                                <div class="form-group">
                                                    <input type="file" class="form-control mb-30" id="image" name="image" placeholder="Business Logo | Max - 2Mb | jpeg/jpg/png" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image">Specific Business Sector</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="sector" placeholder="Eg: Software Category - Web/ AI Specific Sectors">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="business_name" placeholder="Business Name eg: Company Name (Pvt) LTD" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="comany_registration_number" placeholder="Business registration number" required >
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control mb-30" name="excerp_description " rows="3" cols="80" placeholder="Excerpt Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control mb-30" name="description" rows="8" cols="80" placeholder="Detailed Description"></textarea>
                                                </div>
                                                <hr/>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-30" name="business_email" placeholder="Business Email" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="business_telephone" placeholder="Business Telephone" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="business_address" placeholder="Business Address" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="postcode" placeholder="Postcode" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="business_city" placeholder="City" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="facebook" placeholder="Facebook Profile (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="google" placeholder="Google Profile (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="instagram" placeholder="Instagram Profile (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="twitter" placeholder="Twitter Profile (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="linkedin" placeholder="Linkedin Profile (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="pinit" placeholder="Pinit Profile (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="whatsapp" placeholder="Whatsapp/ Viber Number (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="checkbox" name="registered_ack" required> <span style="color:red !important;">*</span> I have a registered business in the UK
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="checkbox" name="tamil_ack" required> <span style="color:red !important;">*</span> I am  of Tamil origin
                                            </div>
                                            <div class="col-lg-4">
                                                <input type="checkbox" name="age_ack" required> <span style="color:red !important;">*</span> I am over 18
                                            </div>
                                            <div class="col-12">
                                                <hr/>
                                                <button type="submit" class="btn uza-btn btn-2 mt-15">Register</button>
                                            </div>
                                        </div>
                                    </form>
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
                <h3>
                    <span>All businesses must be registered in the UK</span>
                    <a href="#" data-toggle="modal" data-target="#business_modal" class="btn float-right">
                        <span>Add a New Business <i class="ion-ios-plus-outline" style="font-size:20px;margin-left: 4px;"></i></span>
                    </a>
                </h3>
                <hr/>

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
                <br/><br/><br/>
                <h2>Your Registered Business</h2>
                <div class="row">
                    @if(count($businesses) == 0)
                        <h5><span style="color:red;">Currently No Business Has been listed by you.</span></h5>
                    @else
                        @foreach($businesses AS $k => $business)
                            <div class="col-md-5">
                                <div class="blog-item">
                                    <div class="thumb1">
                                        <a href="#">
                                            <!--<i class="ion-bowtie" style="font-size:96px;margin-left:30%;"></i>-->
                                            <img class="img-responsive blog-img" src="{{ Voyager::image($business->image) }}" alt="BTCC - Registered Business - {{ $business->business_name }}">
                                        </a>
                                    </div>
                                    <div class="article">
                                        <span class="tag">{{ $business->business_name }}</span>
                                        <h3>Reg. #: {{ $business->comany_registration_number }}</h3>
                                        <h5 @if($business->status != 'Active') style="font-weight:bold;color:darkred !important;" @endif>Status: {{ $business->status }}</h5>
                                        <h5>Address: {{ $business->business_address }}</h5>
                                        <hr>
                                        <h5 class="author">Registered on: {{ $member['created_at'] }}</h5>
                                        <h5 class="author">Updated on: {{ $member['updated_at'] }}</h5>
                                        <hr>
                                        <a href="{{ url('members/business/' . $business->slug ) }}" target="_blank" class="uza-btn btn-3 float-right">View Profile</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>


@endsection
