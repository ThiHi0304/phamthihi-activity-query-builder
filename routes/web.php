<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/posts',[PostController::class,'index'])->name('index');
Route::get('/onePost/{id}',[PostController::class,'getPost'])->name('getPost');
Route::get('/call-mysql', [PostController::class, 'mySql']);
Route::get('/call-pdo', [PostController::class, 'pdo']);

