<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCapturaRequest;

class CapturaController extends Controller
{
    public function registro(Reservation $reservation)
    {
        return view('captura', [
            /* 'evento' => $evento,
            'dia' => $dia,
            'hora_ini' => $hora_ini,
            'hora_fin' => $hora_fin,
            'sala' => $sala */
        ]);
    }

    //Usamos el objeto Request para crear fomularios
    public function crear (CreateCapturaRequest $request)
    {
        $captura = Reservation::create([
            'evento' => $request->input('evento'),
            'responsable' => $request->input('responsable'),
            'dia' => $request->input('dia'),
            'hora_ini' => $request->input('hora_ini'),
            'hora_fin' => $request->input('hora_fin'),
            'sala' => $request->input('sala')
        ]);
        setlocale(LC_ALL, 'es_ES.utf-8');
        echo "<p>Buen día <b> $request->responsable, </b> <br><br> para el evento <b>$request->evento</b> 
        quedó reservada la <b>SALA $request->sala del CEDES piso 11</b> para el día ";
        echo strftime("%A, %d de %B del %Y", strtotime($request->dia));
        echo" en horario de " . $request->hora_ini . " a " . $request->hora_fin . "hrs.</p>";
        echo "<p>Recuerda que no contamos con apoyo técnico, por eso es necesario 
        que cualquier adaptador que necesiten lo traigan ustedes y si falla el proyector, 
        deberán traer uno de su área.
        Se les pide dejar la sala limpia y acomodada, así como los pintarrones limpios.
        También se debe apagar la luz y el proyector al terminar.<p>";
        echo "<p>Te recordamos que por ser salones de educación continua éstos programas 
        llevan prioridad y en caso de requerirse te notificaríamos el cambio o la cancelación de tu reservación.</p>";
        echo "<p>Saludos,</p>";
        echo "<br><br><br> <a href='/'>inicio</a>";
        echo "<br><br><br> <a href='/captura'>capturar</a>";
    }
}
