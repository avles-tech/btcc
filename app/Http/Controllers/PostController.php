<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function show_all(Request $request)
    {

        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.blog-list',
            [
                'page_title'    => 'Blog Posts',
                'posts'         => $posts
            ]);
    }
    public function show_category(Request $request)
    {
        $category = Category::where('slug',  $request->slug)
            ->firstOrFail();

        //Returning blogs
        $posts = Post::where('status', 'PUBLISHED')
            ->where('category_id', $category->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pages.post-list',
            [
                'page_title'    => 'Posts by BTCC',
                'posts'         => $posts,
                'category'      => $category
            ]);
    }

    public function show_single(Request $request)
    {
        //Returning blogs
        $post = Post::where('status', 'PUBLISHED')
            ->where('slug', $request->slug)
            ->firstOrFail();

        $category = Category::where('id', $post['category_id'])
            ->firstOrFail();

        return view('pages.post-single',
            [
                'page_title'        => $post->title,
                'post'              => $post,
                'category'     => $category,
                'keywords'          => $post->meta_keywords,
                'description'       => $post->meta_description
            ]);
    }
}
