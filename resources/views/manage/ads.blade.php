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
                                    <form method="post" action="{{ url('member/ads/add-new') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6" style="margin-bottom: 12px;">
                                                <label for="business_id">Choose Your Business</label>
                                                <select class="form-control custom-select" style="font-size:14px;height: 46px;" name="business_id" id="business_id">
                                                    @foreach($businesses AS $k => $business)
                                                        <option value="{{ $business->id }}">{{ $business->business_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6" style="margin-bottom: 12px;">
                                                <label for="classified_ad_type_id">Choose Your Ad Type</label>
                                                <select class="form-control custom-select" style="font-size:14px;height: 46px;" name="classified_ad_type_id" id="classified_ad_type_id">
                                                    @foreach($classified_ad_types AS $k => $classified_ad_type)
                                                        <option value="{{ $classified_ad_type->id }}">{{ $classified_ad_type->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image">Ad Image<small>(Max - 4Mb | jpeg/jpg/png | Size 3:4 Ratio)</small></label>
                                                <div class="form-group">
                                                    <input type="file" class="form-control mb-30" id="image" name="image" placeholder="Advertisement Banner | Max - 4Mb | jpeg/jpg/png | Size 3:4 Ratio" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="image">Title</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="title" id="title" placeholder="Eg: Website Design Discount">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="from">Valid From</label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control mb-30" name="from" id="from" placeholder="Valid From" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="to">Valid Till</label>
                                                <div class="form-group">
                                                    <input type="date" class="form-control mb-30" name="to" id="to" placeholder="Valid Till" required >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="price" placeholder="Price &#163; (Optional)">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea class="form-control mb-30" name="description" rows="3" cols="80" placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <input type="checkbox" name="age_ack" required> <span style="color:red !important;">*</span> I acknowledge that above details are correct and accurate.
                                            </div>
                                            <div class="col-12">
                                                <hr/>
                                                <button type="submit" class="btn uza-btn btn-2 mt-30">Send &amp; Verify</button>
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
                    <span>You Must have at least one business active &amp; registered to advertise</span>
                    <a href="#" data-toggle="modal" data-target="#business_modal" class="btn float-right">
                        <span>Add a Ad <i class="ion-ios-plus-outline" style="font-size:20px;margin-left: 4px;"></i></span>
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
                <h2>Your Posted Ads</h2>
                    @if(count($classified_ads) == 0)
                        <h5><span style="color:red;">Currently No Business Has been listed by you.</span></h5>
                    @else
                        @foreach($businesses AS $k => $business)
                        <h5><span style="color:red;">{{ $business->business_name }}</span></h5>
                        <div class="row">
                            @foreach($classified_ads[$k] AS $l => $classified_ad)
                                <div class="col-md-4">
                                    <div class="blog-item">
                                        <div class="thumb1">
                                            <a href="#">
                                                <!--<i class="ion-bowtie" style="font-size:96px;margin-left:30%;"></i>-->
                                                <img class="img-responsive blog-img" src="{{ Voyager::image($classified_ad->image) }}" alt="BTCC - Classified Ads - {{ $classified_ad->title }}">
                                            </a>
                                        </div>
                                        <div class="article">
                                            <span class="tag">{{ $business->business_name }}</span>
                                            <h3>Title: {{ $classified_ad->title }}</h3>
                                            <h5 @if($classified_ad->status != 'Active') style="font-weight:bold;color:darkred !important;" @endif>Status: {{ $classified_ad->status }}</h5>
                                            <h5>Views: {{ $classified_ad->views }}</h5>
                                            <hr>
                                            <p>Feedback: {{ $classified_ad->feedback }}</p>
                                            <hr>
                                            <h5 class="author">Created on: {{ $classified_ad->created_at }}</h5>
                                            <h5 class="author">Updated on: {{ $classified_ad->updated_at }}</h5>
                                            <hr>
                                            <a href="{{ url('/classified_ads/'.$business->slug.'/' . $classified_ad->slug ) }}" target="_blank" class="uza-btn btn-3 float-right">View Ad</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br/>
                        @endforeach
                    @endif
            </div>
        </div>
    </div>


@endsection
