<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// ✅ Redirect / to login directly
Route::get('/', function () {
    return redirect('/login');
});

// ✅ Dashboard visible after login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ Blog routes only for logged in users
Route::middleware('auth')->group(function () {
    Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
    Route::resource('posts', PostController::class)->except('index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
