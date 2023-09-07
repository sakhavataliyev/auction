<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StatisticController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('lots', LotController::class);
Route::resource('categories', CategoryController::class);

Route::get('/lots/statistics/day', [StatisticController::class, 'showday'])->name('statistics.day');
Route::get('/lots/statistics/week', [StatisticController::class, 'showweek'])->name('statistics.week');
Route::get('/lots/statistics/month', [StatisticController::class, 'showmonth'])->name('statistics.month');
Route::get('/lots/statistics/year', [StatisticController::class, 'showyear'])->name('statistics.year');



Route::post('/lots/filter/', [LotController::class, 'filter'])->name('lots.filter');