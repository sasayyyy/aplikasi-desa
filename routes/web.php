<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/profile', [ProfileController::class,'index'])->name('profile');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/about', [AboutController::class,'index'])->name('about');

Route::get('/signup', [AuthController::class,'signup'])->name('signup');

Route::post('/store-signup', [AuthController::class,'storeSignup'])->name('storeSignup');

Route::get('/signin', [AuthController::class,'signin'])->name('signin');
Route::post('/store-signin', [AuthController::class,'storeSignin'])->name('storeSignin');


?>
