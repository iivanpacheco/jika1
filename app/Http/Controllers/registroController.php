<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\registro;

class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar_registro()
       
      {
      $fecha =Request()->get ('fecha');
        echo "el nombre del aprendiz es:--". $fecha;
         $hora_entrada =Request()->get ('hora_entrada');
        echo "el nombre del aprendiz es:--". $hora_entrada; echo "<br/>";
        $hora_salida =Request()->get ('hora_salida');
        echo "el nombre del aprendiz es:--". $hora_salida; echo "<br/>";
        
          
       
        $data =Request()->all();
        registro::create($data);

    }    

    
     public function consultar_registro()
    {
        $registro=registro::all();
        return view ('consultar_registro',compact('registro'));
    }

    public function editar14($id){

        $registro=registro::findorfail($id);
        return view ('Actualizar_registro',compact('registro'));
    }

    public function actualizar($id){

        $registro=registro::findorfail($id);
        $data = Request ()->all();
        $registro->fill ($data)->save();
        return redirect ()->to ('consultar_registro');
    }

    public function eliminar14($id)

    {

      // Conseguimos el objeto
    $registro=registro::findorfail($id);
        $data = Request ()->all();
        $registro->fill ($data)->delete();
        return redirect ()->to ('consultar_registro');

    }
}
