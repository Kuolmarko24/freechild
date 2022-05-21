<?php
use App\Http\Controllers\indexController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\preambleController;

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
Route::get('/',[indexController::class,'index'])->name('index');
Route::get('/about',[aboutController::class,'about'])->name('about');
Route::get('/contact',[contactController::class,'contact'])->name('contact');
Route::get('/team',[teamController::class,'team'])->name('team');
Route::get('/preamble',[preambleController::class,'preamble'])->name('preamble');

