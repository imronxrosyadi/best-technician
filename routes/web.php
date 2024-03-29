<?php

use App\Http\Controllers\AlternativeComparisonController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\CriteriaComparisonController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ValueWeightController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\CriteriaComparison;

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

Route::get('/', function () {
    return view('home', [
        "title" => "PT Buana Express",
        "active" => 'pt buana express'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');;

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/alternative', AlternativeController::class);
Route::get('/alternative/delete/{id}', [AlternativeController::class, 'delete']);

Route::resource('/criteria', CriteriaController::class);
Route::get('/criteria/delete/{id}', [CriteriaController::class, 'delete']);

Route::resource('/value-weight', ValueWeightController::class);
Route::get('/value-weight/delete/{id}', [ValueWeightController::class, 'delete']);

Route::prefix('/calculate')->group(function () {

    Route::get('/criteria-comparison', [CriteriaComparisonController::class, 'index']);
    Route::post('/criteria-comparison', [CriteriaComparisonController::class, 'store'])->name('criteria-comparison.store');

    Route::get('/alternative-comparison', [AlternativeComparisonController::class, 'index']);
    Route::get('/alternative-comparison/{id}', [AlternativeComparisonController::class, 'show']);
    Route::post('/alternative-comparison', [AlternativeComparisonController::class, 'store'])->name('alternative-comparison.store');

    Route::get('/result', [CalculateController::class, 'index']);
//    Route::get('/result/download', [CalculateController::class, 'downloadPdf'])->name('calculate-download');
    Route::get('/result/print', [CalculateController::class, 'report'])->name('calculate-report');
    Route::get('/result/print/decree', [CalculateController::class, 'decree'])->name('decree');

});


