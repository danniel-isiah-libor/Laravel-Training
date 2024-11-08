<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Search 
     * 
     * @return string
     */
    public function search() {
        return 'User Search';
    }

    /**
     * Store 
     * 
     * @return string
     */
    public function store() {
        return 'User store';
    }

    /**
     * 
     * 
     */
    public function show(Request $request, $id = null){

     dd($request->all());

     return "User ID: $id";

    //    $profileModel = new Profile();

    //   return $profileModel->getProfile();

    }


    /**
     * Store 
     * 
     * @return string
     */
    public function register(Request $request){
        $parameters = $request->boolean('is_active', false);

        $request->merge(['user_id' => 1]);
    
        dd($request->all());
    }
}
