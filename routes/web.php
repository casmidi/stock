<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('stock.index');
});

Route::resource('stock', StockController::class);
