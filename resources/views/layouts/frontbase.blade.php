<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("title")</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css"> -->
    @yield("head")
</head>

<body>
@include("home.header")

@section('sidebar')

@show

@section('slider')

@show

    @yield('content')


@include("home.footer")
@yield('foot')
</body>
</html>
