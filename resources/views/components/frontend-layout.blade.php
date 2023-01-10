<!doctype html>
    @props(['context'])
<html lang="{{ 'en'}}">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ $page->title ?? "" }} &mdash; Stella Futura</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/favicon.png')}}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>

    {{-- Custom Styles --}}
    <style>

        .banner-area{
            /* height:50px; */
            margin-top:50px !important;
        } 

        .header-area.header-3-area .navigation .navbar .navbar-toggler{
            border:none !important;
        }

        .navbar-brand a img {
            padding:10px !important;
        }
        
    </style>

    <x-header />
   
     {{$slot}}

      <x-footer />

</html>
