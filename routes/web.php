<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Post_userController;
use App\Http\Controllers\MatchingController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/posts/create',[PostController::class,'create']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/posts', [PostController::class, 'index']);   
    Route::get('/', [PostController::class, 'index']);
    Route::get('/posts/{post}',[PostController::class,'show']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::post('/like/{postId}',[Post_userController::class,'store']);
    Route::post('/unlike/{postId}',[Post_userController::class,'destroy']);
    Route::post('/matching/{post}',[MatchingController::class,'matching']);
});


require __DIR__.'/auth.php';
