<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {

        return view('jobs.index', ['jobs' => Job::latest()->filter(request(['search']))->paginate(6)]);
    
    }

    // Show single job
    public function show(Job $job)
    {

        return view('jobs.show', ['job' => $job]);

    }

    // Create job
    public function create()
    {

        return view('jobs.create');

    }

    // Store job
    public function store(Request $request)
    {

        // dd($request);

        $userInput = $request->validate([
            'job'           => 'required|min:3',
            'location'      => 'required',
            'job_type'      => 'required',
            'benefits'      => 'required',
            'salary'        => 'required',
            'emp_type'       => 'required',
            'company'       => 'required',
            'website'       => 'required',
            'description'   => 'required'
        ]);

        Job::create($userInput);

        return redirect('/')->with('message', 'Job posted successfully!');

    }

    // Edit job
    public function edit(Job $job)
    {

        return view('jobs.edit', ['job' => $job]);

    }

    // Store edited job
    public function update(Request $request)
    {

        // dd($request);

        $userInput = $request->validate([
            'job'           => 'required|min:3',
            'location'      => 'required',
            'job_type'      => 'required',
            'benefits'      => 'required',
            'salary'        => 'required',
            'emp_type'       => 'required',
            'company'       => 'required',
            'website'       => 'required',
            'description'   => 'required'
        ]);

        Job::create($userInput);

        return redirect('/')->with('message', 'Job edited successfully!');

    }

}
