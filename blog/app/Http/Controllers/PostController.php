<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\DeleteRequest;
use App\Http\Requests\Posts\StoreRequest;
use App\Http\Requests\Posts\UpdateRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::simplePaginate(5);

        return view('posts.view-all-posts', ['posts' => $posts]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validatedRequest = $request->validated();

        Post::create($validatedRequest);

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.post', ['post' => $post]);
    }


    public function displayAllPosts(Post $post){

        return view('');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit-post', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Post $post)
    {
        
        // $validatedRequest = $request->validated();
        // $user = Auth::user();
        // $findPost = Post::findOrFail($user->id);
        // $findPost->title = $validatedRequest['title'];
        // $findPost->body = $validatedRequest['body'];

        // $findPost->save();

        $validatedRequest = $request -> validated();
        $post ->update($validatedRequest);
        return redirect(route('posts.show', $post->id));
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DeleteRequest $request, Post $post)
    
    {
        $post -> delete();
        
        return redirect(route('dashboard'));
    }

}
