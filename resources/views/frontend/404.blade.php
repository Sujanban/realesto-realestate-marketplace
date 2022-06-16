@extends('frontend.layouts.main')
@section('main-container')
    <!-- --------------------------------------------Header Section Ends Here---------------------------------------- -->
    <div class="e404_info">
        <div>
            <img src="{{url('frontend/image/404_img.png')}}">
            <h1>It Seems like this Page doesn't Exist.</h1>
            <p>Return to</p>
            <a href="{{url('/')}}" class="btn">Home</a>
        </div>
    </div>
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
    @endsection