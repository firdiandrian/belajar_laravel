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

Route::get('/', function () {
    return view ('home');
});

Route::get('/employees',[EmployeeController::class,'index'])->name('employees.index');
Route::get('/employees/create',[EmployeeController::class,'create'])->name('employees.create')->middleware('isLogin');
Route::post('/employees',[EmployeeController::class,'store'])->name('employees.store')->middleware('isLogin');
Route::get('/employees/{employee}/show',[EmployeeController::class,'show'])->name('employees.show')->middleware('isLogin');
Route::get('/employees/{employee}/edit',[EmployeeController::class,'edit'])->name('employees.edit')->middleware('isLogin');
Route::put('/employees/{employee}',[EmployeeController::class,'update'])->name('employees.update')->middleware('isLogin');
Route::delete('/employees/{employee}',[EmployeeController::class,'destroy'])->name('employees.destroy')->middleware('isLogin');

// Tambahkan route untuk fungsi pencarian
Route::get('/employees/search', [EmployeeController::class, 'search'])->name('employees.search');

// Route::resource('employees',EmployeeController::class)->middleware('isLogin');

Route::get('sesi', [SessionController::class, 'index'])->name('sesi')->middleware('isTamu');
Route::post('sesi/login', [SessionController::class, 'login'])->middleware('isTamu');
Route::get('sesi/logout', [SessionController::class, 'logout'])->name('logout');
Route::get('sesi/register', [SessionController::class, 'register'])->middleware('isTamu');
Route::post('sesi/create', [SessionController::class, 'create'])->middleware('isTamu');
