<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;
use App\Http\Controllers\IndexController;

Route::get('/', action: [IndexController::class, 'index']);
    
    


// Added routes so your navigation links work
Route::get('/home', function () {
    return 'Home Page';
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/job', [JobController::class, 'index']);