<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\job;
use App\Models\Posts;



Route::get('/', function () {
    return view('home', [
        'name' => 'Khitab'
    ]);
});
Route::post('/jobs', function(){
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
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs/index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function (){
    return view('jobs/create-jobs');
    });

Route::get('/jobs/{id}', function ($id) {
 $job = job::find($id);
 return view('jobs/show', ['job' => $job]);
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs/edit/{id}', function ($id) {
    $job = job::find($id);
    return view('jobs.edit', ['job' => $job]);
   });

Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title'=>['required','min:3'],
        'salary'=>['required'],
    ]);
    //authorize
    //update the job
    $job = Job::findorFail($id);
    
    $job->update([
        'title' => request('title'),
        'salary'=> request('salary')
    ]);
    //and presist
    //redirect to job page
    return redirect('/jobs/'.$job->id );
   });

Route::delete('/jobs/{id}', function ($id) {
    //authorize on hold
    //
    Job::find($id)->delete();
    return redirect('/jobs');
   });


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    return view('posts', ['posts' => Posts::all()]); // Fixed syntax errors
});
