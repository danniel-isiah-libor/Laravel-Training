<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\EmploymentRequest;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\JobExperience;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
    public function store(StoreRequest $request)
    {
        //dd($request->all());

        //  validate...
        $validatedRequest = $request->validated();
        //dd($validatedRequest);
        //$request->validate([
        //    direct validation in controller
        //]);

        // saving...
        // $sql = "SELECT * FROM users WHERE id = 1"
        //->where('id', '=', 1);
        //->where('id', 'like', '%johndoe%')
        //->where('id', 1) // =
        //$user = User::select()->where('id', 1)->first();
        //$user = User::where('id', 1)->first();
        //$user = User::whereId(1)->first();
        //$user = User::find(1); // for primary key only

        // SELECT * FROM users WHERE id  IS NOT NULL ...
        //$user = User::whereNotNull('id')->first(); 

        // SELECT * FROM users WHERE id  IS NOT LIMIT 1 ...
        //$user = User::whereNull('id')->first(); 

        //$user = User::whereIn('id', [1, 2, 3])->get();
        //$user = User::whereNotNull('id')->get();
        //$user = User::whereBetween('created_at', ['2020-01-01','2025-01-01'])->get();

        // $user = User::where('id', '=', 1)
        //      ->where('email', 'daniel.abelardo@example.net')
        //      ->first();

        // $user = User::where('id', '=', 1)
        //      ->orWhere('email', 'daniel.abelardo@example.net')
        //      ->first();

        // $user = User::whereId(1)
        //     ->orWhere('id', 2)
        //     ->get();

        // $user = JobExperience::where(function($query) {
        //     $query->where('start_year', '>=', now()->startOfYear()->addYear(-1))
        //     ->where('end_year', '<=', now());
            
        // })

        // ->orWhere('id',2)
        // //->limit(10)
        // //->toSql();
        // ->get();

        // $user = DB::select("SELECT * FROM users WHERE id = 1 limit 1");

        //$user = User::whereRaw('id = 1')->first();

        // $user = DB::table('users')
        //     ->where('id',1)
        //     ->orWhereRaw('id=2')
        //     ->get();

        // $user = User::where('id', [1,2,3])->cursor();

        // $user = User::orderBy('id', 'desc')
        // ->get();

        // $user = User::orderBy('id', 'asc')
        // ->orderBy('create_at', 'desc')
        // ->orderBy(function ($query) {
        //     $query->where('id', 2)
        //         ->orderBy('updated_at', 'desc');
        // })
        // ->toSql();

        // $user = User::with('workExperiences')
        //     ->where('id', 11)
        //     ->get();

        //$user = JobExperience::with('user')->first();

        // $user = User::where('users.id', 11)
        //     ->where('table1.start_year','<=', now())
        //     //->join('job_experiences as table1', 'table1.user_id', '=', 'users.id'))
        //     ->join('job_experiences as table1', function ($query) {
        //         $query->on('table1.user_id', '=', 'users.id');
        //     })
        //     ->first();
        // dd($user->toArray());


        // saving..
        $user = User::create($validatedRequest); //personal na ginagamit ni instructor

        // $user = User::create([
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@email.test',
        //     'password' => 'admin123'
        // ]);

        // $user = new User();
        // $user->name = 'John Daw';
        // $user->email = 'johndaw@email.test';
        // $user->password = 'admin123';
        // $user->save();

        // Storing ...
        // $csv = [
        //     [
        //         'name' => 'Jane Die',
        //         'email' => 'janedin+1@mail.test',
        //         'password' => Hash::make('admin123'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Jane Joe',
        //         'email' => 'janedoe+2@mail.test',
        //         'password' => Hash::make('admin123'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ];

        // $user = User::insert($csv);
        //dd($user);

        
        // Update...
        // $user =User::where('id', 1)->update([
        //     'name' => 'Johhy Johhny'
        // ]);
        
        // $user = User::find(1);
        // $user->name= "Johny Sins";
        // $user->save();
        //dd($user);


        //Deletion...

        //$user = User::truncate(); //option but not recommended

        //$user=User::findOrFail(41)->delete();

        //dd($user);

        return redirect()->route('users.login-redirect');

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
       //$parameters = $request->boolean('is_active', false);
        //$request->merge(['user_id' => 1]);
        //dd($request->all());

        return view('register', [
            'data' => "Hello World"
        ]);
    }

    /*test login creation*/
    public function loginRedirect ()
    {
        return view('login');
    }

    /**
     * Login Logic.
     *
     * @return string
     */
    public function login(LoginRequest $request)
    {
        // validate...
        $validatedRequest = $request->validated();
        
        //dd($validatedRequest);
        //$email="correct@email.test"
        //$password="123456"
        
        //authenticate...
        // $user = new User();

        // $user->email = $validatedRequest['email'];

        // Auth::login($user);

        $user = User::whereEmail($validatedRequest['email'])
        ->first();

        Auth::login($user);

        // dump(Auth::check());

        // Auth::logout();
        
        // dd(Auth::check());

        //return redirect()->route('dashboard');

        return view('dashboard');
    }


    /*test login creation*/
    public function employmentRedirect ()
    {
        return view('employment');
    }

    public function employment(EmploymentRequest $request)
    {
        // validate...
        $validatedRequest = $request->validated();
        
        dd($validatedRequest);
        
        //authenticate...

    }


    /*test logout*/
    public function logout ()
    {
    Auth::logout();
        
    return redirect()->route('users.login-redirect');
    }


        /**
     * Redirect to profile page.
     */
    public function profile()
    {
        // $id = Auth::user()->id;

        // $user = User::find($id);

        return view('UserUpdate', [
            // 'user' => $user
        ]);
    }

    /**
     * Update user profile
     */
    public function update(UpdateRequest $request)
    {
        // validate...
        $validatedRequest = $request->validated();

        $id = Auth::user()->id;

        $user = User::find($id);
        $user->name = $validatedRequest['name'];
        $user->email = $validatedRequest['email'];

        if ($validatedRequest['password']) {
            $user->password = $validatedRequest['password'];
        }

        $user->save();
    }
}
