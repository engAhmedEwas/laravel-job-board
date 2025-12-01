<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::all();
        return view("post.show", ["comments"=> $data]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view("post.show");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $post = Post::findOrFail($request->input('post_id'));

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->author = $request->input('author');
        $comment->post_id = $request->input('post_id');

        $comment->save();
        return redirect("/blog/{$post->id}")->with('success','Comment Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comment = Comment::findOrFail($id);
        return view("post.show", ["comment"=> $comment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
