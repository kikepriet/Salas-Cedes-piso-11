<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Http\Requests\UpdateCapturaRequest;
use Illuminate\Support\Facades\Redirect;

class UpdateController extends Controller
{
    public function editar ()
    {
        $queso = $_GET['id'];
        $editar = Reservation::all()->find($queso);
        $id = Reservation::find('id');


        return view('/editar', [
            'queso' => $queso,
            'editar' => $editar,
            'id' => $id
        ]);
    }

    public function update ()
    {  
        // Nos traemos las variables POST del formulario y las declaramos
        $id = $_POST['id'];
        $edit_dia = $_POST['dia'];
        $edit_hora_ini = $_POST['hora_ini'];
        $edit_hora_fin = $_POST['hora_fin'];
        $edit_sala = $_POST['sala'];
       
        $upda = Reservation::where("id", "=", $id)->first();
        $upda->dia = $edit_dia;
        $upda->hora_ini = $edit_hora_ini;
        $upda->hora_fin = $edit_hora_fin;
        $upda->sala = $edit_sala;
        $upda->save();

       return Redirect::to('/next');
    }

    public function borrar(){
       
        //nos traemos la variable GET y la declaramos
        $id = $_GET['id'];
       
        //borramos el registro
        $borrar = Reservation::where("id", "=", $id)->first();
        $borrar->delete();

        return Redirect::to('/next');

    }
}
