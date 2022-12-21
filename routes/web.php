<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ComicController;
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

Route::get('/', [PageController::class, 'index'])->name('comics');

//Route::get('admin/comics/{post}', [ComicController::class, 'show'])->name('comics.show');
//Route::get('admin/comics/create', [ComicController::class, 'create'])->name('comics.create');
//Route::post('admin/posts', [ComicController::class, 'store'])->name('posts.store');

Route::resource('admin/comics', ComicController::class);
