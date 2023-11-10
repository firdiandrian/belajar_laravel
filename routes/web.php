<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SessionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/employees',[EmployeeController::class,'index'])->name('employees.index');
// Route::get('/employees/create',[EmployeeController::class,'create'])->name('employees.create');
// Route::post('/employees',[EmployeeController::class,'store'])->name('employees.store');
// Route::get('/employees/{employee}/edit',[EmployeeController::class,'edit'])->name('employees.edit');
// Route::put('/employees/{employee}',[EmployeeController::class,'update'])->name('employees.update');
// Route::delete('/employees/{employee}',[EmployeeController::class,'destroy'])->name('employees.destroy');

// Route::resource('employees',EmployeeController::class)->middleware('isLogin');


Route::get('/', [SessionController::class, 'index']);
Route::get('sesi', [SessionController::class, 'index']);
Route::post('sesi/login', [SessionController::class, 'login']);
Route::get('sesi/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('sesi/register', [SessionController::class, 'register']);
Route::post('sesi/create', [SessionController::class, 'create']);

Route::resource('employees', EmployeeController::class)->middleware('isLogin');
