@extends('logged.layouts.main')
@section('main-container')
    <!-- --------------------------------------------Header Section Ends Here---------------------------------------- -->
    <!-- ----------Header Section Ends Here--------- -->
    <div class="buy_banner">
        <div>
            <h1>Search for Property Here</h1>
            <form>
                <input class="search" type="search" placeholder="Search Location, Appartments, Complex etc"
                    aria-label="Search">
                <i><button class="btn" type="submit">Search</button></i>
            </form>
        </div>
    </div>
    <!-- -----------------------------------------featured listing (BUY PAGE) section ends here---------------------------------- -->
    <div class="featured_listing">
        <h1>Available Properties</h1>
        <div class="card">
            @foreach ($posts as $post)
                <div class="featured_listing_card">
                    <div class="listing_card_image">
                        <a href="/admin/property/{{ $post->slug }}">
                            <img src="{{ asset('cover/' . $post->cover) }}">
                        </a>
                    </div>
                    <div class="featured_listing_card_info">
                        {{-- <a href="{{ url('/buy/product') }}">{{ $post->title }}</a> --}}
                        <a href="/admin/property/{{ $post->slug }}">{{ $post->title }}</a>
                        {{-- /post/edit/{{ $post->id }} --}}
                        <hr>
                        <h3>${{ $post->price }}</h3>
                        <hr>
                        <p>Location: {{ $post->location }}</p>
                        <p>Area: {{ $post->area }}</p>
                        {{-- <p>Beds: 3 Baths: 3 Garages: 1</p>
                        <p>825 Casanova Ave, Monterey, CABeverly Hills</p>
                        <p>Agent:Added: 24.04.19</p> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- -----------------------------------------featured listing ends here---------------------------------- -->
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
@endsection
