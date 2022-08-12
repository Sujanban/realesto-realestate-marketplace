@extends('frontend.layouts.main')
@section('main-container')
    <!-- ----------Header Section Ends Here--------- -->
    <div class="contact_banner">
        <div>
            <h1>Contact Us</h1>
            <i><a href="{{ url('/') }}">Home</a> / Contact Us</i>
        </div>
    </div>
    <!-- --------------------------------------------Contact banner 2nd section starts here--------------------------------------- -->

    <div class="contact">
        <div class="service">
            <div class="service_img">
                <div>
                    <img src="{{ url('frontend/image/location_icon.png') }}">
                    <p>Province 1 - Sunsari, Nepal</p>
                </div>
                <div>
                    <img src="{{ url('frontend/image/mail_icon.png') }}">
                    <p>contact@realesto.com</p>
                </div>
                <div>
                    <img src="{{ url('frontend/image/phone_icon.png') }}">
                    <p>(+977) 9823456789</p>
                </div>
                <div>
                    <img src="{{ url('frontend/image/time_icon.png') }}">
                    <p>7 Days / 24 Hour a Day</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main_contact">
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d891.4118309460663!2d87.29107343190547!3d26.659772156431774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6d784e4368d7%3A0xc5b202d61919c8ae!2s8D%20Audio!5e0!3m2!1sen!2snp!4v1648541159647!5m2!1sen!2snp"
                width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact_form">
            <div>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                    {{ csrf_field() }}
                    <h1>Drop a Line</h1>
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                    @if ($errors->has('subject'))
                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                    @endif
                    <input type="number" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                    @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif
                    </br>
                    <textarea name="message" placeholder="Message">{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                    <button class="btn btn-success btn-submit">Submit</button>
                    {{-- <a href="" class="btn" type="submit">Submit</a> --}}
                </form>
            </div>
        </div>
    </div>
    <!-- -----------------------------------------Contact banner 2nd section ends here---------------------------------- -->
    <!-- --------Footer section starts here--------- -->
@endsection
