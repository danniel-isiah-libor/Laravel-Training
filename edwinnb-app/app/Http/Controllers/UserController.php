<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

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
    public function store() {
        return "User Store";
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
    public function register(Request $request) {
        $parameters = $request->all();
        dd($parameters);
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
