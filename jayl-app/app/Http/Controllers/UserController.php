<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\LoginRequest;
use App\Http\Requests\user\StoreRequest;
use App\Http\Requests\user\WorkRegister;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function search()
    {
        return 'user search';
    }

    public function store(StoreRequest $request)
    {
        $validatedrequest = $request->validated();
        // dd($request->all());
        // $parameters=$request->all();
        // return $parameters;
        // return 'user store';
        dd($validatedrequest);
    }

    public function authlogin(LoginRequest $request)
    {
        $validatedrequest = $request->validated();
        // dd($request->all());
        // $parameters=$request->all();
        // return $parameters;
        // return 'user store';
        dd($validatedrequest);
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

    // public function redirectlogin()
    // {
    //     return view('login');
    // }


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
