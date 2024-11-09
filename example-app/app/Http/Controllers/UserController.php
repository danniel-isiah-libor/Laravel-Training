<?php

namespace App\Http\Controllers;
use App\Http\Requests\WorkExRequest;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

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
    public function store(StoreRequest $request) //StoreRequest is custom request class
    {
        // dd($request->all());

        //validate
        $validateRequest = $request->validated(); //check if validated
        dd($validateRequest);

        return 'User Store';
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function show(Request $request, $id = null)
    {
        // dd($request->all());

        // return "User ID: $id";

        $profileModel = new Profile();

        return $profileModel->getProfile();
    }

    /**
     * Register a new user.
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        // $parameters = $request->boolean('is_active', false);

        // $request->merge(['user_id' => 1]);

        // dd($request->all());

        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function processlogin(LoginRequest $request) //StoreRequest is custom request class
    {
        // dd($request->all());

        //validate
        $validateRequest = $request->validated(); //check if validated
        dd($validateRequest);

        //return 'User Store';
    }

    public function RegWork(Request $request)
    {
        // $parameters = $request->boolean('is_active', false);

        // $request->merge(['user_id' => 1]);

        // dd($request->all());

        return view('WorkExp');
    }

    public function SaveWorkEx(WorkExRequest $request) //StoreRequest is custom request class
    {
        // dd($request->all());

        //validate
        $validateRequest = $request->validated(); //check if validated
        dd($validateRequest);

        //return 'User Store';
    }
}