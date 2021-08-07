<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/article/{article:slug}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/artikel', [HomeController::class, 'index']);
Route::get('/tags', [HomeController::class, 'index']);
Route::get('/kategori', [HomeController::class, 'index']);

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
	Route::get('article', [ArticleController::class, 'index_admin'])->name('article.admin');
	Route::resource('article', ArticleController::class)->except([
    'index'
	]);
	Route::view('home', 'admin.index');
});
