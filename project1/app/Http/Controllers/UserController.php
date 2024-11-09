<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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
    public function store(StoreRequest $request){
        //Validation step
        $validatedRequest = $request->validated();


        //Storing data step
        return "user store";
    }

    public function login(LoginRequest $request){
        //Validation step
        $loginValidatedRequest = $request->validated();
        $email = "jd@me.com";
        $password = "Y@hoo2024";

        if($loginValidatedRequest['email']==$email&&$loginValidatedRequest['password']==$password)
            $mess = "Access Granted";
        else
            $mess = "Failed to login";
        //Storing data step
        return $mess;
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
        return view('register');
    }
}
