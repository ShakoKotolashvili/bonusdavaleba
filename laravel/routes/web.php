<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'renderPosts'])->name('home');
Route::get('/admin', [PostController::class, 'showAdmin'])->name('admin');
Route::post('/admin', [PostController::class, 'cu'])->name('cu');
Route::get('/delete/{post?}', [PostController::class, 'delete'])->name('delete');
