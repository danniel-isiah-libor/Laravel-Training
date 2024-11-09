<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkExperience\StoreRequest;
use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    /**
     * Display work experience form.
     */
    public function create()
    {
        return view('work-experience');
    }

    public function store(StoreRequest $request)
    {
        // validate...
        $validatedRequest = $request->validated();

        dd($validatedRequest);
        // saving...

        // redirect....
    }
}
