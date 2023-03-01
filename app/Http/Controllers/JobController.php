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
            'benefits'      => 'required',
            'salary'        => 'required',
            'company'       => 'required',
            'website'       => 'required',
            'description'   => 'required'
        ]);

        switch ($userInput['salary'])
        {

            case '1':
                $userInput['salary'] = '$25K-$45K';
            break;
            
            case '2':
                $userInput['salary'] = '$50K-$75K';
            break;

            case '3':
                $userInput['salary'] = '$80K-$105K';
            break;

            case '4':
                $userInput['salary'] = '$110K-$125K';
            break;

            default:
            break;

        }

        Job::create($userInput);

        return redirect('/')->with('message', 'Job posted successfully!');

    }
    
}
