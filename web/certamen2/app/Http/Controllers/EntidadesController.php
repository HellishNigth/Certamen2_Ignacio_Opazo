<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidad;
class EntidadesController extends Controller
{
    public function getTipos(){
        $tipos = array();
        $tipos[] = "01";
        $tipos[] = "02";
        $tipos[] = "03";
        $tipos[] = "04";
        $tipos[] = "05";
        $tipos[] = "06";
        $tipos[] = "07";
        $tipos[] = "08";
        $tipos[] = "09";
        $tipos[] = "10";

        return $tipos;
    }

    public function getMedidas(){
        $medidas = array();
        $medidas[] = "Kilowats";
        $medidas[] = "Watts";
        $medidas[] = "Temperatura";

        return $medidas;
    }
    
    public function getLecturas(){
        $lecturas = Entidad::all();
        return $lecturas;
    }

    public function ingresarLectura(Request $request){
        $input = $request->all();
        $lectura = new Entidad();
        $lectura->fecha = $input[10-02-2020];
        $lectura->hora = $input[10-10];
        $lectura->medidor = $input[01];
        $lectura->direccion= $input["javiera,carrera,340,yeah"];
        $lectura->valor = $input[200];
        $lectura->medida = $input["kilowats"];
        $lectura->save();
        return $lectura;
    }

    public function eliminarLectura(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $lectura = Entidad::findOrFail($id);
        $lectura->delete();
        return "ok";
    }
}
