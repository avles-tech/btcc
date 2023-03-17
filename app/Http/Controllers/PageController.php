<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Business;
use App\BusinessCategory;
use App\Member;
use App\ClassifiedAdType;
use App\ClassifiedAd;
use App\LtmStall;
use App\Page;
use App\ParticipantCategory;
use App\WithoutStallGuest;

class PageController extends Controller
{

    public function landing_page($slug){

        $page = Page::where('slug', $slug)
                ->where('status', 'ACTIVE')
                ->firstOrFail();

        $data=array(
            'page_title'=>$page->title,
            'description'=>$page->meta_description,
            'keywords'=>$page->meta_keywords,
            'abstract'=>"British Tamil Chamber of Commerce - ".$page->excerpt,
            'page' => $page
        );
        return view('landing.landing_page')->with($data);
    }

    public function tamil_heritage_month(){
        $data=array(
            'page_title'=>'Tamil Heritage Month UK :: British Tamil Chamber of Commerce',
            'description'=>"British Tamil Chamber of Commerce welcomes the idea of celebrating the month of January as Tamil Heritage Month and will celebrate every year January as Tamil Heritage Month in the UK.",
            'keywords'=>"Tamil Heritage Month, tamil, Tamils in world, Tamils in UK",
            'abstract'=>"British Tamil Chamber of Commerce - British Tamil Chamber of Commerce welcomes the idea of celebrating the month of January as Tamil Heritage Month and will celebrate every year January as Tamil Heritage Month in the UK.",
        );
        return view('pages.tamil_heritage_month')->with($data);
    }

    public function about_us(){
        $data=array(
            'page_title'=>'About us :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About BTCC, Tamil Chamber",
            'abstract'=>"About British Tamil Chamber of Commerce",
        );
        return view('pages.about')->with($data);
    }

    public function membership_type(){
        $data=array(
            'page_title'=>'Membership Type :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About BTCC, Membership Type",
            'Abstract'=>"About Membership Type",
        );
        return view('pages.membership_type')->with($data);
    }

    public function advice(){
        $data=array(
            'page_title'=>'Advice :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About Advice, Business Advice",
            'Abstract'=>"About Advice",
        );
        return view('pages.advice')->with($data);
    }

    public function introduction(){
        $data=array(
            'page_title'=>'Introduction :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About Advice, Introduction",
            'Abstract'=>"About Introduction",
        );
        return view('pages.introduction')->with($data);
    }

    public function investment(){
        $data=array(
            'page_title'=>'Investment :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About Advice, investment",
            'Abstract'=>"About investment",
        );
        return view('pages.investment')->with($data);
    }

    public function government(){
        $data=array(
            'page_title'=>'Government :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About Advice, government",
            'Abstract'=>"About government",
        );
        return view('pages.government')->with($data);
    }

    public function job_portal(){
        $data=array(
            'page_title'=>'Job Portal :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About Advice, job portal",
            'Abstract'=>"About job portal",
        );
        return view('pages.job_portal')->with($data);
    }

    public function advertisements(){
        $data=array(
            'page_title'=>'Advertisements :: British Tamil Chamber of Commerce',
            'description'=>"BTCC was established in the United Kingdom, in January 2010. The primary objective of the Tamil Chamber is to invest in the socio-economic advancement of the Tamil Business Community, initially in the UK also worldwide, helping to generate wealth and contribute towards country’s economy.",
            'keywords'=>"About Advice,advertisements",
            'Abstract'=>"About advertisements",
        );
        return view('pages.advertisements')->with($data);
    }

    public function tamil_business_offers(){
       $data=array(
            'page_title'=>'Tamil Business Offers :: British Tamil Chamber of Commerce',
            'description'=>"Find special offers from all British Tamil Chamber of Commerce members. Print the offer and follow the instructions to claim the offer.",
            'keywords'=>"Tamil Business Offer, Tamil Business, London Tamil",
            'abstract'=>"About Tamil Business Offers",
        );
        return view('pages.tamil_business_offers')->with($data);
    }

    public function london_tamil_market(){

        $data =array(
            'page_title'=>'London Tamil Market :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About London Tamil Market Events",
        );
        return view('pages.london_tamil_market')->with($data);
    }

