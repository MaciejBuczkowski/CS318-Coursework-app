<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [ProfileController::class,'show'])->middleware(['auth'])->name('dashboard');

//shows all posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
//create/store post
Route::get('/posts/create', [PostController::class,'create'])->middleware(['auth'])->name('posts.create');
Route::post('/posts', [PostController::class,'store'])->middleware(['auth'])->name('posts.store');
//show individual post
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
//edit post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware(['auth'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class,'update'])->middleware(['auth'])->name('posts.update');
//delete post
Route::delete('/posts/{post}',[PostController::class, 'destroy'])->middleware(['auth'])->name('posts.destroy');

//store comment
Route::post('/comment/{post}',[CommentController::class, 'store'])->middleware(['auth'])->name('comment.store');
//delete comment
Route::delete('/comment/{comment}',[CommentController::class, 'destroy'])->middleware(['auth'])->name('comment.destroy');



require __DIR__.'/auth.php';
