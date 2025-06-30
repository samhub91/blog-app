<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // Show all posts
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // Show form to create a new post
    public function create()
    {
        $categories = \App\Models\Category::all();
    return view('posts.create', compact('categories'));
    }

    // Save a new post
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'body' => 'required',
        'category_id' => 'required|exists:categories,id',
    ]);

    $data = $request->all();
    $data['slug'] = \Illuminate\Support\Str::slug($request->title);

    Post::create($data);

    return redirect()->route('posts.index')->with('success', 'Post created.');
}


    // Show a single post
    public function show(Post $post)
    {
         $categories = \App\Models\Category::all();
    return view('posts.edit', compact('post', 'categories'));
    }

    // Show form to edit a post
    public function edit(Post $post)
    {   
        $categories = \App\Models\Category::all();
    return view('posts.edit', compact('post', 'categories'));
    }

    // Update an existing post
   public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required',
        'body' => 'required',
        'category_id' => 'required|exists:categories,id',
    ]);

    $post->update($request->all());

    return redirect()->route('posts.index')->with('success', 'Post updated.');
}


    // Delete a post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted!');
    }
}
