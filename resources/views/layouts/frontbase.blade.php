<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Beyza ALTINTAS">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">

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
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets2')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{asset('assets2')}}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{asset('assets2')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets2')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('assets2')}}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{asset('assets2')}}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets2')}}/css/style.css" rel="stylesheet">
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
