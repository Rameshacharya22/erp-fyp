<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);
//user wont be able to register. Admin would be responsible for creating user

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('employee', App\Http\Controllers\EmployeeController::class);
Route::resource('leave', App\Http\Controllers\LeaveController::class);
Route::resource('attendance', App\Http\Controllers\AttendanceController::class);
Route::resource('department', App\Http\Controllers\DepartmentController::class);
Route::resource('position', App\Http\Controllers\PositionController::class);
Route::resource('holiday', App\Http\Controllers\HolidayController::class);


