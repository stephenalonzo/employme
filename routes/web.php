<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Models\Applicant;
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

// Steps when running register(Request $request)
// - declare $userInput to validate input fields
// - run a bcrypt function to hash $userInput['password']
// - declare $user and assign to model User::create($userInput) to process input fields
// - automatically log user in with auth()->login($user)
// - return redirect to home page ('/')

// Show all jobs
Route::get('/', [JobController::class, 'index']);

// Show post job form
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// Store job data
Route::post('/jobs', [JobController::class, 'store']);

// Show edit job form
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

// Update job
Route::put('/jobs/{job}', [JobController::class, 'update']);

// Delete job
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

// Show single job
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Show register form
Route::get('/register', [UserController::class, 'create']);

// Store user data
Route::post('/user/register', [UserController::class, 'register']);

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login');

// Log user in
Route::post('/user/login', [UserController::class, 'authenticate']);

// Show apply form
Route::get('/jobs/{job}/apply', [ApplicantController::class, 'create']);

// Store application data
Route::post('/jobs/{job}', [ApplicantController::class, 'store']);

// Show applicants
Route::get('jobs/{job}/applicants', [ApplicantController::class, 'applicants']);

// Hire applicants
Route::put('applicants/{applicant}/hired', [ApplicantController::class, 'update']);

// Hire applicants
Route::put('applicants/{applicant}/dismissed', [ApplicantController::class, 'destroy']);

// Log user out
Route::get('/logout', [UserController::class, 'logout']);
