<?php

use Illuminate\Support\Facades\Route;



Route::view("/","home")->name("home");
Route::view("/ver_entidad","ver_entidad")->name("ver_entidad");
Route::view("/entidad2","entidad2")->name("entidad2");
Route::view("/ver_entidad2","ver_entidad2")->name("ver_entidad2");