<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\LoginRequest;
use App\Http\Requests\user\StoreRequest;
use App\Http\Requests\user\WorkRegister;
use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function search()
    {
        return 'user search';
    }

    public function store(StoreRequest $request)
    {
        $validatedRequest = $request->validated();
        // dd($request->all());
        // $parameters=$request->all();
        // return $parameters;
        // return 'user store';
        // dd($validatedrequest);
        // $user = User::select()->where('id', '=', '2')->first()->get();
        // $user = User::whereID(1)->get();
        // $user = WorkExperience::where(function ($squery) {
        //     $squery->where('StartDate', '>=', now()->addYear(-5))
        //         ->where('EndDate', '<=', now());
        // })->get();
        // $user = DB::select("SELECT * FROM users WHERE id=1 limit 1");
        // $user = User::whereRaw('id=1')->first();
        // $user = User::orderBy('id', 'desc')->get();
        // dd($user->toArray());
        // $user= DB::table('users')->where('id',1)->orwhereRaw('id,2')->get();
        // $user = User::with('WorkExperiences')->where('id', 11)->get();
        // $user = WorkExperience::with('user')->first();
        // dd($user->toArray());
        $user = User::create($validatedRequest);
        // $user = new User();
        // $user->name = 'Jane Doee';
        // $user->email = 'Janedoe2@example.com';
        // $user->password = 'jane123';
        // $user->save();
        // $user = User::find(1);
        // $user->name = "brendan";
        // $user->save();
        // $user = User::find(1)->delete();
        // dd($user);
        return redirect()->route('users.redirectlogin');
    }

    public function authlogin(LoginRequest $request)
    {
        $validatedRequest = $request->validated();
        // dd($request->all());
        // $parameters=$request->all();
        // return $parameters;
        // return 'user store';
        // dd($validatedrequest);
        $user = new User();
        $user->email = $validatedRequest['email'];
        Auth::login($user);
        // dump(Auth::check());
        // Auth::logout();
        // dump(Auth::check());
        // return redirect()->route('dashboard');
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    


    public function work(WorkRegister $request)
    {
        $validatedrequest = $request->validated();
        // dd($request->all());
        // $parameters=$request->all();
        // return $parameters;
        // return 'user store';
        dd($validatedrequest);
    }

    public function redirectlogin()
    {
        return view('login');
    }


    public function login()
    {
        return view('login');
    }

    public function workhistory()
    {
        return view('workhistory');
    }

    public function show(Request $request, $id = null)
    {
        // dd($request->all());
        $profileModel = new Profile();
        return $profileModel->getProfile();

        // return "user ID: $id";
    }

    public function register(Request $request)
    {
        // $parameters = $request->all();
        // dd($parameters);
        return view('register', ['data' => 'Hello World!']);
    }
    //



    public function test($num)
    {
        $stable = "<table border=1g>";
        // for ($x = 1; $x <= $num; $x++) {

        //    $stable=$stable . $x;
        // }
        for ($x = 1; $x <= $num; $x++) {

            // $stable = $stable ."<tr><td>". $x . "</td></tr>";
            $stable = $stable . "<tr>";
            for ($i = 1; $i <= $num; $i++) {
                $stable = $stable . "<td style='border:1px solid black;'>" . $i * $x . "</td>";
            }

            $stable = $stable . "</tr>";
        }

        $stable = $stable . "</table>";
        return $stable;
    }
}
