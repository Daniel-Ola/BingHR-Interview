<?php

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

Route::get('/', function () {
//    return view('welcome');
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/get-user/{data?}', [App\Http\Controllers\HomeController::class, 'getUsers'])->name('get_users');
Route::post('/update-user', [App\Http\Controllers\HomeController::class, 'updateUsers'])->name('update_users');
Route::post('/add-user', [App\Http\Controllers\HomeController::class, 'addUser'])->name('users.create');
Route::post('/delete-user', [App\Http\Controllers\HomeController::class, 'deleteUser'])->name('users.delete');
