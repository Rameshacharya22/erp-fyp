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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['register' => false]);

//user wont be able to register. Admin would be responsible for creating user

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth', 'checkRole:Admin'])->group(function () {
    Route::resource('employee', App\Http\Controllers\EmployeeController::class);
//    Route::resource('leave', App\Http\Controllers\LeaveController::class);
    Route::resource('attendance', App\Http\Controllers\AttendanceController::class);
    Route::resource('department', App\Http\Controllers\DepartmentController::class);
    Route::resource('position', App\Http\Controllers\PositionController::class);
//    Route::resource('holiday', App\Http\Controllers\HolidayController::class);
    Route::resource('project', App\Http\Controllers\ProjectController::class);
});


Route::get('/leave', [App\Http\Controllers\LeaveController::class, 'index'])->name('leave.index');
Route::get('/leave/create', [App\Http\Controllers\LeaveController::class, 'create'])->name('leave.create');
Route::post('/leave/store', [App\Http\Controllers\LeaveController::class, 'store'])->name('leave.store');
Route::get('/leave/edit/{id}', [App\Http\Controllers\LeaveController::class, 'edit'])->name('leave.edit');
Route::get('/leave/{id}', [App\Http\Controllers\LeaveController::class, 'show'])->name('leave.show');
Route::put('/leave/{id}', [App\Http\Controllers\LeaveController::class, 'update'])->name('leave.update');
Route::delete('/leave/{id}', [App\Http\Controllers\LeaveController::class, 'destroy'])->name('leave.destroy');



Route::get('/holiday', [App\Http\Controllers\HolidayController::class, 'index'])->name('holiday.index');
Route::get('/holiday/create', [App\Http\Controllers\HolidayController::class, 'create'])->name('holiday.create');
Route::post('/holiday/store', [App\Http\Controllers\HolidayController::class, 'store'])->name('holiday.store');
Route::get('/holiday/edit/{id}', [App\Http\Controllers\HolidayController::class, 'edit'])->name('holiday.edit');
Route::get('/holiday/{id}', [App\Http\Controllers\HolidayController::class, 'show'])->name('holiday.show');
Route::put('/holiday/{id}', [App\Http\Controllers\HolidayController::class, 'update'])->name('holiday.update');
Route::delete('/holiday/{id}', [App\Http\Controllers\HolidayController::class, 'destroy'])->name('holiday.destroy');
