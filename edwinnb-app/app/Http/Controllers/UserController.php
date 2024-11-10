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
     * Display Listing of resource
     * @return string
     */
    public function search() {
        return "User Search";
    }

    /**
     * Store newly created resource
     * @return string
     */
    public function store(StoreRequest $request) {

        //validate
        $validated = $request->validated();
        dd($validated);
        
    }

    /**
     * Authenticate log in
     * @return string
     */
    public function authlogin(LoginRequest $request) {

        //validate
        $validated = $request->validated();
        
        //authenticate
        $user = new User();

        $user->email = $validated['email'];

        Auth::login($user);

        return view('dashboard');
    }

    /**
     * Validate log in
     * @return string
     */
    public function history(WorkRequest $request) {

        //validate
        $validated = $request->validated();
        dd($validated); 
    }

    /**
     * Redirection 
     */
    public function redirect() {
        return redirect()->route('users.search');
    }

   

    /**
     * Show sent parameter
     * @return string
     */
    public function show($id=null) {
        //return "User ID: $id";
        $profileModel = new Profile();
        return $profileModel->getProfile();
        
    }



    /**
     * Show parameters sent
     * @return array
     */
    public function register() {
        return view('register');
    }

     /**
     * Login Form View
     */
    public function login() {
        return view('login');
    }

    public function workhistory() {
        return view('workhistory');
    }

    public function test($num) {
        echo "<table border=1>";
        for($x=1; $x<=$num; $x++)
        {
            echo "<tr>";  
                for($y=1; $y<=$num; $y++)
                {
                    echo "<td>".$y*$x."</td>";
                }
            echo "</tr>";
        }
        echo"</table>";
    }
}
