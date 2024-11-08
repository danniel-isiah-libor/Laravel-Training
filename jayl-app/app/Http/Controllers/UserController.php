<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search()
    {
        return 'user search';
    }

    public function store()
    {
        return 'user store';
    }

    public function show(Request $request, $id=null){
        dd($request->all());
        return "user ID: $id";
    }

    public function register(Request $request){
        $parameters = $request->all();
        dd($parameters);
    }
    //
}
