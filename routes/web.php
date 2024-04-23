<?php

use App\Models\Projects;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;

// USER VIEWS
Route::get('/', function () {
    return view('homepage', [
        'projects' => Projects::latest()->get()
    ]);
});
Route::get('/project/{id}', [ProjectsController::class, 'index_user']);

Route::get('/about', function () {
    return view('aboutme');
});


// ADMIN VIEWS
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/projects', [ProjectsController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('projects');
    Route::delete('/projects/{id}', [ProjectsController::class, 'destroy']);
    Route::post('/projects', [ProjectsController::class, 'store']);
    Route::put('/projects/{id}', [ProjectsController::class, 'update']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
