<?php

namespace App\Http\Controllers;

use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::all();
        return view('blog', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Blog::where('slug', $slug)->get()[0];
        return view('show', compact('post'));
    }
}
