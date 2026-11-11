<?php

use App\Http\Controllers\CourseController;
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
Route::middleware('auth')->group(function () {
    Route::get("/logout", [UserController::class, "logout"])->name('logout');
    Route::get("/courses", [CourseController::class, "index"])->name('coursesGet');
    Route::post("/courses", [CourseController::class, "store"])->name('coursesAdd');
    Route::get("/courseDel/{course}", [CourseController::class, "destroy"])->name('courseDel');
});
