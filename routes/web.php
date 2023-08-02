<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\NewsController;
use \App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

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

//Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], static function () {
    Route::get('/', AdminController::class)->name('index');
    Route::resource('/categories', AdminCategoryController::class);
    Route::resource('/news', AdminNewsController::class);
});

//Greeting
Route::get('/greeting', function () {
    return view('user.greeting');
});

//News
Route::get('/categories', [CategoriesController::class, 'index'])
    ->name('user.categories.index');
Route::get('/categories/news', [NewsController::class, 'index'])
    ->where('cid', '\d+')
    ->name('user.news.index');
Route::get('/categories/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->where('cid', '\d+')
    ->name('user.news.show');
Route::get('/test', function() {
    return response()->download('robots.txt');
});
