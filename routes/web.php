<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
// get, post, put, delete, patch
# basic
Route::get('/', function () {
    return view('welcome');
})->name('home');

# basic get with parameters (name)
Route::get('/page/{name}', function ($name) {
    return "page {$name}";
})->name('page');

# basic add name to route
# route group
Route::group(['prefix' => 'user'], function () {
    Route::get('/profile', function () {
        return 'users';
    })->name('user.profile');
}); // http://127.0.0.1:8000/user/profile


Route::group(['prefix' => 'admin'], function () {
    Route::get('/profile', function () {
        return 'users';
    })->name('admin.profile');
}); // http://127.0.0.1:8000/admin/profile


# route with controller
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/{id}', [PostController::class, 'edit'])->name('posts.edit');

# route with resource (index, edit, store, update, destroy)
Route::resource('posts', PostController::class)->only(['index', 'edit']);


## Using Method "POST" ##
Route::get('/login', [LoginController::class, 'index'])->name('login.view');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
