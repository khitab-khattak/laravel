<?php

namespace App\Http\Controllers;
use App\Models\job;

use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs/create-jobs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'title'=>['required','min:3'],
            'salary'=>['required'],
        ]);
        job::create([
            'title' => request('title'),
            'salary'=> request('salary'),
            'employer_id'=>1
        ]);
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs/show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {
        request()->validate([
            'title'=>['required','min:3'],
            'salary'=>['required'],
        ]);
        //authorize
        //update the job
       
        
        $job->update([
            'title' => request('title'),
            'salary'=> request('salary')
        ]);
        //and presist
        //redirect to job page
        return redirect('/jobs/'.$job->id );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
