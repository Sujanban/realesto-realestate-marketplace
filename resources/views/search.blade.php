@extends('frontend.layouts.main')
@section('main-container')
    <!-- --------------------------------------------Header Section Ends Here---------------------------------------- -->
    <!-- ----------Header Section Ends Here--------- -->
    <div class="buy_banner">
        <div>
            <h1>Search for Property Here</h1>
            <form action="/search">
                <input class="search" name="query" type="text" placeholder="Search By Title or Location"
                    aria-label="Search">
                <i><button class="btn" type="submit">Search</button></i>
            </form>
        </div>
    </div>
    <!-- -----------------------------------------featured listing (BUY PAGE) section ends here---------------------------------- -->
    <div class="featured_listing">
        <h1>Result of Available Properties</h1>
        <div class="card">
            @foreach ($posts as $post)
                <div class="featured_listing_card">
                    <div class="listing_card_image">
                        <a href="/property/{{ $post->slug }}">
                            <img src="{{ asset('cover/' . $post->cover) }}">
                        </a>
                    </div>
                    <div class="featured_listing_card_info">
                        <a href="/property/{{ $post->slug }}">{{ $post->title }}</a>
                        <hr>
                        <h3>Price: ${{ $post->price }}</h3>
                        <hr>
                        <p>Location: {{ $post->location }}</p>
                        <p>Area: {{ $post->area }}</p>
                        <p>Beds: {{ $post->bedroom }} Baths: {{ $post->bathroom }} Garages: {{ $post->garage }} Kitchen: {{ $post->kitchen }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- -----------------------------------------featured listing ends here---------------------------------- -->
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
@endsection
