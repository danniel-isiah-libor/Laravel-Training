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
    public function store(StoreRequest $request)
    {
        // validate
        $validatedRequest = $request->validated();

        dd($validatedRequest);

        // saving....

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

    /**
     * Redirect to login page.
     *
     * @return view
     */
    public function redirectLogin()
    {
        return view('login');
    }

    /**
     * Process login form.
     */
    public function login(LoginRequest $request)
    {
        // validate...
        $validatedRequest = $request->validated();

        dd($validatedRequest);

        // authenticate.....
    }
}
