<?php

use Illuminate\Support\Facades\Route;
// routes/web.php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

Route::resource('categories', CategoryController::class); 
Route::resource('transactions', TransactionController::class);





Route::get('/', function () {
    return view('welcome');
});
