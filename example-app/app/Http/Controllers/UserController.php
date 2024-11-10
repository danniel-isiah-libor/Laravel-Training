<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\Information;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\WorkExperience;
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
        return 'User ok';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return string
     */
    public function store(StoreRequest $request)
    {
        //validation
       $validatedRequest =  $request->validated();
 
    //  dd($validatedRequest);
     
        //saving..
        return redirect()->route('users.redirect-login');
        
         
        
        // dd($request->all());
        // dd($request);
    }
    
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function show(Request $request,$id = null)
    {
         //dd($request->all());
        // return "User ID: $id";

        $profileModel = new Profile();

 
        return $profileModel->getProfile();

        // return view('Welcome');
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

        return view('register', [
            'data' => "Hello world"
        ]);
    }



// start

    public function redirectLogin()
    {
        return view('login');
        //return "welcome page";
    }

    public function login(LoginRequest $request)
    {
        //validate
         $validatedRequest = $request->validated();

        //  dd($validatedRequest);


         //authenticate
         $user = new User(); 
         $user->email = $validatedRequest['email'];


        //  dd($user);
         Auth::login($user);

        //  dd(Auth::check());
        // Auth::logout();

        // return redirect()->route('dashboard');
         return view('dashboard');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect()->route('users.redirect-login');
    }

// end 



//start
    public function redirectWorkExperience()
    {
        return view('workExperience');
    }

    public function workExperience(WorkExperience $request)
    {
        
        //validate
        $validatedRequest = $request->validated();

        dd($validatedRequest); 
    }

//end

//start
    public function redirectInformation() //call the view/Display
    {
        return view('information');
    }   

    public function information(Information $request)
    {
        $validateRequest = $request->validated(); 
        dd($validateRequest);
      //  dd($request->all());
    }
//end


}

 