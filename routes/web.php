<?php

use App\Http\Controllers\AuthController;
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

Route::get('todo-list', function () {
    return view('welcome');
})->name('todo-list');
Route::get('/', function (){
    return view('login');
});

Route::post('signup', [AuthController::class, 'register'])->name('signup');
Route::get('login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
