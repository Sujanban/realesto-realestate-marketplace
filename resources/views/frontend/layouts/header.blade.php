<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/css/all.min.css') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('frontend/image/favicon-32x32.png') }}">
    <title>RealEsto - An Online Real Estate Marketplace</title>
</head>

<body>
    <header>
        <a href="{{ url('/') }}" class="logo">RealEsto</a>
        <nav class="navbar">
            <a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
            <a class="{{ Request::is('buy') ? 'active' : '' }}" href="{{ url('/buy') }}">Buy</a>
            <a class="{{ Request::is('sell') ? 'active' : '' }}" href="{{ url('/sell') }}">Sell</a>
            <a class="{{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
            @if(@Auth::check())
            <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
            @else
            {{-- <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact Us!</a> --}}
            @endif
        </nav>
        <div class="icons">


            @if (Auth::check())
            <a href="{{url('/dashboard')}}" class="btn">Dashboard</a>
            @else
            <a class="{{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact Us!</a>
            @endif


            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    </header>
