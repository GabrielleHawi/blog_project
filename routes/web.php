<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;


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

Route::get('monitoring', [NewController::class,'index'])->name('activity');
Route::post('add',[NewController::class,'post_blog'])->name('post_blog');
Route::post('get/{id}',[NewController::class,'delete'])->name('delete');
// Route::get('/user', [UserController::class, 'index']);

