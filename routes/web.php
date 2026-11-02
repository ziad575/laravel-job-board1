<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\deleController;
use App\Http\Controllers\TagController;   // near the top


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

// 5. Blog routes (managed by PostController)
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::get('/blog/delete', [PostController::class, 'delete']);
Route::get('/blog/{id}', [PostController::class, 'show']);

// 6. Comment routes (managed by CommentController)
Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);


Route::get('/tags', [TagController::class, 'index']);
Route::get('/tags/create', [TagController::class, 'create']);
Route::get('/tags/test-many', [TagController::class, 'testManyToMany']);