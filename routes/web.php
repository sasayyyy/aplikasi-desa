<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/signup', [AuthController::class, 'signup'])->name('signup');

Route::post('/store-signup', [AuthController::class, 'storeSignup'])->name('storeSignup');

Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/store-signin', [AuthController::class, 'storeSignin'])->name('storeSignin');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->to('/')->with('success', 'berhasil logout!');
})->name('logout')->middleware('auth');


Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/{user}/modal', [UserController::class, 'showModal'])->name('users.show-modal');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

Route::resource('categories', CategoryController::class);
Route::resource('posts', PostController::class);
Route::resource('posts.comments', CommentController::class)->shallow();
Route::resource('categories', CategoryController::class);
