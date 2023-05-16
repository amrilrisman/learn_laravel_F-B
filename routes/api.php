<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Resources\BlogResource;
use Illuminate\Support\Facades\Auth;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->get('/blogs', [BlogController::class, "getDataBlog"]);
Route::middleware(['auth:sanctum'])->get('/blog/{blog:id}', [BlogController::class, "blogDetail"]);

Route::middleware(['auth:sanctum'])->post('/blog', [DashboardController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/blog/{blog:id}', [DashboardController::class, 'update']);
Route::middleware(['auth:sanctum'])->delete('/blog/{blog:id}', [DashboardController::class, 'destroy']);

// authentication

Route::post('/login', [AuthenticationController::class, 'login']);

Route::middleware(['auth:sanctum'])->get('/logout', [AuthenticationController::class, 'logout']);
