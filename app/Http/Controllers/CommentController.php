<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $data = Comment::all();
        return view("comment.index", ["comments"=> $data, "pageTitle" => "blog"]);
    }

    public function create(){
        Comment::create([
            "author" => "Admin",
            "content" => "this is test comment",
            "post_id" => 1,
        ]);

        return redirect("/comments");
    }
}
