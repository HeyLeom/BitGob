<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ImagesPostsController;
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
    return view('welcome');
});
Route::get('users',[UsersController::class, 'index'])->name('user.index');

Route::get('users/create',[UsersController::class, 'create'])->name('user.create');

Route::post('users',[UsersController::class, 'store'])->name('user.store');

Route::get('users/{usuario}/addPhoto',[UsersController::class, 'addPhoto'])->name('user.addPhoto');

Route::post('users/uploadImage',[ImagesController::class, 'store'])->name('image.store');

Route::get('posts',[PostsController::class, 'index'])->name('post.index');

Route::get('posts/create',[PostsController::class, 'create'])->name('post.create');

Route::post('posts',[PostsController::class, 'store'])->name('post.store');

Route::get('posts/{post}/addPhoto',[PostsController::class, 'addPhoto'])->name('post.addPhoto');

Route::post('posts/uploadImage',[ImagesPostsController::class, 'storePost'])->name('imagePost.store');

Route::get('posts/{post}/edit',[PostsController::class, 'edit'])->name('post.edit');

Route::patch('posts/{post}',[PostsController::class, 'update'])->name('post.update');
