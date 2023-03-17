<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Member;
use App\MemberType;
use App\Business;
use App\BusinessCategory;
use App\ClassifiedAd;
use App\ClassifiedAdType;

class ManageController extends Controller
{
    public function index(){

        $member = Member::where('user_id', Auth::user()->id)
            ->get();
        //var_dump($member);exit;
        if(count($member)==0){
            $member['id']               = "Non-Business Member";
            $member['user_id']          = Auth::user()->id;
            $member['member_type_id']   = "Non-Business Member";
            $member['status']           = "NA";
            $member['comment']          = "NA";
            $member['created_at']       = "NA";
            $member['updated_at']       = "NA";
        }else{
            $member['id']               = $member[0]['id'];
            $member['user_id']          = $member[0]['user_id'];
            $member['member_type_id']   = $member[0]['member_type_id'];
            $member['status']           = $member[0]['status'];
            $member['comment']          = $member[0]['comment'];
            $member['created_at']       = $member[0]['created_at'];
            $member['updated_at']       = $member[0]['updated_at'];
        }

        $member_types = MemberType::select('title')
            ->get();

        $data=array(
            'page_title'=>'Member :: ' . Auth::user()->name . ' :: Dashboard',
            'description'=>"BTCC Member Control panel - Dashboard",
            'keywords'=>"BTCC, Business Offers, Sale, Job, Vacancy",
            'abstract'=>"Free Profile and business management",
            'member'=>$member,
            'member_types'=>$member_types,

        );

        return view('manage.home')->with($data);
    }

    public function register_member(Request $request){

        $validatedData = $request->validate([
            'member_type_id' => 'required'
        ]);

        $date = date('Y-m-d H:i:s');

        //saving member details
        $member = new Member;

        $member->user_id        = Auth::user()->id;
        $member->member_type_id = $request->member_type_id;
        $member->status         = "Inactive";
        $member->comment        = "Awaiting admin approval, Please contact BTCC for speed up validations.";
        $member->created_at     = $date;
        $member->updated_at     = $date;

        $member_check = Member::where('user_id', Auth::user()->id)
            ->get();
        //var_dump($member);exit;
        if(count($member_check)==0) {
            $member->save();
            //**********email has to be implemented
        }

        return redirect('member/home');

    }

    public function business(){

        $member = Member::where('user_id', Auth::user()->id)
            ->get();

        $businesses = Business::where('member_id',$member[0]['id'])
            ->get();

        if(count($member)==0){
            $member['id']               = "Non-Business Member";
            $member['user_id']          = Auth::user()->id;
            $member['member_type_id']   = "Non-Business Member";
            $member['status']           = "NA";
            $member['comment']          = "NA";
            $member['created_at']       = "NA";
            $member['updated_at']       = "NA";
        }else{
            $member['id']               = $member[0]['id'];
            $member['user_id']          = $member[0]['user_id'];
            $member['member_type_id']   = $member[0]['member_type_id'];
            $member['status']           = $member[0]['status'];
            $member['comment']          = $member[0]['comment'];
            $member['created_at']       = $member[0]['created_at'];
            $member['updated_at']       = $member[0]['updated_at'];
        }

        //get category details
        $business_categories = BusinessCategory::where('status', 'Active')
            ->orderBy('title')
            ->get();

        $data=array(
            'page_title'=>'BTCC Businesses',
            'description'=>"Business registered with BTCC",
            'keywords'=>"BTCC, Business Offers, Sale, Job, Vacancy",
            'abstract'=>"Business registered with BTCC",
            'member'=>$member,
            'businesses'=>$businesses,
            'business_categories'=>$business_categories,
        );

        return view('manage.business')->with($data);
    }

