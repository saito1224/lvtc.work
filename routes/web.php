<?php

use Illuminate\Support\Facades\Route;
 dev_basis02
use App\Http\Controllers\PostController; 

use App\Http\Controllers\PostController;  
 master
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
 dev_basis02

Route::get('/a', function() {
    return view('posts.index');});

Route::get('/bb', [PostController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']); 
Route::get('/a', function() {return view('posts.index');});
master
