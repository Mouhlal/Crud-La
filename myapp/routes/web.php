<?php

use App\Http\Controllers\BiblioController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\FacturesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StagigiareController;
use App\Http\Controllers\StudentController;
use App\Models\stagiaires;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\test;

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
//Route::get('__',[nom de controller ::class,'functions']);



/* Route::get('/',[StudentController::class,'index'])->name('index');
Route::get('/create',[StudentController::class,'create'])->name('create');
Route::post('/store',[StudentController::class,'store'])->name('store');
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::post('/update',[StudentController::class,'update'])->name('update');
Route::post('/delete/{id}',[StudentController::class,'delete'])->name('delete'); */



/* Route::get('/', [FacturesController::class, 'index'])->name('index');
Route::get('/ajouter', [FacturesController::class, 'ajouter'])->name('ajouter');
Route::post('/store', [FacturesController::class, 'store'])->name('store');

Route::get('/edit/{id}', [FacturesController::class, 'edit'])->name('edit');
Route::post('/Update' , [FacturesController::class , 'Update'])->name('Update');

Route::get('/delete/{id}', [FacturesController::class, 'delete'])->name('delete');
Route::match(['get','post'],'/search',[FacturesController::class,'search'])->name('search');
 */

Route::get('/',[BiblioController::class,'index'])->name('index');
Route::delete('/delete/{id}', [BiblioController::class, 'delete'])->name('delete');
