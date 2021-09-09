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

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{id}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    // Tasks
    Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
    Route::get('/task/{id}', [App\Http\Controllers\TaskController::class, 'show'])->name('tasks.show');
    
    // Components Routes
    Route::get('/get-post/{id}',[App\Http\Controllers\ComponentsController::class, 'getPost']);
    Route::get('/get-task/{id}',[App\Http\Controllers\ComponentsController::class, 'getTask']);
});

