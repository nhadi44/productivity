<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewAdmin;
use App\Http\Controllers\EmployeeAdmin;
use App\Http\Controllers\LoginAdmin;
use App\Http\Controllers\MainJobAdmin;
use App\Http\Controllers\UserJobAdmin;
use App\Http\Controllers\ProcessAdmin;
use App\Http\Controllers\ViewStaff;
use App\Http\Controllers\HomeController;
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

Route::get('/', [LoginAdmin::class, 'index']);
Route::get('/home-admin', [ViewAdmin::class, 'index']);
Route::get('/employee', [ViewAdmin::class, 'employee']);
Route::get('/report', [ViewAdmin::class, 'report']);
Route::get('/umstaff', [ViewAdmin::class, 'umstaff']);
Route::get('/umspv', [ViewAdmin::class, 'umspv']);
Route::get('/umadmin', [ViewAdmin::class, 'umadmin']);
Route::get('/reset-password', [ViewAdmin::class, 'resetPassword']);
Route::get('/data-management', [ViewAdmin::class, 'dataManagement']);
Route::get('/data-management/department', [ViewAdmin::class, 'Department']);
Route::get('/data-management/main-job', [ViewAdmin::class, 'mainJob']);
Route::get('/data-management/user-job', [ViewAdmin::class, 'userJob']);
Route::get('/input', [ViewAdmin::class, 'input']);
Route::post('/inputPost', [ViewAdmin::class, 'inputPost']);
Route::get('/edit-depart/{id}', [ViewAdmin::class, 'edit']);
Route::post('/update-depart/{id}', [ViewAdmin::class, 'update']);
Route::get('/delete-depart/{id}', [ViewAdmin::class, 'destroy']);
Route::get('/add', [EmployeeAdmin::class, 'input']);
Route::post('/add-new', [EmployeeAdmin::class, 'add']);
Route::get('/edit-employee/{id}', [EmployeeAdmin::class, 'edit']);
Route::post('/update-employee/{id}', [EmployeeAdmin::class, 'update']);
Route::get('/delete-employee/{id}', [EmployeeAdmin::class, 'destroy']);
Route::get('/add-admin', [LoginAdmin::class, 'input']);
Route::post('/input-admin', [LoginAdmin::class, 'add']);
Route::get('/edit-admin/{id}', [LoginAdmin::class, 'edit']);
Route::post('/update-admin/{id}', [LoginAdmin::class, 'update']);
Route::get('/delete-admin/{id}', [LoginAdmin::class, 'destroy']);
Route::get('/add-main', [MainJobAdmin::class, 'add']);
Route::post('/input-main', [MainJobAdmin::class, 'input']);
Route::get('/edit-main/{id}', [MainJobAdmin::class, 'edit']);
Route::post('/update-main/{id}', [MainJobAdmin::class, 'update']);
Route::get('/delete-main/{id}', [MainJobAdmin::class, 'destroy']);
Route::get('/add-job', [UserJobAdmin::class, 'add']);
Route::post('/input-job', [UserJobAdmin::class, 'input']);
Route::get('/edit-job/{id}', [UserJobAdmin::class, 'edit']);
Route::post('/update-job/{id}', [UserJobAdmin::class, 'update']);
Route::get('/delete-job/{id}', [UserJobAdmin::class, 'destroy']);
// Route Data Processing
Route::get('/process', [ProcessAdmin::class, 'process']);
Route::get('/process-add', [ProcessAdmin::class, 'add']);
Route::post('/process-input', [ProcessAdmin::class, 'input']);
Route::get('/process-edit/{id}', [ProcessAdmin::class, 'edit']);
Route::post('/process-update/{id}', [ProcessAdmin::class, 'update']);
Route::get('/process-delete/{id}', [ProcessAdmin::class, 'destroy']);
// Route::get('/test',[ProcessAdmin::class,'code']);

//Staff Route
Route::get('/home-staff', [ViewStaff::class, 'index']);
Route::get('/report-staff', [ViewStaff::class, 'report']);
Route::get('/add-report', [ViewStaff::class, 'add']);
// Route::post('/report-input', [ViewStaff::class, 'input']);
// Route::get('/report-edit/{id}', [ViewStaff::class, 'edit']);
// Route::post('/report-update/{id}', [ViewStaff::class, 'update']);
// Route::get('/report-delete/{id}', [ViewStaff::class, 'destroy']);
Route::get('/report-productivity', [ViewStaff::class, 'productivity']);
Route::get('/report-new', [ViewStaff::class, 'reportNew']);
Route::post('/report-new-add', [ViewStaff::class, 'addReport']);
Route::get('/report-udpate/{id}', [ViewStaff::class, 'editReport']);
Route::post('/report-update-new/{id}', [ViewStaff::class, 'update']);
Route::get('/report-delete/{id}', [ViewStaff::class, 'destroy']);
Auth::routes();

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('level');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'staff'])->name('staff');
Route::get('/supervisor', [HomeController::class, 'spv'])->name('spv');
// Route::get('/home', [ViewAdmin::class, 'index'])->name('admin')->middleware('level');
// Route::get('/dashboard', [ViewStaff::class, 'index'])->name('staff');
