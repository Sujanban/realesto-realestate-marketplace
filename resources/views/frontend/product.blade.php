@extends('frontend.layouts.main')
@section('main-container')
    <div class="outer-slider">
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{ url('frontend/image/feature5.jpg') }}">
            </div>
            <div class="item">
                <img src="{{ url('frontend/image/feature4.jpg') }}">
            </div>
            <div class="item">
                <img src="{{ url('frontend/image/floor_plan.png') }}">
            </div>
            <div class="item">
                <img src="{{ url('frontend/image/feature4.jpg') }}">
            </div>
            <div class="item">
                <img src="{{ url('frontend/image/feature5.jpg') }}">
            </div>
        </div>
    </div>
    @foreach ($posts as $post)
        <div class="product_info">
            <h2>{{ $post->title }}</h2>
            <h3>Posted By: <i>{{ $post->author }}</i></h3>
            <h3>Location: <i>{{ $post->location }}</i></h3>
            <h3>Area: <i>{{ $post->area }}</i> </h3>
            <h3>Price: <i>{{ $post->price }}</i> </h3>
            <h3>About Property</h3>
            <p>{{ $post->body }}</p>
            <h3>Defining Features</h3>
            <li>{{ $post->feature }}</li>
            <br><br>
            <p>
                Disclaimer: All information contained herewith, have been obtained from sources we believe to be reliable;
                however, we cannot guarantee its accuracy. The information contained herewith should not be relied upon and
                you should make your own enquiries and seek advice in respect of this property or any property on this
                website.</p><br><br>

            <div class="property_features">
                <h3>Property Features</h3>
                <div class="property_feature">
                    <img src="{{ url('frontend/image/room.png') }}" height="50px">&nbsp;&nbsp;<h4>{{ $post->bedroom }}
                        Bedrooms</h4>
                </div>
                <div class="property_feature">
                    <img src="{{ url('frontend/image/washroom.png') }}" height="50px">&nbsp;&nbsp;<h4>
                        {{ $post->washroom }} Shower/ Washroom
                    </h4>
                </div>
                <div class="property_feature">
                    <img src="{{ url('frontend/image/garage.png') }}" height="50px">&nbsp;&nbsp;<h4>
                        {{ $post->kitchen }} Kitchen
                    </h4>
                </div>
                <div class="property_feature">
                    <img src="{{ url('frontend/image/kitchen.png') }}" height="50px">&nbsp;&nbsp;<h4>
                        {{ $post->garage }} Vehivle Garage
                    </h4>
                </div>
            </div>
            <div class="product_contact">
                <h3>Contact Owner</h3>
                <p>{{ $post->contact }}</p>

                {{-- <p>You need to <a href="{{url('/login')}}">Login</a> first in order to schedule a visit.</p> --}}
            </div>

        </div>
    @endforeach
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
@endsection
