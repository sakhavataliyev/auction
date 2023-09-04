<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

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
//     return view('layouts.index');
// });

// Route::view('/', 'layouts.index')
//         ->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('lots', LotController::class);
Route::resource('categories', CategoryController::class);

// Filter

Route::post('/lots/filter/', [LotController::class, 'filter'])->name('lots.filter');
// Route::controller(LotController::class)->group(function(){
//         Route::post('/lots/filter/', 'filter')
//             ->name('lots.filter');
//     });
    