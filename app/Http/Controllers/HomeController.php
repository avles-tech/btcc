<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Returning latest 8 popular hotel deals
        $posts = Post::select('posts.id', 'posts.author_id', 'posts.category_id', 'posts.title', 'posts.seo_title', 'posts.excerpt', 'posts.image', 'posts.slug', 'posts.status', 'posts.created_at', 'posts.updated_at', 'categories.name')
            ->where('status', 'PUBLISHED')
            ->leftJoin('categories','categories.id','=','posts.category_id')
            ->orderBy('posts.created_at', 'desc')
            ->take(3)
            ->get();

        $data=array(
            'page_title'=>'British Tamil Chamber of Commerce | Unite & Excel',
            'description'=>"BTCC provides marketing opportunities, advices, information, networking, guidance on financial, legal, Tax, HR, IT and various other relevant topics, Job Portal and professional services to Tamil businesses in the United Kingdom.",
            'keywords'=>"British Tamil Chamber of Commerce, BTCC, Tamil Business, London Tamil, Business",
            'abstract'=>"British Tamil Chamber of Commerce Home",
            'posts'=>$posts
        );
        return view('pages.index')->with($data);
    }
}
