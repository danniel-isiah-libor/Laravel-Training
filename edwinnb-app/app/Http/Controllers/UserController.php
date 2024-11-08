<?php

namespace App\Http\Controllers;

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
    public function id($id=null) {
        return "User ID: $id";
    }

    /**
     * Show parameters sent
     * @return array
     */
    public function register(Request $request) {
        $parameters = $request->all();
        dd($parameters);
    }
}
