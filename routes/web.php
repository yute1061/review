<?php

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

use App\Http\Controllers\Admin\ReviewController;
Route::controller(ReviewController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('post_review/create', 'add');
    Route::post('post_review/create', 'create');
    Route::get('post_review/edit', 'edit');
    Route::post('post_review/edit', 'update');
    Route::get('post_review/delete', 'delete');
    Route::get('post_review', 'index');
});

use App\Http\Controllers\Admin\UserController;
Route::controller(UserController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('user/create', 'add');
    Route::post('user/create', 'create');
    Route::get('user/edit', 'edit');
    Route::post('user/edit', 'update');
    Route::get('user/delete', 'delete');
});

use App\Http\Controllers\Admin\NavController;
Route::controller(NavController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('toppage', 'toppage');
    Route::get('guideline', 'guideline');
    Route::get('about', 'about');
});


//-------- admin ここまで --------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');