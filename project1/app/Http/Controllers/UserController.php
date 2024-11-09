<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 
     */
    public function search(){
        return "user search";
    }

    /**
     * 
     */
    public function store(){
        return "user store";
    }

    /**
     * 
     */
    public function show($id = null){
        $prof = new Profile();
        return $prof->getProfile();
        //return "User ID: $id";
    }

    /**
     * 
     */
    public function register( Request $request){
        // $parameter = $request->merge(["is_active",1]);
        // return "user register";
        return view('register',['data'=>"sample data"]);
    }
}