    public function london_tamil_market_stall_booking(){

        //get all available stalls
        $stalls = LtmStall::where('year', env('LTM_YEAR'))
                    ->get();

        $data =array(
            'page_title'=>'London Tamil Market '.env('LTM_YEAR').' :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"London Tamil Market Events",
            'stalls'=>$stalls
        );
        return view('pages.london_tamil_market_stall_booking')->with($data);
    }

    public function london_tamil_market2023(){
        //get all available stalls
        $stalls = LtmStall::where('year', env('LTM_YEAR'))
                    ->get();

        //get all available sponsors/without_stall_guests
        $sponsors = WithoutStallGuest::where('year', env('LTM_YEAR'))
                    ->get();

       //get ltm participant categories
        $participant_categories = ParticipantCategory::where('status', 'Active')
                                    ->orderBy('display_order')
                                    ->get();

        $data =array(
            'page_title'=>'London Tamil Market 2023 :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"London Tamil Market Events",
            'stalls'=>$stalls,
            'sponsors'=>$sponsors,
            'participant_categories'=>$participant_categories
        );
        return view('pages.london_tamil_market2023')->with($data);
    }

    public function london_tamil_market2020(){

        $data =array(
            'page_title'=>'London Tamil Market 2020 :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About London Tamil Market Events",
        );
        return view('pages.london_tamil_market2020')->with($data);
    }

public function london_tamil_market2019(){

        $data =array(
            'page_title'=>'London Tamil Market 2019 :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About London Tamil Market Events",
        );
        return view('pages.london_tamil_market2019')->with($data);
    }

    public function london_tamil_market2018(){

        $data =array(
            'page_title'=>'London Tamil Market 2018 :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About London Tamil Market Events",
        );
        return view('pages.london_tamil_market2018')->with($data);
    }

    public function london_tamil_market2017(){

        $data =array(
            'page_title'=>'London Tamil Market 2017 :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About London Tamil Market Events",
        );
        return view('pages.london_tamil_market2017')->with($data);
    }

    public function london_tamil_market2016(){

        $data =array(
            'page_title'=>'London Tamil Market 2016 :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About London Tamil Market Events",
        );
        return view('pages.london_tamil_market2016')->with($data);
    }

    public function london_tamil_market2015(){

        $data =array(
            'page_title'=>'London Tamil Market 2015 :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About London Tamil Market Events",
        );
        return view('pages.london_tamil_market2015')->with($data);
    }

    public function btcc_awards_night(){

        $data =array(
            'page_title'=>'Btcc Awards Night :: British Tamil Chamber of Commerce',
            'description'=>"London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords'=>"London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract'=>"About BTCC Awards Night",
        );
        return view('pages.btcc_awards_night')->with($data);
    }


    public function job(){

        $data =array(
            'page_title'=>'Jobs :: British Tamil Chamber of Commerce',
            'description'=>"Find all job offers from all British Tamil Chamber of Commerce members. Click on the business that you want to work for and check their vacancies.",
            'keywords'=>"Job Offer, Tamil Jobs, Tamil Jobs Portal",
            'abstract'=>"About BTCC job",
        );
        return view('pages.job')->with($data);
    }

    public function blogs(){

        $data=array(
            'page_title'=>'Blogs :: British Tamil Chamber of Commerce',
            'description'=>"BTCC Blogs",
            'keywords'=>"Blogs, Tamil Chamber, blog",
            'abstract'=>"About BTCC Blogs",
        );
        return view('pages.blog')->with($data);
    }


    public function blog_view($slug){

        $data=array(
            'page_title'=>'Blogs :: British Tamil Chamber of Commerce',
            'description'=>"BTCC Blogs",
            'keywords'=>"Blogs, Tamil Chamber, blog",
            'abstract'=>"About BTCC Blogs",
        );
        return view('pages.view_blog')->with($data);
    }

    public function news(){

        $data=array(
            'page_title'=>'Blogs :: British Tamil Chamber of Commerce',
            'description'=>"BTCC News",
            'keywords'=>"News, Tamil Chamber, blog",
            'abstract'=>"About BTCC News",
        );
        return view('pages.news')->with($data);
    }


