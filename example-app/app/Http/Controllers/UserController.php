<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\Information;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
// use App\Http\Requests\User\WorkExperience;
use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
// use App\Models\WorkExperience as ModelsWorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        return 'User ok';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return string
     */
    public function store(StoreRequest $request)
    {
        //validation
    //    $validatedRequest =  $request->validated();

    //  dd($validatedRequest);
    //saving..
    // $user = User::select('email')->where('id' , 1)->first();
    // $user = User::where('id' , 1)->first();
    // $user = User::where('id' ,'=', 1)->first();
    // $user = User::whereId(1)->first();
    // $user = User::find(1);
    // $user = User::whereNull('id')->first();
    // $user = User::whereNotNull('id')->first();
    //    ->where('id', '=' , 1);
    //    ->where('id', 'like' , '%johndoe%');
    // dd($request->all());
    // dd($request);
   
    // $user = User::whereId(1)->get();
    // $user = User::whereIn('id', [1, 2, 3])->get();
    // $user = User::whereBetween('created_at', ['2020-01-01', '2025-01-01'])->get();
    
    // $user = User::whereId(1)
    // ->orWhere('id', 2)
    // ->get();

    // $user = User::where('id', '=', 2)
    // ->where('email', 'johnston.webster@example.com')
    // ->first();

    // $user = User::whereId(1)
    // ->orWhere('id', 2)
    // ->get();


    // $user = WorkExperience::where(function($query){
    //     $query->where('start_date', '>=', now()->addYear(-1) )
    //         ->where('end_date', '<=', now());
 
    // })  
    // ->orWhere('id', 2)
    // ->limit(10)
    // ->toSql();
    // // ->get();

    // $user = DB::select("SELECT * FROM users WHERE id = 1 limit 1"); //raw sql

    // $user = User::whereRaw('id = 1')->first(); // merge raw sql and eloquent

    // $user = DB::table('users')
    // ->where('id', 1)
    // ->orWhereRaw('id = 2')
    // ->first();
    //    dd($user->toArray());


    // $user = User::where('id' , 1)->cursor();

    // // $user = User::orderBy('id', 'desc')
    // $user = User::orderBy('id', 'asc')
    // ->orderBy('created_at', 'desc')
    // ->toSql();

    // $user = User::with('workExperiences') // parang join ito ez way
    // ->where('id', 11)
    // ->toSql();

    // $user = User::withCount('workExperiences')
    //     ->with([
    //         'workExperiences' => function ($query) {
    //             $query->where('end_date', '>=', now());
    //         }
    //     ]) dinagana

    // $user = WorkExperience::with('user')->first();
    // $user = WorkExperience::with('user.workExperiences')->first();

    // $user = User::where('users.id', 11)
    // // ->join('work_experiences as table1', 'table1.user_id' , '=' , 'users.id')
    //  ->join('work_experiences as table1', function($query){
    //     $query->on('table1.user_id', '=', 'users_id');
    // })
    // ->first();

    // dd($user);
    // dd($user->toArray());
       
    
    //saving shorthand

    // $validatedRequest = $request->validated();
    // $user = User::created($validatedRequest);

    //saving 1
    // $user = User::create([
    //     'name' => 'Jm',
    //     'email' => 'jm@gmail.com',
    //     'password' => '121212'  
    // ]);
    
    // dd($user);

    //saving 2
    // $user = new User();
    // $user->name = 'james';
    // $user->email = 'james@gmail.com';
    // $user->password = '1454';
    // $user->save();
    // dd($user);
    
    //saving 3 for bulking like csv
   
        // $csv =[
        //     [
        //         'name' => 'Daniel',
        //         'email' => 'Daniel@gmail.com',
        //         'password' => 'password'
        //     ],
        
        //         [
        //             'name' => 'Danise',
        //             'email' => 'Danisel@gmail.com',
        //             'password' => 'password'
        //         ]
        // ];
        // $user = User::insert($csv);


        //update 1 for complecated query
        // $user = User::where('id', 1)->update([
        //     'name' => 'James Updated'
        // ]);

        //update 2
        // $user = User::find(1);
        // $user->name = "Brendon";
        // $user->save();
        
        //Delete
        // $user = User::find(44)->delete();
        // $user = User::findOrFail(55)->delete();

        // dd($user);

        $validatedRequest = $request->validated();
        $user = User::create($validatedRequest);
    
       return redirect()->route('users.redirect-login');
    }
    
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return string
     */
    public function show(Request $request,$id = null)
    {
         //dd($request->all());
        // return "User ID: $id";

        $profileModel = new Profile();

 
        return $profileModel->getProfile();

        // return view('Welcome');
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

        return view('register', [
            'data' => "Hello world"
        ]);
    }



// start

    public function redirectLogin()
    {
        return view('login');
        //return "welcome page";
    }

    public function login(LoginRequest $request)
    {
        //validate
         $validatedRequest = $request->validated();

        //  dd($validatedRequest);
        $user = User::whereEmail($validatedRequest['email'])
        ->first();

         //authenticate
        //  $user = new User(); 
        //  $user->email = $validatedRequest['email'];


        //  dd($user);
         Auth::login($user);

        //  dd(Auth::check());
        // Auth::logout();

         return redirect()->route('dashboard');
         //return view('dashboard');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect()->route('users.redirect-login');
    }

// end 



//start
    public function redirectWorkExperience()
    {
        return view('workExperience');
    }

    public function workExperience(WorkExperience $request)
    {
        
        //validate
        $validatedRequest = $request->validated();

        dd($validatedRequest); 
    }

//end

//start
    public function redirectInformation() //call the view/Display
    {
        return view('information');
    }   

    public function information(Information $request)
    {
        $validateRequest = $request->validated(); 
        dd($validateRequest);
      //  dd($request->all());
    }
//end


}

 