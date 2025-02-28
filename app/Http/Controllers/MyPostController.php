<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MyPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labels = Auth::user()->labels;
        $posts = Auth::user()->posts; // $posts = Post::where('user_id', Auth::id())->get();
        
        return view('myposts.index', compact('posts', 'labels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('myposts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store(options: 'public');
        }

        Post::create($validated);
        
        return redirect()->route('posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return Auth::id() === $post->user_id //or: return Auth::user()->is($post->user)
        ? view('myposts.edit', compact('post'))
        : abort(401);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $validated['image'] = $request->file('image')->store(options: 'public');
        }

        $post->update($validated);
        return redirect()->route('myposts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('myposts.index');
    }
}
