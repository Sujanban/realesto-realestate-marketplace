<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{




    public function userstore(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $post =new Post([
                "title" =>$request->title,
                "slug" =>$request->slug,
                "author" =>$request->author,
                "location" =>$request->location,
                "price" =>$request->price,
                "area" =>$request->area,
                "body" =>$request->body,
                "bedroom" =>$request->bedroom,
                "washroom" =>$request->washroom,
                "kitchen" =>$request->kitchen,
                "garage" =>$request->garage,
                "feature" =>$request->feature,
                "contact" =>$request->contact,
                "cover" =>$imageName,
            ]);
           $post->save();
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['post_id']=$post->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    Image::create($request->all());

                }
            }

            return redirect("/sell");

    }













    public function search(Request $req)
    {
        $data = Post::where('title', 'like' , '%'.$req->input('query').'%')->orWhere('location', 'like' , '%'.$req->input('query').'%')
        ->get();
        return view('search',['posts'=>$data]);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   


    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != ""){
            $posts=Post::where('title','LIKE','%search%')->get();
        }
        else{
            $posts=Post::all();
        }
        $data= compact('posts');
        return view('post.index')->with($data);
    }



    public function postCategory($slug)
    {
        $posts = Post::where('slug', $slug)->get();

        return view('frontend.product', compact('posts'));
    }

    public function loggedPostCategory($slug)
    {
        $posts = Post::where('slug', $slug)->get();

        return view('logged.product', compact('posts'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $post =new Post([
                "title" =>$request->title,
                "slug" =>$request->slug,
                "author" =>$request->author,
                "location" =>$request->location,
                "price" =>$request->price,
                "area" =>$request->area,
                "body" =>$request->body,
                "bedroom" =>$request->bedroom,
                "washroom" =>$request->washroom,
                "kitchen" =>$request->kitchen,
                "garage" =>$request->garage,
                "feature" =>$request->feature,
                "contact" =>$request->contact,
                "cover" =>$imageName,
            ]);
           $post->save();
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['post_id']=$post->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("/images"),$imageName);
                    Image::create($request->all());

                }
            }

            return redirect("/post");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $posts=Post::findOrFail($id);
        return view('post.edit')->with('posts',$posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     $post=Post::findOrFail($id);
     if($request->hasFile("cover")){
         if (File::exists("cover/".$post->cover)) {
             File::delete("cover/".$post->cover);
         }
         $file=$request->file("cover");
         $post->cover=time()."_".$file->getClientOriginalName();
         $file->move(\public_path("/cover"),$post->cover);
         $request['cover']=$post->cover;
     }

        $post->update([
            // "title" =>$request->title,
            // // "author"=>$request->author,
            // "body"=>$request->body,
            // "cover"=>$post->cover,
            "title" =>$request->title,
            'slug' =>$request->slug,
            "author" =>$request->author,
            "location" =>$request->location,
            "price" =>$request->price,
            "area" =>$request->area,
            "body" =>$request->body,
            "feature" =>$request->feature,
            "bedroom" =>$request->bedroom,
            "washroom" =>$request->washroom,
            "kitchen" =>$request->kitchen,
            "garage" =>$request->garage,
            "contact" =>$request->contact,
            "cover"=>$post->cover
        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["post_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("images"),$imageName);
                Image::create($request->all());

            }
        }

        return redirect("/post");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $posts=Post::findOrFail($id);

         if (File::exists("cover/".$posts->cover)) {
             File::delete("cover/".$posts->cover);
         }
         $images=Image::where("post_id",$posts->id)->get();
         foreach($images as $image){
         if (File::exists("images/".$image->image)) {
            File::delete("images/".$image->image);
        }
         }
         $posts->delete();
         return back();


    }

    public function deleteimage($id){
        $images=Image::findOrFail($id);
        if (File::exists("images/".$images->image)) {
           File::delete("images/".$images->image);
       }

       Image::find($id)->delete();
       return back();
   }

   public function deletecover($id){
    $cover=Post::findOrFail($id)->cover;
    if (File::exists("cover/".$cover)) {
       File::delete("cover/".$cover);
   }
   return back();
}


}
