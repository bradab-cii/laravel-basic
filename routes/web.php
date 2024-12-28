<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

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
Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::middleware(['auth'])->group(function () {
    ## Using method "PUT" & "PATCH" ##
    # put -> all fields
    # patch -> partial fields
    Route::get('profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::patch('profile', [ProfileController::class, 'update'])->name('user.profile.update');
    Route::patch('profile-password', [ProfileController::class, 'updatePassword'])->name('user.profile.password');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    // Route::get('/home', function () {
    //     return view('home');
    // })->name('home');

    # using method "DELETE"
    Route::delete('/user-delete', [ProfileController::class, 'destroy'])->name('user.profile.destroy');
});
