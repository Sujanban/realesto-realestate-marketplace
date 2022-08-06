@extends('logged.layouts.main')
@section('main-container')
    <!-- ----------Header Section Ends Here--------- -->
    <div class="contact_banner">
        <div>
            <h1>List Your Property for sell</h1>
            <i><a href="{{url('/')}}">Home</a> / Sell</i>
        </div>
    </div>
    <!-- --------------------------------------------sell page main section starts here--------------------------------------- -->
    <div class="sell_wraper">
        <div class="sell_info">
            <h1>How It Works</h1>
            <p>Follow the following steps in order to list your property for sell.</p>
            <div class="sell_card_wraper">
                <div class="sell_card">
                    <img src="{{url('frontend/image/login.png')}}">
                    <h2>Form Fillup</h2>
                    <p>Just Click the Link below and Fillup the Form.<br> <a href="https://forms.gle/itZnmuJNiEfRMTTn8">Form Link</a></p>
                </div>
                <div class="sell_card">
                    <img src="{{url('frontend/image/property.png')}}">
                    <h2>List Property</h2>
                    <p>Our Admin will Review your document and List for Selling if all the Information is filluped as required.</p>
                </div>
                <div class="sell_card">
                    <img src="{{url('frontend/image/hand.png')}}">
                    <h2>Get Deal</h2>
                    <p>Once your property get listed then viewer can contact you for making a Deal</p>
                </div>
            </div>
        </div>
    </div>
    <!-- --------Footer section starts here--------- -->
@endsection