<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [WorkController::class, 'Running'])->name('dashboard');

    Route::get('/succeeded', [WorkController::class, 'Success'])->name('success');

    Route::get('/cancled', [WorkController::class, 'Cancle'])->name('cancle');

    Route::get('/all', [WorkController::class, 'All']);
    Route::get('/add', [WorkController::class, 'Add'])->name('add');
    Route::post('/addwork', [WorkController::class, 'store'])->name('store');

    Route::get('/works/edit/{id}', [WorkController::class, 'edit'])->name('edit');
    Route::patch('/works/update/{id}', [WorkController::class, 'Update'])->name('update');
    Route::delete('/works/delete/{id}', [WorkController::class, 'Destroy'])->name('destroy');


});

require __DIR__.'/auth.php';
