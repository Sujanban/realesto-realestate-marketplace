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
        <a href="{{url('/')}}" class="logo">RealEsto</a>
        <nav class="navbar">
            <a class="{{Request::is('/')?'active':'';}}" href="{{url('/')}}">Home</a>
            <a class="{{Request::is('buy')?'active':'';}}" href="{{url('/buy')}}">Buy</a>
            <a class="{{Request::is('sell')?'active':'';}}" href="{{url('/sell')}}">Sell</a>
            {{-- <a class="{{Request::is('rent')?'active':'';}}" href="{{url('/rent')}}">Rent</a> --}}
            <a class="{{Request::is('about')?'active':'';}}" href="{{url('/about')}}">About</a>
            <a class="{{Request::is('contact')?'active':'';}}" href="{{url('/contact')}}">Contact</a>
        </nav>
        <div class="icons">
            <a href="{{url('/dashboard')}}" class="btn">Dashboard</a>
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    </header>
    <!-- --------------------------------------------Header Section Ends Here---------------------------------------- -->
    <div class="hero">
        <div class="hero-info">
            <h1>Discover Your Real Estate</h1>
            <form>
                <input class="search" type="search" placeholder="Search Location, Appartments, Complex etc"
                    aria-label="Search">
                <i><button class="btn" type="submit">Search</button></i>
            </form>
        </div>
    </div>
    <!-- --------------------------------------------Hero Section Ends Here--------------------------------------- -->
    <div class="stats">
        <div>
            <h1>70+</h1>
            <p>Appartments</p>
        </div>
        <div>
            <h1>300+</h1>
            <p>Locations</p>
        </div>
        <div>
            <h1>550+</h1>
            <p>Happy Customers</p>
        </div>
        <div>
            <h1>100+</h1>
            <p>property Listed</p>
        </div>
    </div>
    <!-- --------------------------------------------stats Section ends Here--------------------------------------- -->
    <!-- --------------------------------------------service section starts here--------------------------------------- -->
    <div class="service">
        <div class="service_info">
            <h1>It Makes Us The Preferred Choice</h1>
            <p>Whether you’re buying, selling or renting, we can help you move forward.</p>
        </div>
        <div class="service_img">
            <div>
                <img
                    src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/128/000000/external-house-rental-property-xnimrodx-lineal-xnimrodx-7.png" />
            </div>
            <div>
                <img
                    src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/128/000000/external-key-rental-property-xnimrodx-lineal-xnimrodx-2.png" />
            </div>
            <div>
                <img
                    src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/128/000000/external-apartment-rental-property-xnimrodx-lineal-xnimrodx.png" />
            </div>
            <div>
                <img
                    src="https://img.icons8.com/external-xnimrodx-lineal-xnimrodx/128/000000/external-broker-rental-property-xnimrodx-lineal-xnimrodx.png" />
            </div>
        </div>
    </div>
    <!-- -----------------------------------------service section ends here---------------------------------- -->
    <!-- -----------------------------------------featured listing section ends here---------------------------------- -->
    <div class="featured_listing">
        <h1>Our Featured Listings</h1>
        <div class="card">
            @foreach ($posts as $post)
                <div class="featured_listing_card">
                    <div class="listing_card_image">
                        <img src="{{ asset('cover/' . $post->cover) }}">
                    </div>
                    <div class="featured_listing_card_info">
                        <div class="property_title">
                            <a href="/post/{{ $post->slug }}">Sea Breeze</a>
                            <h2>$150,000</h2>
                        </div>
                        <p>House for families, Luxuary</p>
                        <p>Area: 76.87</p>
                        <p>Beds: 3 Baths: 3 Garages: 1</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="featured_btn ">
            <a href="{{ url('/buy') }}" class="btn">Read More</a>
        </div>
    </div>


    <!-- -----------------------------------------featured listing ends here---------------------------------- -->
    <!-- -----------------------------------------rental banner section starts here---------------------------------- -->
    <div class="rental_banner">
        <div class="rental_banner_img">
            <img src="{{ url('frontend/image/heroimg.jpg') }}">
        </div>
        <div class="rental_banner_info">
            <h1>Want to List Your Propery</h1>
            <p>follow me</p>
            <p>Click on the button below and you will be redirected to our sell section. Follow the simple steps and you
                will be able to sell your properties in a second without any fees and commission.</p>
            <a href="{{ url('/sell') }}" class="btn">Start!</a>
        </div>
    </div>
    <!-- -----------------------------------------rental banner section ends here---------------------------------- -->
    <!-- -----------------------------------------rent property section starts here---------------------------------- -->
    <div class="featured_listing">
        <h1>Other Properties</h1>
        <div class="card">
            @foreach ($posts as $post)
                <div class="featured_listing_card">
                    <div class="listing_card_image">
                        <img src="{{ asset('cover/' . $post->cover) }}">
                    </div>
                    <div class="featured_listing_card_info">
                        <div class="property_title">
                            <a href="/post/{{ $post->slug }}">Sea Breeze</a>
                            <h2>$150,000</h2>
                        </div>
                        <p>House for families, Luxuary</p>
                        <p>Area: 76.87</p>
                        <p>Beds: 3 Baths: 3 Garages: 1</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="featured_btn ">
            <a href="{{ url('/buy') }}" class="btn">Read More</a>
        </div>
    </div>


    <!-- -----------------------------------------rent property ends here---------------------------------- -->
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
@include('frontend.layouts.script')
@include('frontend.layouts.footer')