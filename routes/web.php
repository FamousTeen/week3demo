<?php

use App\Http\Controllers\HomeController;
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
    return view('home');
});

// Route::get('/home', [HomeController::class, 'home']);

// Route::get('/home/{param1}/{param2}', [HomeController::class, 'homeWithParam']);

// Route Group Controllers
Route::controller(HomeController::class)->group(function() {
    Route::get('/home', 'home');
    Route::get('/home/{param1}/{param2}/{param3?}', 'homeWithParam');
});

