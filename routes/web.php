<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', [
        'name' => 'Khitab'
    ]);
});

Route::get('/jobs', function () {
    $jobs = [
        ['id' => 1, 'title' => 'Programming', 'salary' => '$300000'],
        ['id' => 2, 'title' => 'Coder', 'salary' => '$5300000'],
        ['id' => 3, 'title' => 'Teacher', 'salary' => '$3000']
    ];
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        ['id' => 1, 'title' => 'Programming', 'salary' => '$300000'],
        ['id' => 2, 'title' => 'Coder', 'salary' => '$5300000'],
        ['id' => 3, 'title' => 'Teacher', 'salary' => '$3000']
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    if (!$job) {
        abort(404, 'Job not found');
    }

    return view('job', ['job' => $job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
