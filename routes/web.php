<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FederalEntityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/FederalEntities", [FederalEntityController::class, 'FederalEntities']);
Route::get("/getFederalEntities", [FederalEntityController::class, 'GetAFederalEntity']);
