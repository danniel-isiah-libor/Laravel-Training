<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\WorkplaceRequest;
use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        // $user = User::select()
        // ->where('id', '=', '1')
        // ->where('id', '1')
        // -> where('id', 'like', '%joe%')


        // $user = User::select()->where('id', 1)->first();
        // $user = User::create();


        // $user = User::whereNotNull('id')->first();

        // $user = User::whereIn('id', [1,2,3])->get();

        // $user = User::whereId(1)->orWhere('id', 2)->get();   

        // $user = WorkExperience::where(fu)

        // $user = User::with('workExperiences')->where('id', 5)->get();


        // $user = WorkExperience::with('user')->first();

        // $user = User::create([
        //     'name' 
        // ]);

        // $user = new User();
        // $user->name = 'Nigel Jeah';
        // $user->email = 'nigelcamba@example.com';
        // $user->password = '123456';
        // $user->save();

        // $user = User::insert([
        //     'name' => 'Jeah Ganda',
        //     'email' => 'jeahmylove@example.com',
        //     'password' => 'jeahmybaby'
        // ]);

        $user = User::find(1);
        dd($user);
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

        // $user = new User();
        // $user->email = $validateRequest['email'];

        $user = User::whereEmail($validateRequest['email'])->first();
        // dd($user);
        Auth::login($user);
        // dd($validateRequest);
        // return redirect(route('users.dashboard'));

       return redirect(route('users.dashboard'));
    
    }

    public function showDashboard(){
        return view('dashboard');
    }

    public function workInfo(){
        return view('workplace');
    }

    public function storeWorkplace(WorkplaceRequest $request){
        $validateRequest = $request->validated();

        dd($validateRequest);
        return view('workplace');
    }

    public function logout(){

        Auth::logout();

        return redirect(route('users.login'));
    }
}

