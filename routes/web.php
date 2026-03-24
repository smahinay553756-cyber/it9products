<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products', [ProductController::class, 'index']);
Route::post('/products123', [ProductController::class, 'store']);

use App\Http\Controllers\EmployeeController;


Route::get('/employees', [EmployeeController::class, 'employeeall']);
Route::post('/employees123',[EmployeeController::class, 'employeeinsert']);

Route::get('/products/{id}/edit', [ProductController::class,'edit']);
Route::put('/products/{id}', [ProductController::class,'update']);
Route::delete('/products/{id}', [ProductController::class,'destroy']);