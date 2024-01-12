<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThuvienController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/thuvien', [ThuvienController::class, 'index'])->name('index');
Route::get('/thuvien/create', [ThuvienController::class, 'create'])->name('create');
Route::get('/thuvien/{id}/edit', [ThuvienController::class, 'edit'])->name('edit');;
Route::post('/thuvien', [ThuvienController::class, 'store'])->name('store');;
Route::put('/thuvien/{id}', [ThuvienController::class, 'update'])->name('update');;
Route::delete('/thuvien/{id}', [ThuvienController::class, 'destroy'])->name('destroy');;
Route::get('/search', [ThuvienController::class, 'search'])->name('search');
