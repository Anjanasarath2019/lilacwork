<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/',[EmployeeController::class,'index']);

Route::get('/add-employee',[EmployeeController::class,'create'])->name('add_employee');
Route::post('/add-employee', [EmployeeController::class, 'store'])->name('add_employee.store');
Route::get('/', [EmployeeController::class, 'index'])->name('index');

