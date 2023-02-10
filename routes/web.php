<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\SubAdminAuthConroller;
use App\Http\Controllers\PropertyController;

use App\Http\Controllers\Admin\AdminHouseOwnerController;

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

// Template route
Route::get('/template', function () {
    return view('skydash-template.www.bootstrapdash.com.demo.skydash.template.demo.vertical-default-light.index');
});

// Admin routes
Route::get('/admin/login', [AdminAuthController::class, 'getLogin'])->name('admin.get-login');
Route::post('/admin/login', [AdminAuthController::class, 'postLogin'])->name('admin.post-login');
Route::get('/admin/register', [AdminAuthController::class, 'getRegister'])->name('admin.get-register');
Route::post('/admin/register', [AdminAuthController::class, 'postRegister'])->name('admin.post-register');
Route::get('/admin/dashboard', [AdminAuthController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/admin/house-owner/registration', [AdminHouseOwnerController::class, 'houseOwnerRegister'])->name('admin.house_owner.register');

// Sub admin routes
Route::get('/sub-admin/login', [SubAdminAuthConroller::class, 'getLogin'])->name('sub-admin.get-login');
Route::post('/sub-admin/login', [SubAdminAuthConroller::class, 'postLogin'])->name('sub-admin.post-login');
Route::get('/sub-admin/register', [SubAdminAuthConroller::class, 'getRegister'])->name('sub-admin.get-register');
Route::post('/sub-admin/register', [SubAdminAuthConroller::class, 'postRegister'])->name('sub-admin.post-register');
Route::get('/sub-admin/dashboard', [SubAdminAuthConroller::class, 'dashboard'])->name('sub-admin.dashboard');
Route::post('/sub-admin/logout', [SubAdminAuthConroller::class, 'logout'])->name('sub-admin.logout');

// Property routes
Route::get('/property/list', [PropertyController::class, 'index'])->name('property.property');
Route::post('/property/store', [PropertyController::class, 'propertyStore'])->name('property.store');
Route::post('/property/update', [PropertyController::class, 'propertyUpdate'])->name('property.update');
Route::post('/property/delete', [PropertyController::class, 'propertyDelete'])->name('property.delete');


// User routes
Route::get('/login', [AuthController::class, 'getLogin'])->name('get-login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('post-login');
Route::get('/register', [AuthController::class, 'getRegister'])->name('get-register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('post-register');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Sub user routes
Route::get('/sub-user/login', [SubUserAuthConroller::class, 'getLogin'])->name('sub-user.get-login');
Route::post('/sub-user/login', [SubUserAuthConroller::class, 'postLogin'])->name('sub-user.post-login');
Route::get('/sub-user/register', [SubUserAuthConroller::class, 'getRegister'])->name('sub-user.get-register');
Route::post('/sub-user/register', [SubUserAuthConroller::class, 'postRegister'])->name('sub-user.post-register');
Route::get('/sub-user/dashboard', [SubUserAuthConroller::class, 'dashboard'])->name('sub-user.dashboard');
Route::post('/sub-user/logout', [SubUserAuthConroller::class, 'logout'])->name('sub-user.logout');

