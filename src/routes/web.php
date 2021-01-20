<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\SiteController;
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
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contacts', [SiteController::class, 'contacts'])->name('contacts');
Route::get('/search', [SiteController::class, 'search'])->name('search');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{alias}', [BlogController::class, 'inner'])->name('blog.inner');
Route::get('/blog/category/{category}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/blog/tag/{tag}', [BlogController::class, 'tag'])->name('blog.tag');
