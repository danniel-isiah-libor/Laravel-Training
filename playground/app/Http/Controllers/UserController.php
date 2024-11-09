<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\WorkplaceRequest;
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
    public function store(StoreRequest $request){
        // dd($request->all());

        $validateRequest = $request->validated();

        return redirect(route('users.login'));
        
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
     */

    public function showRegister(){
        // $parameter = $request -> query();
        // dd($parameter);
        // $parameters = $request->boolean('is_active', false);
        // $request->merge(['user_id' => 1]);
        // dd($request->all());
        return view('register');
    }

    public function showLogin(){
        return view('login');
    }


    public function auth(LoginRequest $request){

        $validateRequest = $request->validated();
        dd($validateRequest);
        return view('login');
    
    }

    public function workInfo(){
        return view('workplace');
    }

    public function storeWorkplace(WorkplaceRequest $request){
        $validateRequest = $request->validated();

        dd($validateRequest);
        return view('workplace');
    }
}

