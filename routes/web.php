<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

// 1. Root / Home route (redirects to /job)
Route::get('/', function () {
    return redirect('/job');
});

// 2. Jobs Index route (managed by JobController)
Route::get('/job', [JobController::class, 'index']);

// 3. About Us route
Route::get('/about', function () {
    return view('job.about', ['name' => 'Ziad']);
});

// 4. Contact Us route
Route::get('/contact', function () {
    return view('job.contact');
});