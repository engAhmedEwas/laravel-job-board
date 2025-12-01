<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequestHandler;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::latest()->paginate(5);
        return view("post.index", ["posts"=> $data, "pageTitle" => "blog"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.create", ["pageTitle" => "create page"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequestHandler $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published');

        $post->save();
        return redirect('/blog')->with('success','Post Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view("post.show", ["post"=> $post, "pageTitle" => $post->title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view("post.edit", ["post" => $post,"pageTitle" => "Blog - Edit Post " . $post->title]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequestHandler $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->author = $request->input('author');
        $post->body = $request->input('body');
        $post->published = $request->has('published');

        $post->save();
        return redirect('/blog')->with('success','Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/blog')->with('success','Post Deleted Successfully');
    }
}
