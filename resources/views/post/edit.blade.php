<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD With Multiple Image Upload</title>
    <link rel="stylesheet" type="text/css" href="{{ url('frontend/css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="container" style="margin-top: 50px;">
        <a href="/post" class="btn btn-dark">Back</a>
    </div>
    <div class="sell_form edit_form">
        <div class="form-group">
            <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div>
                    <div class="sell_form_item">
                        <label>Property Title</label><br>
                        <input type="text" name="title" placeholder="Enter your Property Title"
                            value="{{ $posts->title }}" required>
                    </div>
                    <div>
                        <label>Owner Name</label><br>
                        <input type="text" name="author" placeholder="Enter Owner Name" value="{{ $posts->author }}"
                            required>
                    </div>
                    <div>
                        <label>Create Slug</label><br>
                        <input type="text" name="slug" placeholder="Enter words Separated by '-' Sign"
                            value="{{ $posts->slug }}" required>
                    </div>
                    <div>
                        <label>Location</label><br>
                        <input type="text" name="location" placeholder="Enter Property Location"
                            value="{{ $posts->location }}" required>
                    </div>
                    <div>
                        <label>Price</label><br>
                        <input type="text" name="price" placeholder="Enter Property price"
                            value="{{ $posts->price }}" required>
                    </div>
                    <div>
                        <label>Area</label><br>
                        <input type="text" name="area" placeholder="Enter Property Area"
                            value="{{ $posts->area }}" required>
                    </div>
                    <div>
                        <label>Property Discription</label><br>
                        <input type="text" name="body" placeholder="Enter your Property Title"
                            value="{{ $posts->body }}" required>
                    </div>
                </div>

                <div>
                    <div>
                        <label>Property Features</label><br>
                        <input type="text" name="feature" placeholder="Enter your Property features"
                            value="{{ $posts->feature }}" required>
                    </div>
                    <div class="property_item_quantity">
                        <div>
                            <label>Number of Bedroom</label><br>
                            <input type="number" name="bedroom" placeholder="Enter Number"
                                value="{{ $posts->bedroom }}" required>
                        </div>
                        <div>
                            <label>Number of Washroom</label><br>
                            <input type="number" name="washroom" placeholder="Enter Number"
                                value="{{ $posts->washroom }}" required>
                        </div>
                        <div>
                            <label>Number of kitchen</label><br>
                            <input type="number" name="kitchen" placeholder="Enter Number"
                                value="{{ $posts->kitchen }}" required>
                        </div>
                        <div>
                            <label>Number of Garage</label><br>
                            <input type="number" name="garage" placeholder="Enter Number"
                                value="{{ $posts->garage }}" required>
                        </div>
                        <div>
                            <label>Contact</label><br>
                            <input type="number" name="contact" placeholder="Enter Contact Details"
                                value="{{ $posts->contact }}" required>
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

        </div>
        <div class="edit_form_image">
            <div class="col-lg-3">
                <p>Cover:</p>
                <form action="/deletecover/{{ $posts->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                </form>
                <img src="/cover/{{ $posts->cover }}" class="img-responsive"
                    style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                <br>



                @if (count($posts->images) > 0)
                    <p>Images:</p>
                    @foreach ($posts->images as $img)
                        <form action="/deleteimage/{{ $img->id }}" method="post">
                            <button class="btn text-danger">X</button>
                            @csrf
                            @method('delete')
                        </form>
                        <img src="/images/{{ $img->image }}" class="img-responsive"
                            style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    @endforeach
                @endif

            </div>
        </div>
    </div>
</body>

</html>
