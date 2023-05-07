<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Auth::routes();

Route::resource('employees', App\Http\Controllers\employeeController::class);


Route::resource('cars', App\Http\Controllers\carController::class);


Route::get('/loggedInEmployee', 'EmployeeController@getLoggedInEmployeeDetails');



Route::resource('shifts', App\Http\Controllers\shiftController::class);


Route::resource('customers', App\Http\Controllers\customerController::class);


Route::resource('sales', App\Http\Controllers\saleController::class);

?>

