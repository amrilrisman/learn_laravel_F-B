<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('home', [
        "title" => "home"
    ]);
})->name('home')->middleware('guest');

// Route::get('/profile', [BlogController::class, 'profile']);


//auth
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenti']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->name('register')->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);


Route::get('/blog', [BlogController::class, 'blogs'])->name('blog');

Route::get('/blog/{blog:slug}',  [BlogController::class, 'detailBlog']);

Route::get('category/{category:slug}',  [CategoryController::class, 'detailCategory']);

Route::get('/author', [UserController::class, 'author'])->name('author');


// Dashboard

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => "dashbaord"
    ]);
})->name('dashboard')->middleware('auth');

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/dashboard/blog', DashboardController::class)->middleware('auth');
