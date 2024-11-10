<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Profile;
use App\Models\User;
use App\Models\WorkExperience;
use GuzzleHttp\Client;
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
        // saving....
        // $sql = "SELECT * FROM users WHERE id = 1 LIMIT 1"
        // ->where('id', '=', 1)
        // ->where('id', 'like', '%johndoe%')
        // ->where('id', 1) // =
        // $user = User::select()->where('id', 1)->first();
        // $user = User::where('id', 1)->first();
        // $user = User::whereId(1)->first();
        // $user = User::find(1);

        // SELECT * FROM users WHERE id IS NOT NULL LIMIT 1
        // $user = User::whereNotNull('id')->first();

        // SELECT * FROM users WHERE id IS NULL LIMIT 1
        // $user = User::whereNull('id')->first();

        // $user = User::whereBetween('created_at', ['2020-01-01', '2025-01-01'])->get();

        // $user = User::whereId(1)
        //     ->orWhere('id', 2)
        //     ->get();

        // $user = WorkExperience::where(function ($query) {
        //     $query->where('start_date', '>=', now()->startOfYear()->addYear(-1))
        //         ->where('end_date', '<=', now());
        // })
        //     ->orWhere('id', 2)
        //     // ->limit(10)
        //     // ->toSql();
        //     ->get();

        // $user = DB::select("SELECT * FROM users WHERE id = 1 limit 1");

        // $user = User::whereRaw('id = 1')->first();
        // $user = DB::table('users')
        //     ->where('id', 1)
        //     ->orWhereRaw('id = 2')
        //     ->get();

        // $user = DB::select('SELECT * FROM users WHERE id = 1 LIMIT 1');
        // $user = User::where('id', 1)->cursor();

        // $user = User::orderBy('id', 'asc')
        //     ->orderBy('created_at', 'desc')
        //     ->orderBy(function ($query) {
        //         $query->where('id', 2)
        //             ->orderBy('updated_at', 'desc');
        //     })
        //     ->toSql();

        // $user = User::withCount('workExperiences')
        //     ->with([
        //         'workExperiences' => function ($query) {
        //             // $query->with([
        //             //     'company' => function ($query) {
        //             //         $query->with('country');
        //             //     }
        //             // ]);
        //         }
        //     ])
        //     ->where('id', 11)
        //     ->get();

        // $user = WorkExperience::with('user')->first();

        // $user = User::where('users.id', 11)
        //     ->where('table1.start_date', '<=', now())
        //     // ->join('work_experiences as table1', 'table1.user_id', '=', 'users.id')
        //     ->crossJoin('work_experiences as table1', function ($query) {
        //         $query->on('table1.user_id', '=', 'users.id');
        //         // ->where(.....);
        //     })
        //     ->first();

        // dd($user->toArray());

        // validate
        $validatedRequest = $request->validated();

        // saving...
        $user = User::create($validatedRequest);

        // $user = new User();
        // $user->name = $validatedRequest['name'];
        // $user->email = 'janedoe@mail.test';
        // $user->password = 'admin123';
        // $user->save();

        // $csv = [
        //     [
        //         'name' => 'Danniel',
        //         'email' => 'dan+2@mail.test',
        //         'password' => Hash::make('password'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Denise',
        //         'email' => 'den+2@mail.test',
        //         'password' => Hash::make('password'),
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ];

        // $user = User::insert($csv);

        // $user = User::where('id', 1)->update([
        //     'name' => 'Johnny'
        // ]);

        // $user = User::find(1);
        // $user->name = "Brendon";
        // $user->save();

        // $user = User::truncate();

        // $http = new Client();
        // $response = $http
        // ->post('/api/visual-basic', [
        //     'headers' => [],
        //     'params' => []
        // ]);

        // $user = User::findOrFail(1)->delete();

        // dd($user);

        return redirect()->route('users.redirect-login');
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

    /**
     * Redirect to login page.
     *
     * @return view
     */
    public function redirectLogin()
    {
        return view('login');
    }

    /**
     * Process login form.
     */
    public function login(LoginRequest $request)
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

    public function logout()
    {
        Auth::logout();

        return redirect()->route('users.redirect-login');
    }
}
