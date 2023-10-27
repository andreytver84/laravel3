<?php

use App\Http\Controllers\ToDoController;
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

Route::get('/todo', [ToDoController::class,'index'])->name('todo.index');

Route::group(['middleware'=> 'auth'], function () {
    Route::get('/todo/create', [ToDoController::class,'create'])->name('todo.create');
});

Route::post('/todo', [ToDoController::class,'store'])->name('todo.store');

Route::get('/todo/{todo}', [ToDoController::class,'show'])->name('todo.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
