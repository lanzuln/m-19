<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PostController::class, 'index']);
Route::get('/post', [PostController::class, 'get_all']);


Route::get('/posts/{id}', [PostController::class, 'single_post_view']);

Route::get('/posts/data/{id}', [PostController::class, 'single_post_data']);
