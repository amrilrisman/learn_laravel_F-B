<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
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
});

// Route::get('/profile', [BlogController::class, 'profile']);

Route::get('/blog', [BlogController::class, 'blogs']);

Route::get('blog/{blog:slug}',  [BlogController::class, 'detailBlog']);

Route::get('category/{category:slug}',  [CategoryController::class, 'detailCategory']);

Route::get('/author', [AuthorController::class, 'author']);

Route::get('author/{author:username}',  [AuthorController::class, 'detailAuthor']);