    public function business_add(Request $request){

        $validatedData = $request->validate([
            'business_category_id'          => 'required',
            'image'                         => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'business_name'                 => 'required',
            'comany_registration_number'    => 'required',
            'business_email'                => 'required',
            'business_telephone'            => 'required',
            'business_address'              => 'required',
            'postcode'                      => 'required',
            'business_city'                 => 'required',
            'registered_ack'                => 'required',
            'tamil_ack'                     => 'required',
            'age_ack'                       => 'required',
        ]);

        $date = date('Y-m-d H:i:s');

        //getting member id
        $member = Member::where('user_id', Auth::user()->id)
            ->get();
        $member_id = $member[0]['id'];

        //Create and check slug
        $business_name = str_replace(".","-",$request->business_name); //. are not converted to - like voyager
        $slug = str_slug($business_name);
        //var_dump($slug);exit;
        $is_slug = Business::where('slug', $slug)->get();
        //var_dump($is_slug);exit;

        if(count($is_slug)>0){
            return back()->withErrors('A similar business name is already available in our system. Please contact us for further support!')->withInput();
        }

        //Logo file save
        $add = date('MY');  //save inside a specific folder

        try {
            $logo_path = $request->file('image')->store('public\businesses\\'.$add);
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }

        $logo_path = str_replace('public\\', '', $logo_path);

        //saving company details
        $business = new Business;

        $business->image = $logo_path;
        $business->member_id = $member_id;
        $business->business_category_id = $request->business_category_id;
        $business->sector = $request->sector;
        $business->business_name = $request->business_name;
        $business->comany_registration_number = $request->comany_registration_number;
        $business->excerp_description = $request->excerp_description;
        $business->description = $request->description;
        $business->business_email = $request->business_email;
        $business->business_telephone = $request->business_telephone;
        $business->business_address = $request->business_address;
        $business->postcode = $request->postcode;
        $business->business_city = $request->business_city;
        $business->facebook = $request->facebook;
        $business->google = $request->google;
        $business->instagram = $request->instagram;
        $business->twitter = $request->twitter;
        $business->linkedin = $request->linkedin;
        $business->pinit = $request->pinit;
        $business->whatsapp = $request->whatsapp;
        $business->viber = $request->viber;
        $business->created_at = $date;
        $business->slug = $slug;
        $business->status = 'Inactive';

        $member_check = Member::where('user_id', Auth::user()->id)
            ->get();
        if(count($member_check)==1) {
            $business->save();
        }

        $member = Member::where('user_id', Auth::user()->id)
            ->get();

        $businesses = Business::where('member_id',$member[0]['id'])
            ->get();

        if(count($member)==0){
            $member['id']               = "Non-Business Member";
            $member['user_id']          = Auth::user()->id;
            $member['member_type_id']   = "Non-Business Member";
            $member['status']           = "NA";
            $member['comment']          = "NA";
            $member['created_at']       = "NA";
            $member['updated_at']       = "NA";
        }else{
            $member['id']               = $member[0]['id'];
            $member['user_id']          = $member[0]['user_id'];
            $member['member_type_id']   = $member[0]['member_type_id'];
            $member['status']           = $member[0]['status'];
            $member['comment']          = $member[0]['comment'];
            $member['created_at']       = $member[0]['created_at'];
            $member['updated_at']       = $member[0]['updated_at'];
        }

        //get category details
        $business_categories = BusinessCategory::where('status', 'Active')
            ->orderBy('title')
            ->get();

        $data=array(
            'page_title'=>'Businesses',
            'description'=>"Business registered with BTCC",
            'keywords'=>"BTCC, Business Offers, Sale, Job, Vacancy",
            'abstract'=>"Business registered with BTCC",
            'member'=>$member,
            'businesses'=>$businesses,
            'business_categories'=>$business_categories,
        );

        return view('manage.business')->with($data);
    }

    public function ads(){
        $member = Member::where('user_id', Auth::user()->id)
            ->get();

        $businesses = Business::where('member_id',$member[0]['id'])
            ->where('status','Active')
            ->get();

        if(count($businesses)==0){
            return back()->withErrors('You must have an active, registered business with us to post any Ads. Please contact us for further support!')->withInput();
        }

        //Classified ads by user
        foreach ($businesses AS $k => $business){
            $classified_ads[$k] = $business->classified_ads;
        }

        $classified_ad_types = ClassifiedAdType::where('status','Active')
            ->get();

        if(count($member)==0){
            $member['id']               = "Non-Business Member";
            $member['user_id']          = Auth::user()->id;
            $member['member_type_id']   = "Non-Business Member";
            $member['status']           = "NA";
            $member['comment']          = "NA";
            $member['created_at']       = "NA";
            $member['updated_at']       = "NA";
        }else{
            $member['id']               = $member[0]['id'];
            $member['user_id']          = $member[0]['user_id'];
            $member['member_type_id']   = $member[0]['member_type_id'];
            $member['status']           = $member[0]['status'];
            $member['comment']          = $member[0]['comment'];
            $member['created_at']       = $member[0]['created_at'];
            $member['updated_at']       = $member[0]['updated_at'];
        }

        //get category details
        $business_categories = BusinessCategory::where('status', 'Active')
            ->orderBy('title')
            ->get();

        $data=array(
            'page_title'=>'BTCC Ads',
            'description'=>"Ads Posted by BTCC Member",
            'keywords'=>"BTCC, Business Offers, Sale, Job, Vacancy",
            'abstract'=>"Ads Posted by BTCC Member",
            'member'=>$member,
            'businesses'=>$businesses,
            'business_categories'=>$business_categories,
            'classified_ads'=>$classified_ads,
            'classified_ad_types'=>$classified_ad_types,
        );

        return view('manage.ads')->with($data);
    }

