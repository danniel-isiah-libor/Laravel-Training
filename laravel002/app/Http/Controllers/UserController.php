<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        //dd($request->all());

        //  validate...
        $request->validate([
            'name' => [
                'required',
                'string',
                'max:99'
                //'nullable /* for optional field */
                //'unique:users,name' /* make sure that this is only name is db */
                //'exists:user,name' /* check if existing in db */
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255'
                //'unique:users,email' /* make sure no one use this email */
            ],
            'password' => [
                'required',
                'confirmed',
                //'min:8',
                //'max:16',
                Password::min(8)
                ->max(16)
                ->mixedCase()
                ->symbols()
                ->numbers()
                ->uncompromised()
            ]
        ]);

        // saving...

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
       //$parameters = $request->boolean('is_active', false);

        //$request->merge(['user_id' => 1]);

        //dd($request->all());

        return view('register', [
            'data' => "Hello World"
        ]);
    }
}