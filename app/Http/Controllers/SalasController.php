<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class SalasController extends Controller
{
    public function arreglos()
    {
        $dia = date('D');
        $anio = date('Y');
        $mes = date('m');
        $mes2 = strtotime("Y-m-d"."+ 7 days");
        $mesLetra = date('F');
        $semana = date('W');
        
    $hoy = date('Y-m-d');
    $lunes = strtotime("monday", strtotime($hoy));
    
    
    /* if($hoy < $lunes){
    $lunes = strtotime("last monday", strtotime($hoy));
    } */

    if($hoy < $lunes && $dia == 'Mon'){
        $lunes = strtotime("monday", strtotime($hoy));
        }elseif($hoy < $lunes && $dia != 'Mon'){
            $lunes = strtotime("last monday", strtotime($hoy));
        }

    

    $lunes1 = date("Y-m-d", $lunes);
    
    $martes = strtotime("+1 day", strtotime($lunes1));
    $martes1 = date("Y-m-d", $martes);
    
    $miercoles = strtotime("+1 day", strtotime($martes1));
    $miercoles1 = date("Y-m-d", $miercoles);
    
    $jueves = strtotime("+1 day", strtotime($miercoles1));
    $jueves1 = date("Y-m-d", $jueves);
    
    $viernes = strtotime("+1 day", strtotime($jueves1));
    $viernes1 = date("Y-m-d", $viernes);
    
    $sabado = strtotime("+1 day", strtotime($viernes1));
    $sabado1 = date("Y-m-d", $sabado);
    
    $lunesb = strtotime("+2 day", strtotime($sabado1));
    $lunes2 = date("Y-m-d", $lunesb);
    
    $martesb = strtotime("+1 day", strtotime($lunes2));
    $martes2 = date("Y-m-d", $martesb);
    
    $miercolesb = strtotime("+1 day", strtotime($martes2));
    $miercoles2 = date("Y-m-d", $miercolesb);
    
    $juevesb = strtotime("+1 day", strtotime($miercoles2));
    $jueves2 = date("Y-m-d", $juevesb);
    
    $viernesb = strtotime("+1 day", strtotime($jueves2));
    $viernes2 = date("Y-m-d", $viernesb);
    
    $sabadob = strtotime("+1 day", strtotime($viernes2));
    $sabado2 = date("Y-m-d", $sabadob);
    
        switch($mesLetra){
            case 'January':
            $mesLetra = 'Enero';
            break;

            case 'February':
            $mesLetra = 'Febrero';
            break;

            case 'March':
            $mesLetra = 'Marzo';
            break;

            case 'April':
            $mesLetra = 'Abril';
            break;

            case 'May':
            $mesLetra = 'Mayo';
            break;

            case 'June':
            $mesLetra = 'Junio';
            break;

            case 'July':
            $mesLetra = 'Julio';
            break;

            case 'August':
            $mesLetra = 'Agosto';
            break;

            case 'September':
            $mesLetra = 'Septiembre';
            break;

            case 'October':
            $mesLetra = 'Octubre';
            break;

            case 'November':
            $mesLetra = 'Noviembre';
            break;

            case 'December':
            $mesLetra = 'Diciembre';
            break;
        }

        

        $reservationsLu1S1 = Reservation::all()->where("dia","=",$lunes1)->where("sala", "=", "1")->sortBy("hora_ini");
        $reservationsLu1S2 = Reservation::all()->where("dia","=",$lunes1)->where("sala", "=", "2")->sortBy("hora_ini");
        $reservationsLu1S3 = Reservation::all()->where("dia","=",$lunes1)->where("sala", "=", "3")->sortBy("hora_ini");

        $reservationsMa1S1 = Reservation::all()->where("dia","=",$martes1)->where("sala", "=", "1")->sortBy("hora_ini");
        $reservationsMa1S2 = Reservation::all()->where("dia","=",$martes1)->where("sala", "=", "2")->sortBy("hora_ini");
        $reservationsMa1S3 = Reservation::all()->where("dia","=",$martes1)->where("sala", "=", "3")->sortBy("hora_ini");

        $reservationsMi1S1 = Reservation::all()->where("dia","=",$miercoles1)->where("sala", "=", "1")->sortBy("hora_ini");
        $reservationsMi1S2 = Reservation::all()->where("dia","=",$miercoles1)->where("sala", "=", "2")->sortBy("hora_ini");
        $reservationsMi1S3 = Reservation::all()->where("dia","=",$miercoles1)->where("sala", "=", "3")->sortBy("hora_ini");

        $reservationsJu1S1 = Reservation::all()->where("dia","=",$jueves1)->where("sala", "=", "1")->sortBy("hora_ini");
        $reservationsJu1S2 = Reservation::all()->where("dia","=",$jueves1)->where("sala", "=", "2")->sortBy("hora_ini");
        $reservationsJu1S3 = Reservation::all()->where("dia","=",$jueves1)->where("sala", "=", "3")->sortBy("hora_ini");

        $reservationsVi1S1 = Reservation::all()->where("dia","=",$viernes1)->where("sala", "=", "1")->sortBy("hora_ini");
        $reservationsVi1S2 = Reservation::all()->where("dia","=",$viernes1)->where("sala", "=", "2")->sortBy("hora_ini");
        $reservationsVi1S3 = Reservation::all()->where("dia","=",$viernes1)->where("sala", "=", "3")->sortBy("hora_ini");

        $reservationsSa1S1 = Reservation::all()->where("dia","=",$sabado1)->where("sala", "=", "1")->sortBy("hora_ini");
        $reservationsSa1S2 = Reservation::all()->where("dia","=",$sabado1)->where("sala", "=", "2")->sortBy("hora_ini");
        $reservationsSa1S3 = Reservation::all()->where("dia","=",$sabado1)->where("sala", "=", "3")->sortBy("hora_ini");

        $reservationsLu2S1 = Reservation::all()->where("dia","=",$lunes2)->where("sala", "=", "1");
        $reservationsLu2S2 = Reservation::all()->where("dia","=",$lunes2)->where("sala", "=", "2");
        $reservationsLu2S3 = Reservation::all()->where("dia","=",$lunes2)->where("sala", "=", "3");

        $reservationsMa2S1 = Reservation::all()->where("dia","=",$martes2)->where("sala", "=", "1");
        $reservationsMa2S2 = Reservation::all()->where("dia","=",$martes2)->where("sala", "=", "2");
        $reservationsMa2S3 = Reservation::all()->where("dia","=",$martes2)->where("sala", "=", "3");

        $reservationsMi2S1 = Reservation::all()->where("dia","=",$miercoles2)->where("sala", "=", "1");
        $reservationsMi2S2 = Reservation::all()->where("dia","=",$miercoles2)->where("sala", "=", "2");
        $reservationsMi2S3 = Reservation::all()->where("dia","=",$miercoles2)->where("sala", "=", "3");

        $reservationsJu2S1 = Reservation::all()->where("dia","=",$jueves2)->where("sala", "=", "1");
        $reservationsJu2S2 = Reservation::all()->where("dia","=",$jueves2)->where("sala", "=", "2");
        $reservationsJu2S3 = Reservation::all()->where("dia","=",$jueves2)->where("sala", "=", "3");

        $reservationsVi2S1 = Reservation::all()->where("dia","=",$viernes2)->where("sala", "=", "1");
        $reservationsVi2S2 = Reservation::all()->where("dia","=",$viernes2)->where("sala", "=", "2");
        $reservationsVi2S3 = Reservation::all()->where("dia","=",$viernes2)->where("sala", "=", "3");

        $reservationsSa2S1 = Reservation::all()->where("dia","=",$sabado2)->where("sala", "=", "1");
        $reservationsSa2S2 = Reservation::all()->where("dia","=",$sabado2)->where("sala", "=", "2");
        $reservationsSa2S3 = Reservation::all()->where("dia","=",$sabado2)->where("sala", "=", "3");

        return view('salas', [
            'mes' => $mes,
            'mes2' => $mes2,
            'mesLetra' => $mesLetra,
            'semana' => $semana,
            'lunes' => $lunes,
            'martes' => $martes,
            'miercoles' => $miercoles,
            'jueves' => $jueves,
            'viernes' => $viernes,
            'sabado' => $sabado,
            'lunesb' => $lunesb,
            'martesb' => $martesb,
            'miercolesb' => $miercolesb,
            'juevesb' => $juevesb,
            'viernesb' => $viernesb,
            'sabadob' => $sabadob,
            'reservationsLu1S1' => $reservationsLu1S1,
            'reservationsLu1S2' => $reservationsLu1S2,
            'reservationsLu1S3' => $reservationsLu1S3,
            'reservationsMa1S1' => $reservationsMa1S1,
            'reservationsMa1S2' => $reservationsMa1S2,
            'reservationsMa1S3' => $reservationsMa1S3,
            'reservationsMi1S1' => $reservationsMi1S1,
            'reservationsMi1S2' => $reservationsMi1S2,
            'reservationsMi1S3' => $reservationsMi1S3,
            'reservationsJu1S1' => $reservationsJu1S1,
            'reservationsJu1S2' => $reservationsJu1S2,
            'reservationsJu1S3' => $reservationsJu1S3,
            'reservationsVi1S1' => $reservationsVi1S1,
            'reservationsVi1S2' => $reservationsVi1S2,
            'reservationsVi1S3' => $reservationsVi1S3,
            'reservationsSa1S1' => $reservationsSa1S1,
            'reservationsSa1S2' => $reservationsSa1S2,
            'reservationsSa1S3' => $reservationsSa1S3,
            'reservationsLu2S1' => $reservationsLu2S1,
            'reservationsLu2S2' => $reservationsLu2S2,
            'reservationsLu2S3' => $reservationsLu2S3,
            'reservationsMa2S1' => $reservationsMa2S1,
            'reservationsMa2S2' => $reservationsMa2S2,
            'reservationsMa2S3' => $reservationsMa2S3,
            'reservationsMi2S1' => $reservationsMi2S1,
            'reservationsMi2S2' => $reservationsMi2S2,
            'reservationsMi2S3' => $reservationsMi2S3,
            'reservationsJu2S1' => $reservationsJu2S1,
            'reservationsJu2S2' => $reservationsJu2S2,
            'reservationsJu2S3' => $reservationsJu2S3,
            'reservationsVi2S1' => $reservationsVi2S1,
            'reservationsVi2S2' => $reservationsVi2S2,
            'reservationsVi2S3' => $reservationsVi2S3,
            'reservationsSa2S1' => $reservationsSa2S1,
            'reservationsSa2S2' => $reservationsSa2S2,
            'reservationsSa2S3' => $reservationsSa2S3,
            'lunesUno' => $lunes1,
            'martesUno' => $martes1,
            'miercolesUno' => $miercoles1,
            'juevesUno' => $jueves1,
            'viernesUno' => $viernes1,
            'sabadoUno' => $sabado1,
            'lunesDos' => $lunes2,
            'martesDos' => $martes2,
            'miercolesDos' => $miercoles2,
            'juevesDos' => $jueves2,
            'viernesDos' => $viernes2,
            'sabadoDos' => $sabado2
        ]);
    }

    public function ver ()
    {
        $hoy = date('Y-m-d');
        /* $nexts = Reservation::all()->where("dia",">=",$hoy)->orderBy("dia", "desc"); */
        $nexts = Reservation::where("dia", ">=", $hoy)->orderBy("dia", "asc")->orderBy("sala", "asc")->orderBy("hora_ini", "asc")->get();
        return view('/next', [
            'hoy' => $hoy,
            'nexts' => $nexts
        ]);
    }
}
