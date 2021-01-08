<?php

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\PageController;
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

//Configuración de la ruta raiz
Route::get('/', [PageController::class, 'posts']);
Route::get('blog/{post}', [PageController::class, 'post'])->name('post');//Ruta a donde irá cuando haga click en algún post - Recibé el parámetro post - irá al método post

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', App\Http\Controllers\Backend\PostController::class)
->middleware('auth')
->except('show');
