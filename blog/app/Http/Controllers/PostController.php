<?php

namespace App\Http\Controllers;

use App\Http\Requests\post\DestroyRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\post\StoreRequest;
use App\Http\Requests\post\UpdateRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$posts = Post::orderBy('id',"desc")->get();
        //$posts = Post::paginate(10);
        $posts = Post::simplePaginate(10);
        return view('dashboard',[
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
        $validatedRequest = $request->validated();

        Post::create($validatedRequest);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //$post = Post::find($id);
        
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Post $post)
    {
        //
        $validatedRequest = $request->validated();
        $post->update($validatedRequest);
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyRequest $request, Post $post)
    {
        //
        $post->delete();
        return redirect()->route('dashboard');
    }
}