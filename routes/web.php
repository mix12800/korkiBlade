<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\OrderController;
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
    Route::post("/courseEdit/{course}", [CourseController::class, "update"])->name('courseEdit');
    Route::get("/OrderAddPage", [PageController::class, "OrderAddPage"])->name('OrderAddPage');
    Route::post("/OrderAdd", [OrderController::class, "store"])->name('OrderAdd');
    Route::get("/OrderDel/{order}", [OrderController::class, "destroy"])->name('OrderDel');
    Route::post("/OrderEdit/{order}", [OrderController::class, "update"])->name('OrderEdit');
    Route::post("/OrderСomment/{order}", [OrderController::class, "OrderСomment"])->name('OrderСomment');
});

