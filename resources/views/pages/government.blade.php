@extends('layouts.app')
@section('extra_css')
@endsection
@section('content')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <p class="title-head">Government</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Government</li>
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

    <section class="iconblock grey">
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <h2 class="text-uppercase">Government</h2>
                    <div class="title-border"></div>
                    <p>Have your say on business issues and take those views to the right people for action and be heard by government and larger organisations.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('extra_script')

@endsection
