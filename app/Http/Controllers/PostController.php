<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $post = new Post();
        $post->title = $request->title();
        $post->body = $request->body();
        $post->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(int $postId)
    {
        $post = Post::whereId($postId)->first();
        
        return view('posts.edit')->with(['post' => $post]);
    }
}
