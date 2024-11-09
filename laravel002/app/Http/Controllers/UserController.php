<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\EmploymentRequest;
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
        //dd($request->all());

        //  validate...
       $validatedRequest = $request->validated();
        dd($validatedRequest);
        //$request->validate([
        //    direct validation in controller
        //]);

        // saving...

        return 'User Store';
    }

    /**
     * Login Logic.
     *
     * @return string
     */
    public function login(LoginRequest $request)
    {
        // validate...
        $validatedRequest = $request->validated();
        
        dd($validatedRequest);
        //$email="correct@email.test"
        //$password="123456"
        
        //authenticate...

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

    /*test login creation*/
    public function loginRedirect ()
    {
        return view('login');
    }


    /*test login creation*/
    public function employmentRedirect ()
    {
        return view('employment');
    }

    public function employment(EmploymentRequest $request)
    {
        // validate...
        $validatedRequest = $request->validated();
        
        dd($validatedRequest);
        
        //authenticate...

    }
}