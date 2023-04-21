<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\CustomerController;

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

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/customer/create', [CustomerController::class,'create']);
Route::post('/customer', [CustomerController::class, 'store']);

Route::get('/customer/view', [CustomerController::class,'view']);

Route::get('/customer/delete/{id}', [CustomerController::class,'delete']);

Route::get('/customer/customeredit/{id}', [CustomerController::class,'edit']);

Route::post('/customer/update/{id}', [CustomerController::class,'update']);

Route::get('/customer/trash', [CustomerController::class,'trash']);
Route::get('/customer/restore/{id}', [CustomerController::class,'restore']);
Route::get('/customer/forcedelete/{id}', [CustomerController::class,'forcedelete']);



