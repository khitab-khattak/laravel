<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\job;



Route::get('/', function () {
    return view('home', [
        'name' => 'Khitab'
    ]);
});

Route::get('/jobs', function () {
   
    return view('jobs', ['jobs' => job::all()]);
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
