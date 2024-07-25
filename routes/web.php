<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\postController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// get
// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');

Route::middleware('auth')->group(function () {
    Route::get('/posts/create', [postController::class, 'create'])->name('posts.create');
    Route::post('/posts', [postController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit', [postController::class, 'edit'])->can('update', 'post')->name('posts.edit');
    Route::put('/posts/{post}', [postController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [postController::class, 'destroy'])->name('posts.destroy');
    Route::post('/logout', [LoginUserController::class, 'logout'])->name('logout');

    // Route::get('/admin', function () {
    //     return 'You are logged in as admin';
    // })->middleware('can:is_admin')->name('admin'); //for admin authorisation
    Route::middleware('is-admin')->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
        // Route::get('/admin', [AdminController::class, 'index'])->middleware('is-admin')->name('admin.index');
    Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
    Route::Put('/admin/posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');
    });
});

Route::get('/posts', [postController::class, 'index'])->name('posts.index');
// Route::get('/posts/{post}', [postController::class, 'show'])->middleware('con-view-post')->name('posts.show');//user have to login to see the post
Route::get('/posts/{post}', [postController::class, 'show'])->name('posts.show');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'register'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginUserController::class, 'login'])->name('login');
    Route::post('/login', [LoginUserController::class, 'store'])->name('login.store');
});











Route::get('/text', function () {
    $text = "Test Again";
    return "<h1>".$text."</h1>";
});
