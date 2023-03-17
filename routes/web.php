<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


Route::group(['prefix' => 'btcc-back-office'], function () {
    Voyager::routes();
});

//App routes
Route::get('/','HomeController@index')->name('home');
Route::get('/uk/tamil-heritage-month','PageController@tamil_heritage_month');
Route::get('/uk/{slug}', 'PageController@landing_page');
Route::get('/blog-and-news/{slug}','PostController@show_single');
Route::get('/posts/{slug}','PostController@show_category');
Route::get('/members','PageController@members')->name('members');
Route::get('/members/list/{slug}','PageController@member_category');
Route::get('/members/business/{slug}','PageController@company_view');
Route::get('/members/list-all-members','PageController@list_all_members')->name('list_all_members');
Route::get('/classified-ads/{slug}','PageController@classifieds');
Route::get('/classified_ads/{business_slug}/{ad_slug}','PageController@classified_ad_view');
Route::get('/membership-type','PageController@membership_type');


Route::get('/about-us','PageController@about_us')->name('about');
Route::get('/advice','PageController@advice')->name('advice');
Route::get('/introduction','PageController@introduction')->name('introduction');
Route::get('/investment','PageController@investment')->name('investment');
Route::get('/government.','PageController@government')->name('government');
Route::get('/job-portal','PageController@job_portal')->name('job_portal');
Route::get('/advertisements','PageController@advertisements')->name('advertisements');
Route::get('/services','PageController@services')->name('services');
Route::get('/tamil-business-offers','PageController@tamil_business_offers')->name('tamil_business_offers');
Route::get('/bookings/london-tamil-market/{stall}','BookingController@ltm_reservation');
Route::post('/london-tamil-market/reserve','BookingController@stall_reservation');
Route::get('/london-tamil-market','PageController@london_tamil_market')->name('london_tamil_market');
Route::get('/london-tamil-market-2023','PageController@london_tamil_market2023')->name('london-tamil-market-2023');
Route::get('/london-tamil-market-2020','PageController@london_tamil_market2020')->name('london-tamil-market-2020');
Route::get('/london-tamil-market-2019','PageController@london_tamil_market2019')->name('london-tamil-market-2019');
Route::get('/london-tamil-market-2018','PageController@london_tamil_market2018')->name('london-tamil-market-2018');
Route::get('/london-tamil-market-2017','PageController@london_tamil_market2017')->name('london-tamil-market-2017');
Route::get('/london-tamil-market-2016','PageController@london_tamil_market2016')->name('london-tamil-market-2016');
Route::get('/london-tamil-market-2015','PageController@london_tamil_market2015')->name('london-tamil-market-2015');
Route::get('/london-tamil-market-stall-booking','PageController@london_tamil_market_stall_booking');
Route::get('/job','PageController@job')->name('job');

Route::get('/events','PageController@events')->name('events');
Route::get('/contact-us','PageController@contact')->name('contact');
Route::get('/terms-and-conditions','PageController@terms');
Route::get('/search', 'PageController@search');
Route::get('/sitemap','PageController@sitemap')->name('sitemap');
Route::post('send-contact-request','PageController@send_contact_request');
//Route::get('/british-tamil-awards-night','PageController@btcc_awards_night')->name('british_tamil_awards_night');
//Route::post('request-awards-application','PageController@request_awards_application');

//Manage
Route::group(['prefix' => 'member',  'middleware' => 'auth'],function () {
    Route::get('home', 'ManageController@index');
    Route::post('become', 'ManageController@register_member');
    Route::get('business', 'ManageController@business');
    Route::post('business/add-new', 'ManageController@business_add');
    Route::get('ads', 'ManageController@ads');
    Route::post('ads/add-new', 'ManageController@ads_add');
});
