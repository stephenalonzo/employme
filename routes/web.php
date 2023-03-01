<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing  

// Show all jobs
Route::get('/', [JobController::class, 'index']);

// Create a job form
Route::get('/jobs/create', [JobController::class, 'create']);

// Store a job form
Route::post('/jobs', [JobController::class, 'store']);

// Show single job
Route::get('/jobs/{job}', [JobController::class, 'show']);