    public function news_view($slug){

        $data=array(
            'page_title'=>'News :: British Tamil Chamber of Commerce',
            'description'=>"BTCC News",
            'keywords'=>"Blogs, Tamil Chamber, blog",
            'abstract'=>"About BTCC News",
        );
        return view('pages.view_news')->with($data);
    }

    public function events(){

        $data=array(
            'page_title'=>'Events :: British Tamil Chamber of Commerce',
            'description'=>"BTCC Events",
            'keywords'=>"Events, Tamil Chamber",
            'abstract'=>"About BTCC Events",
        );
        return view('pages.events')->with($data);
    }

    public function members(){

        //get all business with member details
        $businesses = Business::where('status', 'Active')
            ->whereHas('member', function ($query) {
                $query->where('status', 'Active');
            })
            ->orderBy('business_name')
            ->get();

        //get category details
        $business_categories = BusinessCategory::where('status', 'Active')
            ->whereHas('business', function ($query) {
                $query->where('status', 'Active');
            })
            ->withCount('business')
            ->orderBy('business_count', 'desc')
            ->get();

        $data =array(
            'page_title'=>'Members :: British Tamil Chamber of Commerce',
            'description'=>"BTCC Members",
            'keywords'=>"Members, Tamil Chamber",
            'abstract'=>"About BTCC Members",
            'businesses'=>$businesses,
            'business_categories'=>$business_categories
        );
        return view('pages.members')->with($data);
    }

    public function list_all_members(){

        //list all business with given category
        $businesses = Business::where('status', 'Active')
            ->orderBy('business_name')
            ->get();

        //get category details
        $business_categories = BusinessCategory::where('status', 'Active')
            ->whereHas('business', function ($query) {
                $query->where('status', 'Active');
            })
            ->withCount('business')
            ->orderBy('business_count', 'desc')
            ->get();

        $data=array(
            'page_title'=>'List All Members :: British Tamil Chamber of Commerce',
            'description'=>"List All Members",
            'keywords'=>"BTCC Members, Tamil Chamber",
            'abstract'=>"About All BTCC Members",
            'businesses'=>$businesses,
            'business_categories'=>$business_categories
        );
        return view('pages.members_list')->with($data);
    }

    public function member_category($slug){

        //getting the slug or fail
        $business_category = BusinessCategory::where('slug', $slug)
            ->where('status', 'Active')
            ->first();

        if(!isset($business_category->id)){
            return back();
        }

        //list all business with given category
        $businesses = Business::where('business_category_id', $business_category->id)
            ->where('status', 'Active')
            ->orderBy('business_name')
            ->get();

        //get category details
        $business_categories = BusinessCategory::where('status', 'Active')
            ->whereHas('business', function ($query) {
                $query->where('status', 'Active');
            })
            ->withCount('business')
            ->orderBy('business_count', 'desc')
            ->get();

        $data =array(
            'page_title'=> 'Catgroy Name :: '.$business_category->title,
            'description'=>"BTCC Members",
            'keywords'=>"Members, Tamil Chamber",
            'abstract'=>"About BTCC Members",
            'business_category'=>$business_category,
            'businesses'=>$businesses,
            'business_categories'=>$business_categories
        );

        return view('pages.member_category')->with($data);
    }

    public function company_view($slug){

        //getting the slug or fail
        $business = Business::where('slug', $slug)
            ->where('status', 'Active')
            ->first();
        if(!isset($business->id)){
            return back();
        }

        //getting the member and member is gold or platinum only company profiles available
        $member = Member::where('id', $business->member_id)
            ->where('status', 'Active')
            ->whereIn('member_type_id', ['Platinum Membership', 'Gold Membership'])
            ->first();
        if(!isset($member->id)){
            return back();
        }

        //getting specific category
        $business_category = BusinessCategory::where('id', $business->business_category_id)
            ->first();
        if(!isset($business_category->id)){
            return back();
        }

        //update company views
        Business::where('id', $business->id)
            ->update(['business_views' => ($business->business_views) + 1]);

        $data =array(
            'page_title'=> 'Company :: British Tamil Chamber of Commerce',
            'description'=>"BTCC Members",
            'keywords'=>"Members, Tamil Chamber",
            'abstract'=>"About BTCC Members",
            'business'=>$business,
            'member'=>$member,
            'business_category'=>$business_category,
        );

        return view('pages.view_company')->with($data);
    }

