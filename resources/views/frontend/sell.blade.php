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
        <form action="/userstore" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="sell_form_item">
                    <label>Property Title</label><br>
                    <input type="text" name="title" placeholder="Enter your Property Title" required>
                </div>
                <div>
                    <label>Owner Name</label><br>
                    <input type="text" name="author" placeholder="Enter Owner Name" required>
                </div>
                <div>
                    <label>Create Slug</label><br>
                    <input type="text" name="slug" placeholder="Enter words Separated by '-' Sign" required>
                </div>
                <div>
                    <label>Location</label><br>
                    <input type="text" name="location" placeholder="Enter Property Location" required>
                </div>
                <div>
                    <label>Price</label><br>
                    <input type="text" name="price" placeholder="Enter Property price" required>
                </div>
                <div>
                    <label>Area</label><br>
                    <input type="text" name="area" placeholder="Enter Property Area" required>
                </div>
                <div>
                    <label>Property Discription</label><br>
                    <input type="text" name="body" placeholder="Enter your Property Title" required>
                </div>
            </div>

            <div>
                <div>
                    <label>Property Features</label><br>
                    <input type="text" name="feature" placeholder="Enter your Property features" required>
                </div>
                <div class="property_item_quantity">
                    <div>
                        <label>Number of Bedroom</label><br>
                        <input type="number" name="bedroom" placeholder="Enter Number" required>
                    </div>
                    <div>
                        <label>Number of Washroom</label><br>
                        <input type="number" name="washroom" placeholder="Enter Number" required>
                    </div>
                    <div>
                        <label>Number of kitchen</label><br>
                        <input type="number" name="kitchen" placeholder="Enter Number" required>
                    </div>
                    <div>
                        <label>Number of Garage</label><br>
                        <input type="number" name="garage" placeholder="Enter Number" required>
                    </div>
                    <div>
                        <label>Contact</label><br>
                        <input type="number" name="contact" placeholder="Enter Contact Details" required>
                    </div>
                </div>
                <div>
                    <label>Cover Image</label><br>
                    <input type="file" name="cover" required>
                </div>
                <div>
                    <label>Other Images</label><br>
                    <input type="file" name="images[]" required>
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
