<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ServiceController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/our-activities', [HomeController::class, 'activities']);
Route::get('/our-programs', function () {return view('our-programs');});
Route::get('/our-services', function () {return view('our-services');});
Route::get('/our-businesses', function () {return view('our-businesses');});


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

    Route::get('/admin/programs', [ProgramController::class, 'index'])->name('admin/programs');
    Route::get('/admin/programs/create', [ProgramController::class, 'create'])->name('admin/programs/create');
    Route::post('/admin/programs/save', [ProgramController::class, 'save'])->name('admin/programs/save');
    Route::get('/admin/programs/edit/{id}', [ProgramController::class, 'edit'])->name('admin/programs/edit');
    Route::put('/admin/programs/edit/{id}', [ProgramController::class, 'update'])->name('admin/programs/update');
    Route::get('/admin/programs/delete/{id}', [ProgramController::class, 'delete'])->name('admin/programs/delete');

    Route::get('/admin/services', [ServiceController::class, 'index'])->name('admin/services');
    Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin/services/create');
    Route::post('/admin/services/save', [ServiceController::class, 'save'])->name('admin/services/save');
    Route::get('/admin/services/edit/{id}', [ServiceController::class, 'edit'])->name('admin/services/edit');
    Route::put('/admin/services/edit/{id}', [ServiceController::class, 'update'])->name('admin/services/update');
    Route::get('/admin/services/delete/{id}', [ServiceController::class, 'delete'])->name('admin/services/delete');

    Route::get('/admin/businesses', [BusinessController::class, 'index'])->name('admin/businesses');
    Route::get('/admin/businesses/create', [BusinessController::class, 'create'])->name('admin/businesses/create');
    Route::post('/admin/businesses/save', [BusinessController::class, 'save'])->name('admin/businesses/save');
    Route::get('/admin/businesses/edit/{id}', [BusinessController::class, 'edit'])->name('admin/businesses/edit');
    Route::put('/admin/businesses/edit/{id}', [BusinessController::class, 'update'])->name('admin/businesses/update');
    Route::get('/admin/businesses/delete/{id}', [BusinessController::class, 'delete'])->name('admin/businesses/delete');

    Route::get('/admin/activities', [ActivityController::class, 'index'])->name('admin/activities');
    Route::get('/admin/activities/create', [ActivityController::class, 'create'])->name('admin/activities/create');
    Route::post('/admin/activities/save', [ActivityController::class, 'save'])->name('admin/activities/save');
    Route::get('/admin/activities/edit/{id}', [ActivityController::class, 'edit'])->name('admin/activities/edit');
    Route::put('/admin/activities/edit/{id}', [ActivityController::class, 'update'])->name('admin/activities/update');
    Route::get('/admin/activities/delete/{id}', [ActivityController::class, 'delete'])->name('admin/activities/delete');
});

require __DIR__.'/auth.php';
