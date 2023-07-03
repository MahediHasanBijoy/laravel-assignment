<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'postsWithCategory']);
Route::get('/count-posts', [PostController::class, 'countPostByCategory']);

Route::get('/posts/{id}/delete', [PostController::class, 'deletePost'])->name('posts.delete');
Route::get('/posts/softdeleted', [PostController::class, 'softDeletedPosts']);

Route::get('/categories/{id}/posts', [CategoryController::class, 'getPostsByCategory'])->name('categories.posts');
Route::get('/categories/posts/latest', [CategoryController::class, 'latestPosts']);