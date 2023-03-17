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
                                <li class="breadcrumb-item"><a href="{{ url('posts/'.$category->slug) }}"> {{ $category->name }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="/images/headers/curve-5.png" alt="curve-background">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 title">
                    <h2>{{ $post->title }}</h2>
                    <h4>{{ $post->updated_at }}</h4>
                </div>
            </div>
            <div class="row m-space image-fw">
                <div class="col-md-12">
                    <img src="{{ Voyager::image($post->image) }}" alt="BTCC - {{ $post->title }}">
                </div>
            </div>
            <div class="row m-space">
                <div class="col-md-12">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </section>

@endsection
@section('extra_script')
@endsection
