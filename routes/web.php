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
    return view('welcome');
});


Route::resource('employees', App\Http\Controllers\employeeController::class);


Route::resource('cars', App\Http\Controllers\carController::class);






Route::resource('shifts', App\Http\Controllers\shiftController::class);


Route::resource('customers', App\Http\Controllers\customerController::class);


Route::resource('sales', App\Http\Controllers\saleController::class);
