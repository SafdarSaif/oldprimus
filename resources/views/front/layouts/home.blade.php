<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-hover" data-theme-mode="light">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=1'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Primusvidya - @yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:image" content="https://www.primusvidya.com/web-assets/images/main/primus.jpg" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:site_name" content="Primus Vidya" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://www.primusvidya.com/web-assets/images/main/primus.jpg" />
    <meta property="twitter:domain" content="https://www.primusvidya.com/">
    <meta property="twitter:url" content="{{ URL::current() }}">
    <meta name="twitter:title" content="Primusvidya - @yield('title')">
    <meta name="twitter:description" content="@yield('description')" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="15 minutes" />
    <title>Primusvidya - Most Trusted Education Consultancy in Regular/Online higher education</title>
    <meta name="description" content="Primusvidya is known as one of the best learning platform of india">
    <link rel="canonical" href="{{ URL::current() }}" />
    <link rel="icon" href="/web-assets/images/main/favicon.ico" type="image/x-icon">
    <!-- STYLE CSS -->
    <link id="style" href="/web-assets/css/styles-home.css?=1.0" rel="stylesheet" rel="preload" as="style">
    <link href="/web-assets/css/icons.css" rel="stylesheet" rel="preload" as="style">
    <link rel="stylesheet" href="/web-assets/libs/swiper/swiper-bundle.min.css" rel="preload" as="style">
    <link rel="preload" as="image" href="/web-assets/images/backgrounds/2.webp">


    @yield('styles')
    @yield('scripts-top')

    @include('front.panels.header-bottom')
    @include('front.panels.menu')
    @yield('content')
    @include('front.panels.footer-top')
    @yield('scripts')
    @include('front.panels.footer-bottom')