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

use App\Http\Controllers\ReviewController;
Route::controller(ReviewController::class)->group(function() {
    Route::get('post_review/create', 'add');
    Route::post('post_review/create', 'create');
    Route::get('post_review/edit', 'edit');
    Route::post('pot_review/edit', 'update');
    Route::get('post_review/delete', 'delete');
    
    Route::get('top', 'index');
});