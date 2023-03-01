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

// Show post job form
Route::get('/jobs/create', [JobController::class, 'create']);

// Store job data
Route::post('/jobs', [JobController::class, 'store']);

// Show edit job form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Store edit job from data
Route::put('/jobs', [JobController::class, 'update']);

// Show single job
Route::get('/jobs/{job}', [JobController::class, 'show']);
