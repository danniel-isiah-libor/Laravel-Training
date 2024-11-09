<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search()
    {
        return 'user search';
    }

    public function store()
    {
        return 'user store';
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
        return view('register',['data'=>'Hello World!']);
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
