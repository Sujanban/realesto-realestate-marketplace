<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RealEsto - An Online Real Estate Marketplace</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <div class="container" style="margin-top: 50px;">
        <a href="/dashboard" class="btn btn-dark">Back</a>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="">
            <a href="/post/create" class="btn btn-outline-dark">Create Post</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    {{-- <th>Slug</th> --}}
                    {{-- <th>Location</th> --}}
                    <th>Price</th>
                    <th>Area</th>
                    {{-- <th>Description</th> --}}
                    {{-- <th>Feature</th> --}}
                    <th>Bedroom</th>
                    <th>Kitchen</th>
                    <th>Washroom</th>
                    <th>Garage</th>
                    <th>Contact</th>
                    <th>Cover</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        {{-- <td>{{ $post->slug }}</td> --}}
                        {{-- <td>{{ $post->location }}</td> --}}
                        <td>{{ $post->price }}</td>
                        <td>{{ $post->area }}</td>
                        {{-- <td>{{ $post->body }}</td> --}}
                        {{-- <td>{{ $post->feature }}</td> --}}
                        <td>{{ $post->bedroom }}</td>
                        <td>{{ $post->kitchen }}</td>
                        <td>{{ $post->washroom }}</td>
                        <td>{{ $post->garage }}</td>
                        <td>{{ $post->contact }}</td>
                        <td><img src="cover/{{ $post->cover }}" class="img-responsive"
                                style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                        <td><a href="/post/edit/{{ $post->id }}" class="btn btn-outline-primary">Update</a></td>
                        <td>
                            <form action="/post/delete/{{ $post->id }}" method="post">
                                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');"
                                    type="submit">Delete</button>
                                @csrf
                                @method('delete')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
