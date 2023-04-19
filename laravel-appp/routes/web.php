<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;

use App\Http\Controllers\CustomerController;
 
// use App\Models\Customer;

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

// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/table', function () {
//     return view('table');
// });


// Route::resource('companies', CompanyController::class);

Route::get('/customer/create', [CustomerController::class,'create']);
Route::post('/customer', [CustomerController::class, 'store']);

Route::get('/customer/view', [CustomerController::class,'view']);

Route::get('/customer/delete/{id}', [CustomerController::class,'delete']);

Route::get('/customer/edit/{id}', [CustomerController::class,'edit']);

Route::post('/customer/update/{id}', [CustomerController::class,'update']);

// Route::get('/customer', function () {

//     $table = Customer::all();
//     echo "<pre>";
//     print_r($table->toArray());
// });