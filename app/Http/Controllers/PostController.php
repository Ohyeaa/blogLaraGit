<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Label;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('is_premium', '0')->orderBy('created_at', 'desc')->get();

        if (Auth::check() && Auth::user()->has_premium === 1) {
            $posts = Post::orderBy('created_at', 'desc')->get();
        }

        $labels = Label::all();

        return view('posts.index', compact('posts', 'labels'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
