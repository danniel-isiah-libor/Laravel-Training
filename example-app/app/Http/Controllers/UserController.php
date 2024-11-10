<?php

namespace App\Http\Controllers;
use App\Http\Requests\WorkExRequest;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function search()
    {
        return 'User Search';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return string
     */
    public function store(StoreRequest $request) //StoreRequest is custom request class
    {
        // dd($request->all());      

        //////////////////1 record
        //saving
        // //$user = User::find(1);
        // // $user = User::whereId(1)->first();
        // // $user = User::where('id', 1)->first();
        // $user = User::select()->whereNotNull('id')->first(); //same with above code
        // // $user = User::select()->where('id', '=', 1)->first(); //same with above code

        //                 // ->where('id', 1)
        //                 // ->where('id', 'LIKE', '%johndoe%')

        // $user = User::select()->whereNull('id')->first(); //same with above code

        // $user = User::whereId(1)->get(); //same with above code
        // $user = User::whereIn('id', [1,2,3])->get(); //same with above code
        // $user = User::whereBetween('created_at', ['2020-01-01', '2025-01-01'])->get(); //same with above code
        // $user = User::where('id', '=', 13)
        //             ->where('email', 'catherine.reichert@example.org')
        //             ->first();

        // $user = User::whereId(13)
        //             ->orWhere('id', 2)
        //             ->get();

        // $user = WorkExperience::where(function($query){
        //     $query->where('start_date', '>=', now()->startOfYear(-1))
        //           ->where('end_date', '<=', now());
        // })

        // ->orWhere('id', 2)
        // ->limit(10)
        // ->toSql();
        // ->get();

        // $user = User::with('workExperiences')
        // ->where('id', 1)
        // ->get();

        // $user = WorkExperience::with()

        // dd($user);

         //validate
         $validatedRequest = $request->validated(); //check if validated
        
         $user = User::create($validatedRequest);

        return redirect()->route('users.login');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function show(Request $request, $id = null)
    {
        // dd($request->all());

        // return "User ID: $id";

        $profileModel = new Profile();

        return $profileModel->getProfile();
    }

    /**
     * Register a new user.
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        // $parameters = $request->boolean('is_active', false);

        // $request->merge(['user_id' => 1]);

        // dd($request->all());

        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function processlogin(LoginRequest $request) //StoreRequest is custom request class
    {
        // validate...
        $validatedRequest = $request->validated();

        // authenticate.....
        $user = User::whereEmail($validatedRequest['email'])
            ->first();

        Auth::login($user);

        // dump(Auth::check()); // true

        // Auth::logout();

        // dd(Auth::check()); // false

        return redirect()->route('dashboard');
    }

    public function RegWork(Request $request)
    {
        // $parameters = $request->boolean('is_active', false);

        // $request->merge(['user_id' => 1]);

        // dd($request->all());

        return view('WorkExp');
    }

    public function SaveWorkEx(WorkExRequest $request) //StoreRequest is custom request class
    {
        // dd($request->all());

        //validate
        $validateRequest = $request->validated(); //check if validated
        dd($validateRequest);

        //return 'User Store';
    }

    public function dashboard() //StoreRequest is custom request class
    {
        // dd($request->all());

        //validate
        // $validateRequest = $request->validated(); //check if validated
        // dd($validateRequest);

        return view('dashboard');
    }

    public function logout() //StoreRequest is custom request class
    {
        Auth::logout();
        return redirect()->route('users.login');
    }
}