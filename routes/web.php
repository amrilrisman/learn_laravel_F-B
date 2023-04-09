<?php

use App\Http\Controllers\BlogController;
use App\Models\BlogModel;
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

Route::get('/profile', [BlogController::class, 'profile']);

Route::get('/blog',[BlogController::class, 'blogs']);

Route::get('blog/{slug}',  [BlogController::class, 'detailBlog']);
