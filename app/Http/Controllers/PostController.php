<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Menampilkan daftar pos
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat pos baru
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Menyimpan pos baru
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'username' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        // Menampilkan form untuk mengedit pos
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        // Mengupdate pos
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'username' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        // Menghapus pos
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}