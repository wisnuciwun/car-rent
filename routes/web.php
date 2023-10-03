<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RentalController;
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

Route::resource('cars', CarsController::class);
Route::resource('rental', RentalController::class);
// Route::resource('post', Car::class); 

Route::get('/', [CarsController::class, 'index']);
Route::post('/return/{id}', [RentalController::class, 'updateRentData'])->name('updateRentData');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/detail/{slug}', [CarsController::class, 'show']);

Route::get('/addnew', function () {
    return view('car.addnew');
});

Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('index');