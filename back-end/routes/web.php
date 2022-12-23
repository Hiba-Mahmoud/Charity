<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\MainController;
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
});


