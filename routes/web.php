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

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(5);
   return view('jobs',[
   'jobs'=>$jobs
   ]);
   });

Route::get('/job/{id}', function ($id) {
   

    $job = job::find($id);

    

    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/posts', function () {
    return view('posts', ['posts' => Posts::all()]); // Fixed syntax errors
});
