<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/cadastro', [UserController::class, 'cadastro'])->name('user.cadastro');
Route::post('/cadastro', [UserController::class, 'store'])->name('user.store');
Route::get('/inicio', [UserController::class, 'index'])->name('inicio.index');
Route::get('/usuario', [UserController::class, 'lista'])->name('user.lista');
Route::get('/usuario/{id}', [UserController::class, 'show'])->name('user.show');




Route::get('/', function () {
    return view('welcome');
});
