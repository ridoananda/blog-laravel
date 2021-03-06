<?php

use Illuminate\Support\Facades\{Route, Artisan};
use App\Http\Controllers\HomeController;
use App\Http\Controllers\{ArticleController, ImageController};

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
Route::get('/migrate', function (Request $request) {
  Artisan::call('migrate');
  return 'migrated!';
});
Route::get('/db-seed', function (Request $request) {
  Artisan::call('db:seed');
  return 'seeded!';
});
Route::post('/upload-image', [ImageController::class, 'markdown'])->middleware('auth');
Route::get('/article/{article:slug}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/articles', [HomeController::class, 'article'])->name('articles');
Route::get('/tags', [HomeController::class, 'tags']);
Route::get('/tag/{tag:slug}', [HomeController::class, 'tag'])->name('tag.show');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/category/{category:slug}', [HomeController::class, 'category'])->name('category.show');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function() {
	Route::get('article', [ArticleController::class, 'index_admin'])->name('article.admin');
	Route::resource('article', ArticleController::class)->except([
    'index'
	]);
	Route::view('home', 'admin.index');
});
