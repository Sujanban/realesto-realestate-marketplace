@extends('frontend.layouts.main')
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
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature1.jpg')}}">
                <div class="featured_listing_card_info">
                	<div class="property_title">
                		<a href="{{url('/product')}}">Sea Breeze</a>
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
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature8.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                		<a href="{{url('/product')}}">Vista</a>
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
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature3.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                		<a href="{{url('/product')}}">Sunrise</a>
                		<h2>$125,000</h2>
                	</div>
                    <p>luxury, penthouse</p>
                    <p>Area: 124.89</p>
                    <hr>
                    <p>Beds: 4   Baths: 4   Garages: 1</p>
                    <hr>
                    <p>825 Casanova Ave, Monterey, CABeverly Hills</p>
                    <hr>
                    <p>Agent:Added: 24.04.19</p>
                </div>
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature4.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                		<a href="{{url('/product')}}">Paradise</a>
                		<h2>$750,000</h2>
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
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature5.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                		<a href="{{url('/product')}}">White Queen</a>
                		<h2>$1,000,000</h2>
                	</div>
                    <p>luxury, penthouse</p>
                    <p>Area: 76.87</p>
                    <hr>
                    <p>Beds: 3   Baths: 3   Garages: 1</p>
                    <hr>
                    <p>825 Casanova Ave, Monterey, CABeverly Hills</p>
                    <hr>
                    <p>Agent:Added: 24.04.19</p>
                </div>
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature6.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                		<a href="{{url('/product')}}">Monterey</a>
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
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature8.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                        <a href="{{url('/product')}}">Vista</a>
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
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature1.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                        <a href="{{url('/product')}}">Sea Breeze</a>
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
            </div>
            <div class="featured_listing_card">
                <img src="{{url('frontend/image/feature6.jpg')}}">
                <div class="featured_listing_card_info">
                    <div class="property_title">
                        <a href="{{url('/product')}}">Monterey</a>
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
            </div>
        </div>
        <!-- <div class="featured_btn ">
            <a href="#" class="btn">View More</a>
        </div> -->
    </div>


    <!-- -----------------------------------------featured listing ends here---------------------------------- -->
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
    @endsection