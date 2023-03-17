<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LtmStall;

class BookingController extends Controller
{
    public function ltm_reservation(Request $request){

        $stall_id = base64_decode($request->stall);
        //get all available stalls
        $stall = LtmStall::where('year', env('LTM_YEAR'))
            ->where('status', 'Available')
            ->where('id', $stall_id)
            ->firstOrFail();

        session(['stall_encrypted' => $request->stall]);
        $js = ['bookings.js'];

        $data =array(
            'page_title' => 'London Tamil Market '.env('LTM_YEAR').' :: British Tamil Chamber of Commerce',
            'description' => "London Tamil Market Showcasing Tamil Businesses from all sectors with a huge range of products and services with entertainment to all ages and delicious Tamil cuisine.",
            'keywords' => "London Tamil Market, BTCC, Tamil Business, London Tamil, Business, Trade Show, Tamil Trade Show",
            'abstract' => "London Tamil Market Events",
            'stall' => $stall,
            'js' => $js
        );
        return view('bookings.ltm_reservation')->with($data);
    }

    public function stall_reservation(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'organisation' => 'required'
        ]);

        $stall_encrypted_id = $request->session()->get('stall_encrypted');
        $stall_id = base64_decode($stall_encrypted_id);

        //get all available stalls
        $stall_check = LtmStall::where('year', env('LTM_YEAR'))
            ->where('status', 'Available')
            ->where('id', $stall_id)
            ->firstOrFail();

        //update company details
        $stall_check->contact_person_name   = $request->name;
        $stall_check->organisation_name     = $request->organisation;
        $stall_check->email                 = $request->email;
        $stall_check->phone                 = $request->phone;
        $stall_check->status                = 'Reserved';

        $stall_check->save();

        //Telegram Update
        $now_date = date('Y-m-d H:i:s');

        //Success order telegram notification
        $text = '*New LTM Stall Reservation!*'.chr(10).chr(10).
            'Contact Person: '.$request->name.chr(10).
            'Organisation: '.$request->organisation.chr(10).
            'Email: '.$request->email.chr(10).
            'Phone: '.$request->phone.chr(10).
            'Organisation: '.$request->organisation.chr(10).chr(10).
            '--- Stall Details ---'.chr(10).
            'Stall ID: '.$stall_id.chr(10).
            'Stall Name (#): '.$stall_check->stall_name.' ('.$stall_check->stall_number.')'.chr(10).
            'Member Price: '.$stall_check->member_price.chr(10).
            'Non-Member Price: '.$stall_check->non_member_price.chr(10).
            'Year: '.env('LTM_YEAR').chr(10).chr(10).
            '--- Member Details ---'.chr(10);

        if(isset($request->is_member)){
            $text .= 'Member Status: '.$request->is_member.chr(10);
        }
        if(isset($request->become_member)){
            $text .= 'Become Member: '.$request->become_member.chr(10);
        }
        if(isset($request->all_three)){
            $text .= 'New Member Conditions: '.$request->all_three.chr(10);
        }
        if(isset($request->message)){
            $text .= 'Additional Message: '.chr(10).$request->message.chr(10);
        }

        $data = [
            'parse_mode' => 'Markdown',
            'chat_id' => '-375898798',
            'text' => $text
        ];

        $telegram_response = file_get_contents(env('COM_TELEGRAM')."/sendMessage?" . http_build_query($data) );

        //reservation success text to user
        $flash_success = "Thank you ".$request->name." Your Stall for London Tamil Market - ".env('LTM_YEAR')." has been reserved. One of our representative will contact you shortly.";
        session(['flash_success' => $flash_success]);

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
}
