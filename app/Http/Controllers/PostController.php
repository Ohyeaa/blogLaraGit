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
    public function index(Request $request)
    {
        $query = Post::query();

        if (!Auth::check() || Auth::user()->has_premium === 0) {
            $query->where('is_premium', '0');
        }

        if ($request->label_id) {
            $query->whereRelation('labels', 'id', $request->label_id);
        }

        $posts = $query->orderBy('created_at', 'desc')->get();
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
