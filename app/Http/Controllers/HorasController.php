<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class HorasController extends Controller
{
    public function rango(){
    $hora_ini = "13:00";
    $hora_fin = "13:30";
    $hora = date('H:i', time()-21600);
    $background = "img/default.jpg";

    if($hora >= $hora_ini && $hora <= $hora_fin){
        $background = "img/bienvenidos.jpg";
    }else{
        $background = "img/default.jpg";
    }
    /* return $hora; */
    return view('/hora', [
        "hora" => $hora
    ]);
    }

    public function sala1()
    {
        $muestra = date('H:i', time()-21600);
        $ya = date('Y-m-d');
        $evento = Reservation::where("sala","=","1")->where("hora_fin",">","$muestra")->where("dia", "<", "$ya")->orderBy("hora_ini", "asc")->first();
        
        return view('sala1', [
            'muestra' => $muestra,
            'evento' => $evento,
            'ya' => $ya
        ]);
    }
}
