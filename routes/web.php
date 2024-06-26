<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Example of what I had.
// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
//     Route::get('/jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::post('/jobs', 'store');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');
// });

// This way we can control which route we want as well
// Route::resource('jobs', JobController::class, [
//     'only' =>
//     'except' => ['edit']
// ]);

// This makes all of the routes for a typical REST api
Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');
