<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index() {
        return Post::all();
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        return Post::create($validatedData);
    }

    public function update(Request $request, Post $post) {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update($validatedData);

        return $post;
    }

    public function delete(Post $post) {
        $post->delete();

        return $post;
    }
}
