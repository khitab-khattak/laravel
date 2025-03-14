<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;




Route::view('/','home');
// Route::controller(JobController::class)->group(function (){
//     Route::post('/jobs', 'store');
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::patch('/jobs/{job}','update');
//     Route::delete('/jobs/{job}','delete');
//     Route::get('/jobs/edit/{job}','edit');
// });
Route::resource('jobs', JobController::class);


Route::view('/contact','contact');
Route::view('/about', 'about');
