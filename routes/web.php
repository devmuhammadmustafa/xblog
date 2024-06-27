<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name("homepage");
Route::get('/about', [AboutController::class, 'index'])->name("aboutpage");
Route::get('/contact', [ContactController::class, 'index'])->name("contactpage");
Route::get('/post/{slug}', [PostController::class, 'index'])->name("post");
Route::get('/category/{slug}', [CategoryController::class, 'index'])->name("category");
Route::post('/comment', [CommentController::class, 'store'])->name("comment.store");


