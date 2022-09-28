<?php

use App\Http\Controllers\MainController;
use app\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

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

Route::get('/', [MainController::class, 'index'])->name('index');

Route::get('add', [MainController::class, 'add'])->name('add');
Route::post('add', [MainController::class, 'create']);

Route::get('detail', [MainController::class, 'detail']);

Route::get('logout', [MainController::class, 'doLogout']);

Auth::routes();
