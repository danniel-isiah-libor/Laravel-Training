<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Method for search
     * @return string
     */
    public function search(){
        return 'User Search';   
    }

    /**
     * Method for store
     * @return string
     */
    public function store(){
        return 'User Store';
    }

    /**
     * Method for show
     * @param mixed $id
     * @return string
     */
    public function show(Request $request, $id = null){
        // dd($request->all());

        // return "User ID: $id";

        $profileModel = new Profile();

        // return $profileModel->getProfile();

        return view('welcome');
    
    }   


    /**
     * Method for register
     * @param \Illuminate\Http\Request $request
     * @return void
     */

    public function register(Request $request){
        // $parameter = $request -> query();
        // dd($parameter);
        $parameters = $request->boolean('is_active', false);
        $request->merge(['user_id' => 1]);
        dd($request->all());

    }


    public function showNum($number){
        $table = "<table border='1'>";

        for($x = 1; $x <= $number; $x++){
            $table = $table . "<tr>";
            for($y = 1; $y <= $number; $y++){
                $table = $table . "<td>" . ($x * $y) . "</td>";
            }
            $table = $table . "</tr>";
        }
        $table = $table . "</table>";
        return $table;
    }
}
