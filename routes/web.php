<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sewamobilController;
use App\Http\Controllers\systemController;
use App\Http\Controllers\carController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[sewamobilController::class, 'index'])->name('welcome');
Route::get('/addCategory',[systemController::class, 'addCategory'])->name('addCategory');
Route::POST('/addCategory/saveCategory',[systemController::class, 'saveCategory'])->name('saveCategory');
Route::get('/addCar',[systemController::class, 'addCar'])->name('addCar');
Route::post('/saveCar',[systemController::class, 'saveCar'])->name('saveCar');
Route::post('/deleteCar/{id}',[systemController::class, 'destroy'])->name('hapus_mobil');


Route::get('/CarRent',[carController::class, 'index'])->name('pos');

