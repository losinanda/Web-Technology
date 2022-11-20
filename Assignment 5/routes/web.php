<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormulaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/geometry', [FormulaController::class, 'input_geometry'])->name('inputgeometry');
Route::post('/resultgeometry', [FormulaController::class, 'result_geometry'])->name('resultgeometry');

Route::get('/arithmetic', [FormulaController::class, 'input_arithmetic'])->name('inputarithmetic');
Route::post('/resultarithmetic', [FormulaController::class, 'result_arithmetic'])->name('resultarithmetic');

Route::get('/fibonacci', [FormulaController::class, 'input_fibonacci'])->name('inputfibonacci');
Route::post('/resultfibonacci', [FormulaController::class, 'result_fibonacci'])->name('resultfibonacci');

require __DIR__.'/auth.php';