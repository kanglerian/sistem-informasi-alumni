<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\DataPerusahaanController;
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

Route::get('/', [DataMahasiswaController::class,'index']);
Route::get('/perusahaan', [DataPerusahaanController::class,'index']);
Route::get('/carimahasiswa', [DataMahasiswaController::class,'search'])->name('search-mhs');
Route::get('/cariperusahaan', [DataPerusahaanController::class,'search'])->name('search-pr');
Route::get('/findStudents',[StudentsController::class,'search'])->name('find-mhs');
Route::get('/findCompany',[CompanyController::class,'search'])->name('find-pr');
Route::get('/findHistory',[HistoryController::class,'search'])->name('find-hr');


Auth::routes(['register' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('dashboard', DashboardController::class)->middleware('auth');
Route::resource('students', StudentsController::class)->middleware('auth');
Route::resource('company', CompanyController::class)->middleware('auth');
Route::resource('history', HistoryController::class)->middleware('auth');
Route::resource('mahasiswa', DataMahasiswaController::class);
Route::resource('perusahaan', DataPerusahaanController::class);