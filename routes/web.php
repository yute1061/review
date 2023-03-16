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
Route::controller(ReviewController::class)->prefix('admin')->name('admin.')->group(function() {
    Route::get('post_review/create', 'add')->name('post_review.add');
    Route::post('post_review/create', 'create')->name('post_review.create');
    Route::post('post_review/preview', 'preview')->name('post_review.preview');
    Route::get('post_review/edit', 'edit')->name('post_review.edit');
    Route::post('post_review/edit', 'update')->name('post_review.update');
    Route::get('post_review/delete', 'delete')->name('post_review.delete');
});

use App\Http\Controllers\Admin\UserController;
Route::controller(UserController::class)->prefix('admin')->name('admin.')->group(function() {
    Route::get('user/edit', 'edit')->name('user.edit');
    Route::post('user/edit', 'update')->name('user.update');
    Route::get('user/mypage', 'mypage')->name('user.index');
});


//-------- admin ここまで --------

Auth::routes();

use App\Http\Controllers\NavController as PublicNavController;
Route::controller(PublicNavController::class)->group(function() {
    Route::get('/', 'toppage')->name('toppage');
    Route::get('guideline', 'guideline')->name('guideline');
    Route::get('about', 'about')->name('about');
});

use App\Http\Controllers\UserController as PublicUserController;
Route::controller(PublicUserController::class)->group(function() {
    Route::get('user/create', 'add')->name('user.add');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
