<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\StaffController;

Route::get('/', function () {
    $user = [
        'name' => 'Bennett',
        'role' => 'Student',
        'active' => true
    ];
    return view('welcome', compact('user'));
});

Route::get('/about', function () {
    return view('about/index');
});


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/candidate', [StudentController::class, 'store'])->name('student.store');

Route::resource('staff', StaffController::class);

// Optional: Home route
Route::get('/', function () {
    return redirect()->route('staff.index');
});

