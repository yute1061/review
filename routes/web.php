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
    Route::get('post_review/create', 'add')->name('post_review.add');
    Route::post('post_review/create', 'create')->name('post_review.create');
    Route::get('post_review/edit', 'edit')->name('post_review.edit');
    Route::post('post_review/edit', 'update')->name('post_review.update');
    Route::get('post_review/delete', 'delete')->name('post_review.delete');
    Route::get('post_review', 'index')->name('post_review.index');
});

use App\Http\Controllers\Admin\UserController;
Route::controller(UserController::class)->prefix('admin')->name('admin.')->group(function() {
    Route::get('user/create', 'add')->name('user.add');
    Route::post('user/create', 'create')->name('user.create');
    Route::get('user/edit', 'edit')->name('user.edit');
    Route::post('user/edit', 'update')->name('user.update');
    Route::get('user/delete', 'delete')->name('user.delete');
    Route::get('user/mypage', 'mypage_index')->name('user.index');
});

use App\Http\Controllers\Admin\NavController;
Route::controller(NavController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function() {
    Route::get('toppage', 'toppage')->name('toppage');
    Route::get('guideline', 'guideline')->name('guideline');
    Route::get('about', 'about')->name('about');
});

//-------- admin ここまで --------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
