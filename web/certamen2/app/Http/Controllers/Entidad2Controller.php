<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Entidad2Controller extends Controller
{
    public function getTip(){
        $tip = array();
        $tip[] = "TipoA";
        $tip[] = "TipoB";
        $tip[] = "TipoC";
        $tip[] = "TipoD";

        return $tip;
    }
}
