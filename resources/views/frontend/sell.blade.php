@extends('frontend.layouts.main')
@section('main-container')
    <!-- ----------Header Section Ends Here--------- -->
    <div class="contact_banner">
        <div>
            <h1>List Your Property for sell</h1>
            <i><a href="{{ url('/') }}">Home</a> / Sell</i>
        </div>
    </div>
    <!-- --------------------------------------------sell page main section starts here--------------------------------------- -->
    <div class="sell_wraper">
        <div class="sell_info">
            <h1>How It Works</h1>
            <p>Follow the following steps in order to list your property for sell.</p>
            <div class="sell_card_wraper">
                <div class="sell_card">
                    <img src="{{ url('frontend/image/login.png') }}">
                    <h2>Form Fillup</h2>
                    <p>Just Fill up the form Below</p>
                </div>
                <div class="sell_card">
                    <img src="{{ url('frontend/image/property.png') }}">
                    <h2>Admin Review</h2>
                    <p>Our Admin will Review your document and check if all the Information is filluped as required.</p>
                </div>
                <div class="sell_card">
                    <img src="{{ url('frontend/image/hand.png') }}">
                    <h2>Get Listed</h2>
                    <p>Once your property meets out listing criteria, your Property will get listed</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sell_form">
        <form>
            <div>
                <div class="sell_form_item">
                    <label>Property Title</label><br>
                    <input type="text" name="property_title" placeholder="Enter your Property Title">
                </div>
                <div>
                    <label>Create Slug</label><br>
                    <input type="text" name="property_title" placeholder="Enter words Separated by '-' Sign">
                </div>
                <div>
                    <label>Price</label><br>
                    <input type="text" name="property_title" placeholder="Enter Property price">
                </div>
                <div>
                    <label>Area</label><br>
                    <input type="text" name="property_title" placeholder="Enter Property Area">
                </div>
                <div>
                    <label>Property Discription</label><br>
                    <input type="text" name="property_title" placeholder="Enter your Property Title">
                </div>
            </div>

            <div>
                <div>
                    <label>Property Features</label><br>
                    <input type="text" name="property_title" placeholder="Enter your Property features">
                </div>
                <div class="property_item_quantity">
                    <div>
                        <label>Number of Bedroom</label><br>
                        <input type="number" name="property_title" placeholder="Enter Number">
                    </div>
                    <div>
                        <label>Number of Washroom</label><br>
                        <input type="number" name="property_title" placeholder="Enter Number">
                    </div>
                    <div>
                        <label>Number of kitchen</label><br>
                        <input type="number" name="property_title" placeholder="Enter Number">
                    </div>
                    <div>
                        <label>Number of Garage</label><br>
                        <input type="number" name="property_title" placeholder="Enter Number">
                    </div>
                </div>
                <div>
                    <label>Cover Image</label><br>
                    <input type="file" name="cover_image">
                </div>
                <div>
                    <label>Other Images</label><br>
                    <input type="file" name="other_image">
                </div>
            </div>


            <input type="submit" name="submit" class="submit">
        </form>
        <div class="sell_form_image">
            <!-- <img src="public_speak.jpg"> -->
            <h2>Please,<br>Fill the Form Aside</h2>
        </div>
    </div>
    <!-- --------Footer section starts here--------- -->
@endsection
