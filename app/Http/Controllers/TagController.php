<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tag::all();
        return view("tag.index", ["tags"=> $data, "pageTitle" => "Tags"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    function testManyToMany(){
        $post1 = Post::find(1);
        $post2 = Post::find(2);

        $post1->tags()->attach([2, 1, 3]);
        $post2->tags()->attach([2, 4, 5]);

        return response()->json([
            'Post1' => $post1->tags,
            'Post2' => $post2->tags,
        ]);
    }
}
