<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\OwnersController;
use App\Models\Cars;
use App\Models\Owners;
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

//Route::get('/cars',[CarsController::class,'index']);

Route::resource('cars', CarsController::class);



//Route::get('/owners', [OwnersController::class,'index']);

Route::resource('owners', OwnersController::class);
