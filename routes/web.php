<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
    return view('welcome');
});
Route::get('/haha', function () {
    return view('page.page');
});
Route::get('/home', [HomeController::class, 'index'])->name('page.list_user');
Route::get('/adduser', [HomeController::class, 'adduser'])->name('page.add_user');