    public function classifieds($slug){

        $classified_ad_type = ClassifiedAdType::where('slug', $slug)
            ->first();
        if(!isset($classified_ad_type->id)){
            return back();
        }

        $classified_ads = ClassifiedAd::where('classified_ad_type_id', $classified_ad_type->id)
            ->where('status', 'Active')
            ->where('to', '>=', date('Y-m-d'))
            ->get();

        $data=array(
            'page_title'=>'Classifieds Ads :: ' . $classified_ad_type->title,
            'description'=>"Just sign-up and start posting your classified ads under different tags",
            'keywords'=>"BTCC, Business Offers, Sale, Job, Vacancy",
            'abstract'=>"Free ads with BTCC",
            'classified_ad_type'=>$classified_ad_type,
            'classified_ads'=>$classified_ads,
        );

        return view('pages.classified_ads')->with($data);
    }

    public function classified_ad_view($business_slug, $ad_slug){

        $classified_ad = ClassifiedAd::where('slug', $ad_slug)
            ->where('status', 'Active')
            ->where('to', '>=', date('Y-m-d'))
            ->find(1);
        if(!isset($classified_ad->id)){
            return back();
        }

        $classified_ad_type = ClassifiedAdType::where('id', $classified_ad->classified_ad_type_id)
            ->first();
        if(!isset($classified_ad_type->id)){
            return back();
        }

        $classified_ads = ClassifiedAd::where('classified_ad_type_id', $classified_ad_type->id)
            ->where('status', 'Active')
            ->where('to', '>=', date('Y-m-d'))
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $data=array(
            'page_title'=>'Classifieds Ads | ' . $classified_ad_type->title,
            'description'=>"Just sign-up and start posting your classified ads under different tags",
            'keywords'=>"BTCC, Business Offers, Sale, Job, Vacancy",
            'abstract'=>"Free ads with BTCC",
            'classified_ad_type'=>$classified_ad_type,
            'classified_ad'=>$classified_ad,
            'classified_ads'=>$classified_ads,
        );

        //update ad views
        $view_count = ($classified_ad->views) + 1;
        ClassifiedAd::where('id', $classified_ad->id)
            ->update(['views' => $view_count]);

        return view('pages.classified_ad_view')->with($data);
    }


    public function contact(){
        $data=array(
            'page_title'=>'Contact Us :: British Tamil Chamber of Commerce',
            'description'=>"To contact us for any details to help you move forward please fill the details required in the appropriate boxes given below and click the submit button to send an email to us.",
            'keywords'=>"BTCC Contact, Email us,  Tamil Businesses Association",
            'abstract'=>"About BTCC Contact",
        );
        return view('pages.contact')->with($data);
    }


    public function signin(){
        $data=array(
            'page_title'=>'Sign In :: British Tamil Chamber of Commerce',
            'description'=>"Signin the BTCC portal",
            'keywords'=>"BTCC login, Tamil Chamber",
            'abstract'=>"About British Tamil Chamber of Commerce login",
        );
        return view('pages.login')->with($data);
    }

    public function signup(){
        $data=array(
            'page_title'=>'Sign Up :: British Tamil Chamber of Commerce',
            'description'=>"Signup the BTCC portal",
            'keywords'=>"BTCC Register, Tamil Chamber",
            'abstract'=>"About British Tamil Chamber of Commerce register",
        );
        return view('pages.register')->with($data);
    }

    public function terms(){
        $data=array(
            'page_title'=>'British Tamil Chamber of Commerce > Privacy Policy',
            'description'=>"",
            'keywords'=>"",
            'abstract'=>"",
        );
        return view('pages.terms')->with($data);
    }

