<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PermissionGroupController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes((['verify' => true]));

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::name('admin.')->prefix('admin')->middleware(['AdminVerifyMiddleware'])->group(function () {
    Route::get('/mails/sendmail', [UserController::class, 'showmail'])->name('admin_sendmail');
    Route::post('/mails/sendmailinfo', [UserController::class, 'formSendMail'])->name('formSendMail');
    Route::get('/mails/inform_user_profile', [UserController::class, 'inform_profile'])->name('admin.mails.inform_user_profile');
    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('permission-group', PermissionGroupController::class);
});
