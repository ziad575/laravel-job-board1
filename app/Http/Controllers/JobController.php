<?php

namespace App\Http\Controllers;

use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // Fetches the array from Job.php[cite: 13]
        
        return view('job/index', compact('jobs'), ['name' => 'ziad']);
    }
}