@extends('frontend.layouts.main')
@section('main-container')
    <!-- --------------------------------------------Header Section Ends Here---------------------------------------- -->
    <div class="about_banner">
        <div>
            <h1>About Us</h1>
            <i><a href="index.html">Home</a> / About Us</i>
        </div>
    </div>
    <div class="goals_info">
        <div class="goals">
            <h2>Our Goals</h2>
            <p>We are providing free realestate marketplace for your house and property where anyone can buy and sell thei property without searching for broker.</p>
            <p> &#10004; &nbsp; Provide Free Marketplace for your Realestate</p>
            <p> &#10004; &nbsp; No middle man between Buyers and sellers.</p>
            <p> &#10004; &nbsp; Improve customer satisfaction through better service</p>
            <p> &#10004; &nbsp; Update the outdated way of doing realestate business</p>
            <p> &#10004; &nbsp; Provide easy interface to users</p>
            <p> &#10004; &nbsp; Help customer find their desired property</p>
        </div>
        <div class="goal_img">
            <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/256/undefined/external-goal-business-kiranshastry-lineal-kiranshastry.png"/>
        </div>
    </div>
    <div class="member_infos">
        <h1>Who are we?</h1>
        <div class="member_info">
            <div class="user">
                <img src="{{url('frontend/image/profile1.jpg')}}">
                <div>
                    <h2>Sujan Ban</h2>
                    <p>FrontEnd Developer</p>
                    <p></i><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i><i class="fa fa-linkedin"></i></p>
                </div>
            </div>
            <div class="user">
                <img src="{{url('frontend/image/profile2.jpg')}}">
                <div>
                    <h3>Amrit Raya</h3>
                    <p>Backend Developer</p>
                    <p><i class="fa fa-twitter"></i><i class="fa fa-instagram"></i><i class="fa fa-linkedin"></i></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- -----------------------------------------Footer section starts here---------------------------------- -->
    @endsection