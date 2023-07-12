<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('start');
// });

Route::get('/users', [UserController::class, 'index']);

Route::get('/', [BooksController::class, 'index']);
Route::get('/books/{id}', [BooksController::class, 'show'])->name('kniga.prikazi');

Route::get('/avtori', [AuthorsController::class, 'index']);
Route::get('/authors/{id}', [AuthorsController::class, 'show'])->name('avtor.prikazi');

