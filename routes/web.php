<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PageController::class, "index"])->name('index');
Route::get("/regPage", [PageController::class, "regPage"])->name('regPage');
Route::post("/auth", [UserController::class, "auth"])->name('auth');
Route::post("/reg", [UserController::class, "reg"])->name('reg');

