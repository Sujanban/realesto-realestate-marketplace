<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>RealEsto - An Online Real Estate Marketplace</title>
        <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}">

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <a href="/post" class="btn btn-dark">Back</a>
        </div>
        <div class="sell_form">
            <form action="/post" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="sell_form_item">
                        <label>Property Title</label><br>
                        <input type="text" name="title" placeholder="Enter your Property Title" required>
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
                        <input type="text" name="price" placeholder="Enter Property price">
                    </div>
                    <div>
                        <label>Area</label><br>
                        <input type="text" name="area" placeholder="Enter Property Area">
                    </div>
                    <div>
                        <label>Property Discription</label><br>
                        <input type="text" name="body" placeholder="Enter your Property Title">
                    </div>
                </div>
    
                <div>
                    <div>
                        <label>Property Features</label><br>
                        <input type="text" name="feature" placeholder="Enter your Property features">
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
                        <input type="file" name="cover">
                    </div>
                    <div>
                        <label>Other Images</label><br>
                        <input type="file" name="images[]" multiple>
                    </div>
                </div>
    
                <input type="submit" name="submit" class="submit">
            </form>
            <div class="sell_form_image">
                <!-- <img src="public_speak.jpg"> -->
                <h2>Please,<br>Fill the Form Aside</h2>
            </div>
        </div>

        {{-- <div class="container" style="margin-top: 50px;">
            <div class="row">


                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h3 class="text-center text-dark"><b>Add Post</b> </h3>
				    <div class="form-group">
                        <form action="/post" method="post" enctype="multipart/form-data">
                         @csrf
        				 <input type="text" name="title" class="form-control m-3" placeholder="Place your Title Here" required>
                         <input type="text" name="slug" class="form-control m-3" placeholder="Place slug" required> --}}
        				 {{-- <input type="text" name="author" class="form-control m-3" placeholder="author" required> --}}
                         {{-- <input type="text" name="location" class="form-control m-3" placeholder="Enter Your Property Location" required>
                         <input type="text" name="price" class="form-control m-3" placeholder="Set Price" required>
                         <input type="text" name="area" class="form-control m-3" placeholder="Area Occupied by your Property" required>
                         <Textarea name="body" cols="30" rows="6" class="form-control m-3" placeholder="Property Discription" required></Textarea>
                         <Textarea name="feature" cols="30" rows="6" class="form-control m-3" placeholder="Your Property Features" required></Textarea>
                         <input type="text" name="bedroom" class="form-control m-3" placeholder="Number of Bedroom" required>
                         <input type="text" name="washroom" class="form-control m-3" placeholder="Number of Washroom" required>
                         <input type="text" name="kitchen" class="form-control m-3" placeholder="Number of Kitchen" required>
                         <input type="text" name="garage" class="form-control m-3" placeholder="Number of Garage" required>
                         <input type="text" name="contact" class="form-control m-3" placeholder="Contact Number" required>
                         <label class="m-3">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-3" name="cover" required>

                         <label class="m-3">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-3" name="images[]" multiple required>

                        <button type="submit" class="btn btn-dark mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div> --}}



         </body>
</html>









