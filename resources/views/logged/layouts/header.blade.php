<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/all.min.css')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/image/favicon-32x32.png')}}">
    <title>RealEsto - An Online Real Estate Marketplace</title>
</head>
<body>
    <header>
        <a href="{{url('/admin')}}" class="logo">RealEsto</a>
        <nav class="navbar">
            <a class="{{Request::is('/admin')?'active':'';}}" href="{{url('/admin')}}">Home</a>
            <a class="{{Request::is('/admin/buy')?'active':'';}}" href="{{url('/admin/buy')}}">Buy</a>
            <a class="{{Request::is('/admin/sell')?'active':'';}}" href="{{url('/admin/sell')}}">Sell</a>
            {{-- <a class="{{Request::is('/admin/rent')?'active':'';}}" href="{{url('/rent')}}">Rent</a> --}}
            <a class="{{Request::is('/admin/about')?'active':'';}}" href="{{url('/admin/about')}}">About</a>
            <a class="{{Request::is('/admin/contact')?'active':'';}}" href="{{url('/admin/contact')}}">Contact</a>
        </nav>
        <div class="icons">
            <a href="{{url('/dashboard')}}" class="btn">Dashboard</a>
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    </header>