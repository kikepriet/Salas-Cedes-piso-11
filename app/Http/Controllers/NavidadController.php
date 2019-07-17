<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavidadController extends Controller
{
    public function diasParaNavidad(){
        $hoy = date('Y-m-d');
    $navidad = date('Y-12-25');
    $diff = abs(strtotime($navidad) - strtotime($hoy));
    $resultado = $diff / 86400;
    return view('/navidad', [
        'hoy' => $hoy,
        'navidad' => $navidad,
        'resultado' => $resultado
    ]);
    }
}
