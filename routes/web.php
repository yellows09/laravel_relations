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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/one-to-one', [App\Http\Controllers\oneToOne\oneToOneController::class, 'index'])->name('one-to-one');
Route::get('/one-to-many', [App\Http\Controllers\oneToMany\OneToManyController::class, 'index'])->name('one-to-many');
Route::get('/many-to-many', [App\Http\Controllers\manyToMany\ManyToManyController::class, 'index'])->name('many-to-many');
