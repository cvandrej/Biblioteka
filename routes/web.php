<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentController;


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

Route::get('/users', [UserController::class, 'index'])->name('lista.useri');
Route::get('/users/{id}', [UserController::class, 'show'])->name('user.prikazi');

Route::get('/books', [BooksController::class, 'index'])->name('lista.knigi');
Route::get('/books/{id}', [BooksController::class, 'show'])->name('kniga.prikazi');

Route::get('/avtori', [AuthorsController::class, 'index'])->name('lista.avtori');
Route::get('/avtori/{id}', [AuthorsController::class, 'show'])->name('avtor.prikazi');

Route::post('/rent', [RentController::class, 'create'])->name('rent.kniga');
Route::post('/vrati', [RentController::class, 'vrati'])->name('vrati.kniga');


Route::get('/', function(){
    return view('welcome');
})->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('profile/2fa', [ProfileController::class, 'twofa'])->name('profile.twofa');
Route::post('profile/2fa', [ProfileController::class, 'twofaEnable'])->name('profile.twofaEnable');

Route::get('/login/otp', [OTPController::class, 'show'])->name('user.login');
Route::post('/login/otp', [OTPController::class, 'check'])->name('otp.check');
