<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/our-activities', [HomeController::class, 'activities']);
Route::get('/our-programs', function () {return view('our-programs');});
Route::get('/our-services', function () {return view('our-services');});
Route::get('/our-business', function () {return view('our-business');});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index']);
    Route::get('/admin/activities', [ActivityController::class, 'index'])->name('admin/activities');
    Route::get('/admin/activities/create', [ActivityController::class, 'create'])->name('admin/activities/create');
    Route::post('/admin/activities/save', [ActivityController::class, 'save'])->name('admin/activities/save');
    Route::get('/admin/activities/edit/{id}', [ActivityController::class, 'edit'])->name('admin/activities/edit');
    Route::put('/admin/activities/edit/{id}', [ActivityController::class, 'update'])->name('admin/activities/update');
    Route::get('/admin/activities/delete/{id}', [ActivityController::class, 'delete'])->name('admin/activities/delete');
});

require __DIR__.'/auth.php';
