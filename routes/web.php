<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Client\SearchController;
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
Route::post('/contact/store', [ContactController::class, 'store'])->name("contact.store");
Route::get('/post/{slug}', [PostController::class, 'index'])->name("post");
Route::get('/category/{slug}', [CategoryController::class, 'index'])->name("category");
Route::post('/comment', [CommentController::class, 'store'])->name("comment.store");
Route::get('/search', [SearchController::class, 'search'])->name("search");


Route::prefix("cms")->name("admin.")->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("home");

    Route::prefix("user")->name("user.")->group(function () {
        Route::get('/', [UserController::class, 'index'])->name("index");
        Route::get('/create', [UserController::class, 'create'])->name("create");
        Route::post('/store', [UserController::class, 'store'])->name("store");
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name("edit");
        Route::post('/update', [UserController::class, 'update'])->name("update");
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name("delete");

    });
});
