<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\DestroyRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use App\Notifications\PostNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::paginate(2);
        $posts = Post::simplePaginate(2);

        return view('dashboard', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validatedRequest = $request->validated();

        $post = Post::create($validatedRequest);

        auth()->user()->notify(new PostNotification($post));

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
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
        $validatedRequest = $request->validated();

        $post->update($validatedRequest);

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DestroyRequest $request, Post $post)
    {
        DB::beginTransaction();

        try {
            // complicated queries....
            Post::where('id', 1)->get();

            // updating...
            Post::where('id', 1)->update(['title' => 'test']);

            $post->delete();

            // throw new \Exception;

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }

        return redirect()->route('dashboard');
    }
}
