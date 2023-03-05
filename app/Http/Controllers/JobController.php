<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Pagination;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {

        return view('jobs.index', ['jobs' => Job::latest()->filter(request(['search']))->simplePaginate(3)]);
    
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
            'company'       => ['required', Rule::unique('jobs', 'company')],
            'website'       => 'required',
            'description'   => 'required'
        ]);

        $userInput['user_id'] = auth()->id();

        Job::create($userInput);

        return redirect('/')->with('message', 'Job posted successfully!');

    }

    // Edit job
    public function edit(Job $job)
    {

        return view('jobs.edit', ['job' => $job]);

    }

    // Store edited job
    public function update(Request $request, Job $job)
    {

        // Make sure logged in user is owner
        if($job->user_id != auth()->id())
        {

            abort(403, 'Unauthorized Action');

        }

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

        $job->update($userInput);

        return redirect('/')->with('message', 'Job edited successfully!');

    }

    // Delete job post
    public function destroy (Job $job)
    {

        // Make sure logged in user is owner
        if($job->user_id != auth()->id())
        {

            abort(403, 'Unauthorized Action');

        }

        $job->delete();

        return redirect('/')->with('message', 'Job deleted successfully!');

    }

}
