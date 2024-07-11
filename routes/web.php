<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\CategoryController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Client\CommentController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Client\SearchController;
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
Route::get('/search', [SearchController::class, 'index'])->name("search");

Route::prefix("auth")->middleware(['web', "guest"])->name("auth.")->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name("index");
    Route::post('/do-login', [AuthController::class, 'login'])->name("login");

});
Route::prefix("cms")->middleware('check.admin')->name("admin.")->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("homepage");
    Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
    Route::prefix("users")->name("users.")->group(function () {
        Route::get('/', [UserController::class, 'index'])->name("index");
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name("edit");
        Route::post('/update/{user}', [UserController::class, 'update'])->name("update");
        Route::get('/create', [UserController::class, 'create'])->name("create");
        Route::post('/store', [UserController::class, 'store'])->name("store");
        Route::get('/delete/{user}', [UserController::class, 'delete'])->name("delete");
    });
    Route::prefix("about")->name("about.")->group(function () {
        Route::get('/', [UserController::class, 'index'])->name("index");
        Route::get('/edit/{about}', [UserController::class, 'edit'])->name("edit");
        Route::post('/update/{about}', [UserController::class, 'update'])->name("update");
        Route::get('/create', [UserController::class, 'create'])->name("create");
        Route::post('/store', [UserController::class, 'store'])->name("store");
        Route::get('/delete/{about}', [UserController::class, 'delete'])->name("delete");
    });

    Route::prefix("categories")->name("category.")->group(function () {
        Route::get('/', [AdminCategoryController::class, 'index'])->name("index");
        Route::get('/edit/{category}', [AdminCategoryController::class, 'edit'])->name("edit");
        Route::put('/update/{category}', [AdminCategoryController::class, 'update'])->name("update");
        Route::get('/create', [AdminCategoryController::class, 'create'])->name("create");
        Route::post('/store', [AdminCategoryController::class, 'store'])->name("store");
        Route::get('/delete/{category}', [AdminCategoryController::class, 'delete'])->name("delete");
    });

    Route::prefix("posts")->name("posts.")->group(function () {
        Route::get('/', [AdminPostController::class, 'index'])->name("index");
        Route::get('/edit/{post}', [AdminPostController::class, 'edit'])->name("edit");
        Route::put('/update/{post}', [AdminPostController::class, 'update'])->name("update");
        Route::get('/create', [AdminPostController::class, 'create'])->name("create");
        Route::post('/store', [AdminPostController::class, 'store'])->name("store");
        Route::get('/delete/{post}', [AdminPostController::class, 'delete'])->name("delete");
    });
});