    public function ads_add(Request $request){

        $validatedData = $request->validate([
            'business_id'   => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg|max:4096',
            'title'         => 'required',
            'from'          => 'required',
            'to'            => 'required',
            'age_ack'       => 'required',
        ]);

        $date = date('Y-m-d H:i:s');

        //Create and check slug
        $title = str_replace(".","-",$request->title); //. are not converted to - like voyager
        $slug = str_slug($title);
        //var_dump($slug);exit;
        $is_slug = ClassifiedAd::where('slug', $slug)->get();
        //var_dump($is_slug);exit;

        if(count($is_slug)>0){
            return back()->withErrors('A similar named ad is already available in our system. Please try different title or contact us for further support!')->withInput();
        }

        //Ad banner file save
        $add = date('MY');  //save inside a specific folder

        try {
            $ad_banner_path = $request->file('image')->store('public\classified-ads\\'.$add);
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessage())->withInput();
        }

        $ad_banner_path = str_replace('public\\', '', $ad_banner_path);

        //saving company details
        $classified_ad = new ClassifiedAd;

        $classified_ad->image = $ad_banner_path;
        $classified_ad->title = $request->title;
        $classified_ad->from = date('Y-m-d', strtotime($request->from));
        $classified_ad->to = date('Y-m-d', strtotime($request->to));
        $classified_ad->classified_ad_type_id = $request->classified_ad_type_id;
        $classified_ad->status = 'Inactive';
        $classified_ad->price = $request->price;
        $classified_ad->description = $request->description;
        $classified_ad->created_at = $date;
        $classified_ad->business_id = $request->business_id;
        $classified_ad->slug = $slug;

        $member_check = Member::where('user_id', Auth::user()->id)
            ->get();
        if(count($member_check)==1) {
            $classified_ad->save();
        }

        $member = Member::where('user_id', Auth::user()->id)
            ->get();

        $businesses = Business::where('member_id',$member[0]['id'])
            ->get();

        if(count($member)==0){
            $member['id']               = "Non-Business Member";
            $member['user_id']          = Auth::user()->id;
            $member['member_type_id']   = "Non-Business Member";
            $member['status']           = "NA";
            $member['comment']          = "NA";
            $member['created_at']       = "NA";
            $member['updated_at']       = "NA";
        }else{
            $member['id']               = $member[0]['id'];
            $member['user_id']          = $member[0]['user_id'];
            $member['member_type_id']   = $member[0]['member_type_id'];
            $member['status']           = $member[0]['status'];
            $member['comment']          = $member[0]['comment'];
            $member['created_at']       = $member[0]['created_at'];
            $member['updated_at']       = $member[0]['updated_at'];
        }

        //get category details
        $business_categories = BusinessCategory::where('status', 'Active')
            ->orderBy('title')
            ->get();
        //Classified ads by user
        foreach ($businesses AS $k => $business){
            $classified_ads[$k] = $business->classified_ads;
        }
        $classified_ad_types = ClassifiedAdType::where('status','Active')
            ->get();

        $data=array(
            'page_title'=>'BTCC Ads',
            'description'=>"Ads Posted by BTCC Member",
            'keywords'=>"BTCC, Business Offers, Sale, Job, Vacancy",
            'abstract'=>"Ads Posted by BTCC Member",
            'member'=>$member,
            'businesses'=>$businesses,
            'business_categories'=>$business_categories,
            'classified_ads'=>$classified_ads,
            'classified_ad_types'=>$classified_ad_types,
        );

        return view('manage.ads')->with($data);
    }
}
