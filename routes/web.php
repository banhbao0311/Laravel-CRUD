<?php

use App\Http\Controllers\ModuleController;
use Illuminate\Support\Facades\Route;


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


Route::get('module/', [ModuleController::class,'index'])->name('');
Route::get('module/create', [ModuleController::class,'create'])->name('');
Route::get('module/update', [ModuleController::class,'update'])->name('');
Route::post('module/postCreate', [ModuleController::class,'postCreate'])->name('');
Route::get('module/delete/{id}',[ModuleController::class,'delete'])->name('');