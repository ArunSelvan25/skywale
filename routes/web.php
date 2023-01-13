<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\AdminAuthController;

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
    return redirect("login");
});


Route::get('/login', [AuthController::class, 'getLogin'])->name('get-login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post-login');

Route::get('/register', [AuthController::class, 'getRegister'])->name('get-register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('post-register');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('admin.get-login');
Route::post('/admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.post-login');

Route::get('/admin/register', [AdminAuthController::class, 'getRegister'])->name('admin.get-register');
Route::post('/admin/register', [AdminAuthController::class, 'postRegister'])->name('admin.post-register');

Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