    public function sitemap(){
        $data=array(
            'page_title'=>'British Tamil Chamber of Commerce > Sitemap',
            'description'=>"",
            'keywords'=>"",
            'abstract'=>"",
        );
        return view('pages.sitemap')->with($data);
    }

    public function send_contact_request(Request $request) {

        $this->validate($request,[
            'name'=>'required',
            'email'=>'required| email',
        ]);

        $data=array(
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'organization'=>$request->organization,
            'comments'=>$request->message,
            'subject'=>'BTCC Contact Message',
        );

        $to 		= 'info@tamilchamberofcommerce.org.uk';
        $from		= $data['email'];
        $subject	= $data['subject'];

        $message="<html>
			<head>
			<title>".$data['name']." - ".$data['subject']. "</title>
			</head>
			</html>
			<body style='background-color:##f2f2f2;'>
			<div>
			<h2 style='color:#1cb2ff;text-align: justify;'>BTCC CONTACT MESSAGE!</h2>
			<div style='margin-top:-15px !important;'>
            <p style='padding-top:-25px;text-align: justify;'>Hi... You've got a message from " .$data['name']."!<br/></p></div>
			<table style='margin-left:12px; border-collapse: collapse;width: 100%;'>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Name </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['name']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Email </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['email']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Phone </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['phone']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Organization </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['organization']."</td>
			  </tr>
              <tr>
                <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Message </td>
                <td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['comments']."</td>
              </tr>
			</table>
			</body>
			</html>";

        // Mail For admin
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: '.$data['name'].' <'.$data['email'].'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $sentMailResult = mail($to,$subject,$message,$headers);

        if($sentMailResult )
        {
            return redirect()->back()->with('flash_success', 'Your contact request has been accepted! We will contact you soon as possible.');
        }
        else
        {
            return redirect()->back()->with('flash_success', 'Sorry but the email could not be sent. Please go back and try again!');
        }
    }

    public function request_awards_application(Request $request) {

        $this->validate($request,[
            'full_name'         => 'required',
            'business_name'     => 'required',
            'business_address'  => 'required',
            'award_type'        => 'required',
            'email'             => 'required|email'
        ]);

        $data=array(
            'full_name'=>$request->full_name,
            'business_name'=>$request->business_name,
            'business_address'=>$request->business_address,
            'award_type'=>$request->award_type,
            'email'=>$request->email,
            'additional_info'=>$request->additional_info,
            'subject'=>'British Tamil Awards Night - Application Request',
        );

        $to 		= 'info@tamilchamberofcommerce.org.uk';
        $from		= $data['email'];
        $subject	= $data['subject'];

        $message="<html>
			<head>
			<title>".$data['full_name']." - ".$data['business_name']. "- BTCC</title>
			</head>
			</html>
			<body style='background-color:#f2f2f2;'>
			<div>
			<h2 style='color:#1cb2ff; text-align: justify;'>$subject</h2>
			<div style='margin-top:-15px !important;'>
            <p style='text-align: justify; padding-top:-25px;'>Hi... You've got a request from " .$data['full_name']."!<br/></p></div>
			<table style='margin-left:12px; border-collapse: collapse;width: 100%;'>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Full Name </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['full_name']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Business Name </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['business_name']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Business Address </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['business_address']."</td>
			  </tr>
			  <tr>
				<td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Award Type </td>
				<td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['award_type']."</td>
			  </tr>
              <tr>
                <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Email </td>
                <td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['email']."</td>
              </tr>
              <tr>
                <td style='border-bottom: 1px solid #ddd;height: 50px;font-weight:bold;color:#1e2e67;'>Additional Info </td>
                <td style='border-bottom: 1px solid #ddd;height: 50px;'>".$data['additional_info']."</td>
              </tr>
			</table>
			</body>
			</html>";

        // Mail For admin
        $headers =  'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: '.$data['full_name'].' <'.$data['email'].'>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $sentMailResult = mail($to,$subject,$message,$headers);

        if($sentMailResult )
        {
            return redirect()->back()->with('flash_success', 'Your contact request has been accepted! We will contact you soon as possible.');
        }
        else
        {
            return redirect()->back()->with('flash_success', 'Sorry but the email could not be sent. Please go back and try again!');
        }
    }
}
