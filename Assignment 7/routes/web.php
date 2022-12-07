<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\BackpageController;
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

Route::get('/', function () {
    return view('frontpage.homepage');
})->name('homepage');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/list_doctor', [FrontpageController::class, 'list_doctor'])->name('list_doctor');
Route::get('/detail_doctor', [FrontpageController::class, 'detail_doctor'])->name('detail_doctor');
Route::get('/form/{id}', [FrontpageController::class, 'get_form'])->name('form');
Route::post('/post_form', [FrontpageController::class, 'post_form'])->name('post_form');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('backpage.dashboard');
    })->name('admin');
    Route::get('/admin/list_doctor', [BackpageController::class, 'index'])->name('admin_listdoctor');
    Route::get('/admin/add_doctor', [BackpageController::class, 'create'])->name('admin_adddoctor');
    Route::post('/admin/store_doctor', [BackpageController::class, 'store'])->name('admin_postdoctor');
    Route::get('/admin/edit_doctor/{id}', [BackpageController::class, 'edit'])->name('admin_editdoctor');
    Route::post('/admin/update_doctor/{id}', [BackpageController::class, 'update'])->name('admin_updatedoctor');
    Route::get('/admin/delete_doctor/{id}',[BackpageController::class, 'destroy'])->name('admin_deletedoctor');
});

require __DIR__.'/auth.php';