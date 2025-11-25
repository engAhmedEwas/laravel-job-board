<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = Post::all();
        return view("post.index", ["posts"=> $data, "pageTitle" => "blog"]);
    }

    function show($id){
        $post = Post::findOrFail($id);
        return view("post.show", ["post"=> $post, "pageTitle" => $post->title]);
    }

    function create(){
        Post::create([
            "title" => "My third Post",
            "body" => "This Is Post Content",
            "author" => "Admin",
            "published" => false,
        ]);

        return redirect("/blog");
    }

    function delete(){
        Post::destroy(3);
    }
}
