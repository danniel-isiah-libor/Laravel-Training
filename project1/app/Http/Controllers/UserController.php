<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\WorkRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //return "user store";
        return redirect()->route('formLogin');
    }

    public function login(LoginRequest $request){
        //Validation step
        $loginValidatedRequest = $request->validated();
        // $email = "jd@me.com";
        // $password = "Y@hoo2024";

        $user = new User();
        $user->email = $loginValidatedRequest['email'];
        Auth::login($user);
        //if($loginValidatedRequest['email']==$email&&$loginValidatedRequest['password']==$password)
        if(Auth::check())
            return view('dashboard');
        else
            return redirect()->route('formLogin');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('formLogin');
        
    }

    public function work(WorkRequest $request){
        //Validation step
        $workValidatedRequest = $request->validated();
        dd($workValidatedRequest);
        //Storing data step
        return "users work experience";
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
