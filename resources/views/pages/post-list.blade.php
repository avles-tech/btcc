@extends('layouts.app')
@section('extra_css')
    <!-- Additional Css -->
@endsection
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">{{ $category->name }}</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $category->name }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-bg">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <section>
        <div class="container">
                <!-- Blog -->
            <div class="row">

                @if(count($posts) < 1)
                    <div class="blog-item">
                        <div class="article">
                            <h5 class="author">No Results Found</h5>
                        </div>
                    </div>
                @else
                    @foreach($posts AS $k => $post)
                        <div class="col-md-4">
                            <div class="blog-item">
                                <div class="thumb1">
                                    <a href="{{ url('blog-and-news/'.$post->slug) }}">
                                        <img class="img-responsive blog-img" src="{{ Voyager::image($post->image) }}" alt="BTCC Post - {{ $post->title }}">
                                    </a>
                                </div>
                                <div class="article">
                                    <span class="tag">{{ $post->name }}</span>
                                    <a href="{{ url('blog-and-news/'.$post->slug) }}">
                                        <p>{{ $post->updated_at }}</p>
                                        <h3>{{ $post->title }}</h3>
                                    </a>
                                    <p class="ptext">{{ str_limit($post->excerpt, $limit = 125, $end = '...') }}</p>
                                    <hr>
                                    <h5 class="author">By Admin</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="row">
                <div class="pagination">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')
@endsection
