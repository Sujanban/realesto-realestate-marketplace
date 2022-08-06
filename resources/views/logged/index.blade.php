@extends('logged.layouts.main')
@section('main-container')
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
                        <a href="/admin/property/{{ $post->slug }}">
                            <img src="{{ asset('cover/' . $post->cover) }}">
                        </a>
                    </div>
                    <div class="featured_listing_card_info">
                        <div class="property_title">
                            <a href="/admin/property/{{ $post->slug }}">Sea Breeze</a>
                            <h2>$150,000</h2>
                        </div>
                        <p>House for families, Luxuary</p>
                        <p>Area: 76.87</p>
                        <p>Beds: {{ $post->bedroom }} Baths: {{ $post->washroom }} Garages: {{ $post->garage }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="featured_btn ">
            <a href="{{ url('/admin/buy') }}" class="btn">Read More</a>
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
            <a href="{{ url('/admin/sell') }}" class="btn">Start!</a>
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
                        <a href="/admin/property/{{ $post->slug }}">
                            <img src="{{ asset('cover/' . $post->cover) }}">
                        </a>
                    </div>
                    <div class="featured_listing_card_info">
                        <div class="property_title">
                            <a href="/admin/property/{{ $post->slug }}">Sea Breeze</a>
                            <h2>$150,000</h2>
                        </div>
                        <p>House for families, Luxuary</p>
                        <p>Area: 76.87</p>
                        <p>Beds: {{ $post->bedroom }} Baths: {{ $post->washroom }} Garages: {{ $post->garage }}</p>
                    </div>
                </div>
            @endforeach
            {{-- <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature8.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                        <a href="{{url('/rent/product')}}">Vista</a>
                        <h2>$550,000</h2>
                    </div>
                    <p>luxury, penthouse</p>
                    <p>Area: 52.68</p>
                    <hr>
                    <p>Beds: 2   Baths: 2   Garages: 1</p>
                    <hr>
                    <p>825 Casanova Ave, Monterey, CABeverly Hills</p>
                    <hr>
                    <p>Agent:Added: 24.04.19</p>
                </div>
            </div> --}}
            {{-- <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature1.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                        <a href="{{url('/rent/product')}}">Sea Breeze</a>
                        <h2>$150,000</h2>
                    </div>
                    <p>House for families, Luxuary</p>
                    <p>Area: 76.87</p>
                    <hr>
                    <p>Beds: 3   Baths: 3   Garages: 1</p>
                    <hr>
                    <p>825 Casanova Ave, Monterey, CABeverly Hills</p>
                    <hr>
                    <p>Agent:Added: 24.04.19</p>
                </div>
            </div> --}}
            {{-- <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature6.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                        <a href="{{url('/rent/product')}}">Monterey</a>
                        <h2>$175,000</h2>
                    </div>
                    <p>House for families, Luxuary</p>
                    <p>Area: 76.87</p>
                    <hr>
                    <p>Beds: 3   Baths: 3   Garages: 1</p>
                    <hr>
                    <p>825 Casanova Ave, Monterey, CABeverly Hills</p>
                    <hr>
                    <p>Agent:Added: 24.04.19</p>
                </div>
            </div> --}}
        </div>
        <div class="featured_btn ">
            <a href="{{ url('/admin/buy') }}" class="btn">Read More</a>
        </div>
    </div>


    <!-- -----------------------------------------rent property ends here---------------------------------- -->
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
@endsection
