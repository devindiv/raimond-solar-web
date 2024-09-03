<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'getAbout']);
Route::get('/contact', [PageController::class, 'getContact']);
Route::get('/all-categories', [PageController::class, 'getCategories']);

Route::get('/products', [ProductController::class, 'products']);

// Create New Products

Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');

Route::post('/products', [ProductController::class, 'store'])->middleware('auth');

//Edit Products

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');

Route::put('/products/{product}', [ProductController::class, 'update'])->middleware('auth');

// Delete Products

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('auth');

Route::get('/products/manage', [ProductController::class, 'manage'])->middleware('auth')->name('manage');

Route::get('/products/{product}', [ProductController::class, 'show']);

Route::resource('/categories', CategoryController::class)->middleware('auth')->except('show');

Route::get('/categories/{category}', [CategoryController::class,'show']);

// Show register form

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Store New User

Route::post('/users', [UserController::class, 'store']);

//Logout

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);
