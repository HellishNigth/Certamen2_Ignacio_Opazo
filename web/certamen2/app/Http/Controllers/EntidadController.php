<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function getTipos(){
        $tipos = array();
        $tipos[] = "Tipo1";
        $tipos[] = "Tipo2";
        $tipos[] = "Tipo3";
        $tipos[] = "Tipo4";

        return $tipos;
    }
}
