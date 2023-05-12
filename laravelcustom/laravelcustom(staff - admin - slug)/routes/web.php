<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CustomAuthController;

use App\Http\Controllers\MailController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffController;

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









// Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
    // Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
    Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
    Route::get('/admin', [CustomAuthController::class, 'adminindex']);
    Route::post('/adminlogin', [CustomAuthController::class, 'adminlogin'])->name('adminlogin.custom'); 


    
    // Route::get('/add/create', [CustomerController::class, 'create']);
    // Route::post('/add', [CustomerController::class, 'store']);
    
    Route::get('/customer/login', [CustomerController::class,'index'])->name('login');
    Route::post('/customer-login', [CustomerController::class, 'customlogin'])->name('login.custom'); 
    Route::get('/customerlogout', [CustomerController::class,'customersignout'])->name('signout');
    
    
    Route::get('/stafflogin', [StaffController::class, 'stafflogin']);
    Route::post('custom-login', [StaffController::class, 'customLogin'])->name('login.staff'); 
    Route::get('/staffregister', [StaffController::class, 'create'])->name('staffregister');
    Route::post('staff-register', [StaffController::class, 'store'])->name('register.staff'); 
    Route::get('/stafflog/{slug?}', [StaffController::class, 'staffview']);
    Route::get('stafflogout', [StaffController::class, 'staffsignout'])->name('staffsignout');
    Route::get('adminsignout', [CustomerController::class, 'adminsignOut'])->name('adminsignout');
    
Route::group(['middleware' => ['user']], function () {
    
    
    Route::get('/customer/view', [CustomerController::class,'view']);
    
    Route::get('/customer/delete/{id}', [CustomerController::class,'delete']);
    
    Route::get('/customer/customeredit/{id}', [CustomerController::class,'edit']);
    
    Route::post('/customer/update/{id}', [CustomerController::class,'update']);
    
    Route::get('/customer/trash', [CustomerController::class,'trash']);
    Route::get('/customer/restore/{id}', [CustomerController::class,'restore']);
    Route::get('/customer/forcedelete/{id}', [CustomerController::class,'forcedelete']);
});

Route::get('send-mail', [MailController::class, 'index']);

Route::group(['middleware' => ['admin']], function () {
    
    Route::get('/schooladmin/{slugnaam?}', [CustomerController::class, 'schooladmin'])->name('schooladmin');
    Route::get('/customer/create', [CustomerController::class,'create']);
    Route::post('/customer', [CustomerController::class, 'store'])->name('addcustomer');
    Route::get('/customer/table', [CustomerController::class, 'view'])->name('customer.view');
    Route::get('/adminpage', [CustomAuthController::class, 'adminpage'])->name('admin.home');
 });





