<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadController;
use App\Http\Controllers\Entidad2Controller;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("tipos/get", [EntidadController::class, "getTipos"]);
Route::get("tip/get", [Entidad2Controller::class, "getTip"]);