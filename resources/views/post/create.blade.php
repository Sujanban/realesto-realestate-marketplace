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
            <form action="/post" method="post" enctype="multipart/form-data"  autocomplete="off" >
                @csrf
                <div>
                    <div class="sell_form_item">
                        <label>Property Title</label><br>
                        <input type="text" name="title" id="title" placeholder="Enter your Property Title" required>
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
                        <input type="number" name="price" placeholder="Enter Property price" required>
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
                        <input type="file" name="cover" accept="image/*" required>
                    </div>
                    <div>
                        <label>Other Images</label><br>
                        <input type="file" name="images[]" accept="image/*" required>
                    </div>
                    <div>
                        <label>status</label><br>
                        {{-- <input type="text" name="status" placeholder="Status" required> --}}
                        <select name="status">
                            <option value="published" selected>Publish</option>
                            <option value="unpublished" >Draft</option>
                        </select>
                    </div>
                </div>
    
                <input type="submit" name="submit" class="submit">
            </form>
            <div class="sell_form_image">
                <!-- <img src="public_speak.jpg"> -->
                <h2>Please,<br>Fill the Form Aside</h2>
            </div>
        </div>
         </body>
</html>









