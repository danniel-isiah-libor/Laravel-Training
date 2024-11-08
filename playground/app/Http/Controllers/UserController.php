<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function search()
    {
        return 'User Search';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return string
     */
    public function store()
    {
        return 'User Store';
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function show($id = null)
    {
        return "User ID: $id";
    }

    /**
     * Register a new user.
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        $parameters = $request->boolean('is_active', false);

        $request->merge(['user_id' => 1]);

        dd($request->all());
    }
}
