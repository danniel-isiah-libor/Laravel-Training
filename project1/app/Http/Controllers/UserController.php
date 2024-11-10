<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\WorkRequest;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
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
        //first = limit 1
        //$user = User::select()->where('id',1)->first();
        //$user = User::where('id','=',1)->first();
        //$user = User::where('id',1)->first();
        //$user = User::whereId(1)->first();
        //$user = User::find(1);
        //$user = User::whereNotNull('id')->first();
        //$user = User::whereId(1)->get();
        //$user = User::whereIn('id',[1,2,3])->get();
        //where with AND
        // $user = User::where('id',1)
        //         ->where('email','dicki.isabella@example.org')->get();
        //where with OR
        // $user = User::where('id',1)
        //             ->orWhere('email','dicki.isabella@example.org')->get();
        //subquery with convert to sql query
        // $user = WorkExperience::where(function ($query){
        //         $query->where('start_date','>=',now()->addYear()->startOfYear(-1))
        //                 ->where('end_date','<=',now());
        // })
        //         ->orWhere('id',2)
        //         ->get();
                //->toSql();
        //$user = DB::select("SELECT * FROM users WHERE id = 1 LIMIT 1")->get();
        //WHERE query type
        //$user = User::whereRaw('id = 1 OR id = 2')->get();
        // $user = DB::table("users")
        //         ->where('id',1)
        //         ->orWhereRaw('id=2')
        //         ->get();
        //user cursor() for faster query
        //orderBy()
        //groupBy()
        //->toArray() - object to array
        //$user = User::with('workExperiences')->where('id',11)->get();
        $user = User::where('users.id',11)
                    ->join("work_experiences as we","we.user_id","=","users.id")
                    ->first();
        dd($user->toArray());
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
