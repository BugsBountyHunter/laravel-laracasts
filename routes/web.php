<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::view("/", "home");
Route::resource("jobs", JobController::class, []);
Route::view("/about", "about");

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/jobs', function () {
//     $jobs = Job::with('employer')->simplePaginate(3);
//     return view('jobs', ["jobs" => $jobs]);
// });

// Route::get('/jobs/{id}', function ($id) {
//     return view('job', ["job" => Job::find($id)]);
// });

// Route::get('/about', function () {
//     return view('about');
// });