<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\OwnersController;
use Illuminate\Support\Facades\Auth;
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
    Route::get('cars', [CarsController::class, 'index'])->name('cars.index');
    Route::get('owners', [CarsController::class, 'index'])->name('owners.index');
    Route::middleware(['auth', 'random'])->group(function (){
        Route::resource('cars', CarsController::class)->except(['index']);
        Route::resource('owners', OwnersController::class);
});
    Route::get('/', function () {
    return view('welcome');
    });

Route::get('images', [ ImageController::class, 'index' ]);
Route::post('images', [ ImageController::class, 'store' ])->name('images.store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
