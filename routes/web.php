<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Greet;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/jobposts/create',     [JobPostController::class, 'create'])->name('jobposts.create');
    Route::get('/jobposts/{id}/edit',  [JobPostController::class, 'edit'])->name('jobposts.edit');
    Route::post('/jobposts',           [JobPostController::class, 'store'])->name('jobposts.store');
    Route::put('/jobposts/{id}',       [JobPostController::class, 'update'])->name('jobposts.update');
    Route::delete('/jobposts/{id}',    [JobPostController::class, 'destroy'])->name('jobposts.destroy');
});

Route::get('/jobposts',            [JobPostController::class, 'index'])->name('jobposts.index');
Route::get('/jobposts/list',       [JobPostController::class, 'list'])->name('jobposts.list');
Route::get('/jobposts/{id}',       [JobPostController::class, 'show'])->name('jobposts.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('guest')->group(function () {
});


require __DIR__ . '/auth.php';
