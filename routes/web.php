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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index.index');
Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');

Route::get('profiles/{id}', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profiles.show');
