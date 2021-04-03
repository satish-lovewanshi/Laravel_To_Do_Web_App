<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
use App\Http\Controllers\ContactController;

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
    return view('home');
});
Route::view('/contact','contact')->name('contact'); #route used in blade template
Route::post('/contact',[ContactController::class,'contact'])->name('contact');
Route::view('/blog','blog')->name('blog');
Route::Resource('todo',todoController::class);


Auth::routes();

Route::get('/todo', [TodoController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', [TodoController::class, 'index'])->name('home')->middleware('auth');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create')->middleware('auth');

Route::fallback(function (){
    return "<h1>You are going wrong way Go back to Home</h1>";
});
