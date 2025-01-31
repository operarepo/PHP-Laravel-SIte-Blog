<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'intro' => 'required',
            'content' => 'required'
        ]);
        Post::create($request->only(['title', 'intro', 'content']));
        return redirect()->route('posts.index')->with('success', 'Пост успешно опубликован!');;
    }
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }
    public function edit(Request $request, Post $post)
    {
        // $post = Post::where('slug', $post)->firstOrFail();
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'intro' => 'required|string|max:255',
        ]);
        $post->update($request->only(['title', 'content', 'intro']));
        $post->slug = \Illuminate\Support\Str::slug($post->title);
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Пост успешно обновлён!');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Пост успешно удалён!');
    }
}
?>
