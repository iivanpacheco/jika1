<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\dispositivo;

class dispotivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function registrar_dispositivo()
    {
       $serial =Request()->get ('serial');
        echo "el serial de su dispositivo es:--". $serial; echo "<br>";
        $descripcion =Request()->get ('descripcion');
        echo "Descripcion de su dispositivo". $descripcion; echo "<br/>";
        $codigo_barra =Request()->get ('codigo_barra');
        $marca =Request()->get ('marca');
        $tipo_dispositivo =Request()->get ('tipo_dispositivo');

          
       
        $data =Request()->all();
        dispositivo::create($data);

    }

     public function consultar_dispositivo()
    {
        $dispositivos=dispositivo::all();
        return view ('consultar_dispositivo',compact('dispositivos'));
    }

    public function editar14($id_dispositivo){

        $dispositivos=dispositivo::findorfail($id_dispositivo);
        return view ('Actualizar_dispositivo',compact('dispositivos'));
    }

    public function actualizar($id_dispositivo){

        $dispositivos=dispositivo::findorfail($id_dispositivo);
        $data = Request ()->all();
        $dispositivos->fill ($data)->save();
        return redirect ()->to ('consultar_dispositivo');
    }

    public function eliminar14($id_dispositivo)

    {

      // Conseguimos el objeto
        $dispositivos=dispositivo::findorfail($id_dispositivo);
        $data = Request ()->all();
        $dispositivos->fill ($data)->delete();
        return redirect ()->to ('consultar_dispositivo');

    }

}
