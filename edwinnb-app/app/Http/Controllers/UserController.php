<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\WorkRequest;
use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        // $user = User::find(1); //PrimaryKey
        // $user = User::where('id', 1)->cursor();
        // $user = WorkExperience::where(function($query){
        //     $query->where('start_date','>=', 1/1/1975)
        //     ->where('end_date','<=', now());
        // }) ->get();
        // $user = DB::select("SELECT * FROM users WHERE id=1 LIMIT 1");
        // $user=User::with('workExperiences')
        //     ->where('id',11)
        //     ->get();

        $user = WorkExperience::with('user')
        ->first();

        dd($user->toArray());
        
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
