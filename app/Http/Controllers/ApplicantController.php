<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    // Show apply form
    public function create(Job $job) 
    {

        return view('user.apply',  ['job' => $job]);

    }

    // Store application data
    public function store(Request $request, Job $job)
    {

        // dd($request->file('resume'));

        $userInput = $request->validate([
            'applicant' => 'required',
            'email'     => ['required', 'email']
        ]);

        if ($request->hasFile('resume'))
        {

            $userInput['resume'] = $request->file('resume')->store('resumes', 'public');
            $userInput['job_id'] = $job->id;

        }

        Applicant::create($userInput);

        return redirect('/')->with('message', 'Test!');

    }

    // Show apply form
    public function applicants(Job $job) 
    {

        return view('user.applicants',  ['applicants' => Applicant::all(), 'job' => $job]);

    }

    public function update(Applicant $applicant)
    {

        $userInput['applicant_status'] = 1;
        $applicant->update($userInput);
        
        return redirect('/')->with('message', 'Test!');

    }

    public function destroy(Applicant $applicant)
    {

        $applicant->delete();
        
        return redirect('/')->with('message', 'Delted!');

    }

}
