<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});


Route::get('/home', function () {
    return view('welcome');
})->name('home');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/dashboard', [App\Http\Controllers\TemporalController::class, 'index'])->name('dashboard');
Route::get('/table_bootstrap', [App\Http\Controllers\TemporalController::class, 'table_bootstrap'])->name('table_bootstrap');
Route::get('/form_dropzone', [App\Http\Controllers\TemporalController::class, 'form_dropzone'])->name('form_dropzone');
Route::get('/form_edit', [App\Http\Controllers\TemporalController::class, 'form_edit'])->name('form_edit');
Route::get('/form_validate', [App\Http\Controllers\TemporalController::class, 'form_validate'])->name('form_validate');
Route::get('/form_layout', [App\Http\Controllers\TemporalController::class, 'form_layout'])->name('form_layout');
Route::get('/index', [App\Http\Controllers\TemporalController::class, 'index'])->name('index');
Route::get('/widget', [App\Http\Controllers\TemporalController::class, 'widget'])->name('widget');
