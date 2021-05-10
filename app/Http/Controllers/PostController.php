<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        // Get all Posts, ordered by the newest first
        $posts = Post::latest()->get();
        // Pass Post Collection to view
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create(){
        // Show create post form
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        // Validate posted form data
        $validated = $request->validate([
            'title' => 'required|string|max:100',
            'content' => 'max:2000',
            'user_id' => 'required'
        ]);

        // Create and save post with validated data
        Post::create($validated);
        $message = 'Post creato con successo!';
        // Redirect the user to the created post with a success notification
        return redirect(route('posts.index'))->with('notification', $message);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Post $post){
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Post $post){
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Post $post){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        $message = 'Post eliminato con successo!';
        return redirect(route('posts.index'))->with('notification', $message);
    }


}
