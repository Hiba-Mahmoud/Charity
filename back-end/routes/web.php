<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\MainController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\EventController;
use App\Http\Controllers\Dashboard\CaseController;
use App\Http\Controllers\Dashboard\TrainingController;
use App\Http\Controllers\Dashboard\MedicalServiceController;
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
    return view('welcome');
});

//Authentication Required => Will Be Done later
//Dashboard
Route::group(["prefix" => "dashboard"], function()
{
    Route::get('/', [MainController::class, "index"]);
    Route::resource('category', CategoryController::class);
    Route::resource('event', EventController::class);
    Route::resource('case', CaseController::class);
    Route::resource('training', TrainingController::class);
    Route::resource('medical', MedicalServiceController::class);
});


