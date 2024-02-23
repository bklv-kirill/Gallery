<?php

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

Route::name("images.")->group(function () {
    Route::get("/", \App\Http\Controllers\Images\IndexController::class)->name("index");
    Route::post("/", \App\Http\Controllers\Images\StoreController::class)->name("store");
    Route::delete("/{image}", \App\Http\Controllers\Images\DeleteController::class)->name("delete");
});
