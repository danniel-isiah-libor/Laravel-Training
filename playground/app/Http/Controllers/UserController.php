<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // saving....

        return redirect()->route('users.redirect-login');
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

        // authenticate.....
        $user = new User();

        $user->email = $validatedRequest['email'];

        Auth::login($user);

        // dump(Auth::check()); // true

        // Auth::logout();

        // dd(Auth::check()); // false

        // return redirect()->route('dashboard');
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('users.redirect-login');
    }
}
