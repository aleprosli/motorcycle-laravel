<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/motorcycle/index', [App\Http\Controllers\MotorcycleController::class, 'index'])->name('motorcycle:index');
Route::get('/motorcycle/create', [App\Http\Controllers\MotorcycleController::class, 'create'])->name('motorcycle:create');
Route::post('/motorcycle/store', [App\Http\Controllers\MotorcycleController::class, 'store'])->name('motorcycle:store');
Route::get('/motorcycle/{motocycle}', [App\Http\Controllers\MotorcycleController::class, 'edit'])->name('motorcycle:edit');
Route::post('/motorcycle/update/{motocycle}', [App\Http\Controllers\MotorcycleController::class, 'update'])->name('motorcycle:update');
Route::get('/motorcycle/destroy/{motocycle}', [App\Http\Controllers\MotorcycleController::class, 'destroy'])->name('motorcycle:destroy');





