<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Route::view("/", "product.insert");
Route::get("/", [ProductController::class, "create"]);
Route::post("/insert", [ProductController::class, "store"]);

Route::get("/display", [ProductController::class,"index"]);