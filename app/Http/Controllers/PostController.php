<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }


    public function get_all()
    {
        $posts = Post::all();
        return $posts;
    }

    //  ------ single post
    public function single_post_view($id)
    {
        return view('pages.single_blog', compact('id'));
    }


    public function single_post_data($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }



}