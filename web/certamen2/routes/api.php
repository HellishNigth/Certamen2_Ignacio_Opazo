<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadesController;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("tipos/get", [EntidadesController::class, "getTipos"]);
Route::get("medidas/get", [EntidadesController::class, "getMedidas"]);
Route::post("lecturas/post", [EntidadesController::class, "ingresarLectura"]);
Route::post("lecturas/delete", [EntidadesController::class, "eliminarLectura"]);