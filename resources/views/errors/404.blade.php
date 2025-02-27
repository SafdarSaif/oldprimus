@extends('front.layouts.main')

@section( 'title' ,'404 - Oops, Page Not Found')
@section('description', 'Primus Vidya')
@section('styles')
<link href="/web-assets/css/styles-404.css" rel="stylesheet" rel="preload" as="style">
@endsection
@section('content')

<section>
    <div class="section banner-4 banner-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1 class="mb-3 content-1 h5 text-white">Oops! <span class="tx-info-dark position-relative">Page Not Found<span class="br-bottom-before"></span></span></h1>
                        <p class="mb-0 content-2">The page you are trying to access is not a valid page. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('front.parts.universityCarousel')


@endsection

@section('scripts')
@endsection