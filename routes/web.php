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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\Controller::class, 'about'])->name('about');
Route::get('/', [App\Http\Controllers\Controller::class, 'welcome'])->name('welcome');

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{id}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    // Tasks
    Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
    Route::get('/task/{id}', [App\Http\Controllers\TaskController::class, 'show'])->name('tasks.show');
    Route::post('/task', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');

    // Posts
    Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    
    // Components Routes
    Route::get('/get-post/{id}',[App\Http\Controllers\ComponentsController::class, 'getPost']);
    Route::get('/get-task/{id}',[App\Http\Controllers\ComponentsController::class, 'getTask']);
});

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admins-panel', [App\Http\Controllers\AdminsController::class, 'index'])->name('admins.index');
});