<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
 
Route::get('/postech/{alamat}/cek', [HaiController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
