<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tipo_dispositivo;

class tipo_dispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar_tipo_dispositivos()
       
      {
      $tipo_dispositivo =Request()->get ('tipo_dispositivo');
        echo "el nombre del aprendiz es:--". $tipo_dispositivo; echo "<br/>";
         $descripcion =Request()->get ('descripcion');
        echo "el nombre del aprendiz es:--". $descripcion; echo "<br/>";
        
          
       
        $data =Request()->all();
        tipo_dispositivo::create($data);

    }    

    
     public function consultar_tipo_dispositivos()
    {
        $tipo_dispositivo=tipo_dispositivo::all();
        return view ('consultar_tipo_dispositivo',compact('tipo_dispositivo'));
    }
 /* public function editar($id,$titulo,$idioma)

    {

      // Conseguimos el objeto
    $peli=Peliculas::where('id', '=', "$id")->first();
 
// Si existe
        if(count($peli)>=1){
   // Seteamos un nuevo titulo
         $peli->titulo = $titulo;
         $peli->idioma = $idioma;

   // Guardamos en base de datos
         $peli->save();
    };
    }


    public function eliminar($id)

    {

      // Conseguimos el objeto
    $peli=Peliculas::where('id', '=', "$id")->first();


   // Guardamos en base de datos
         $peli->delete();

    }*/

    public function editar14($id){

        $tipo_dispositivo=tipo_dispositivo::findorfail($id);
        return view ('Actualizar_tipo_dispositivo',compact('tipo_dispositivo'));
    }

    public function actualizar($id){

        $tipo_dispositivo=tipo_dispositivo::findorfail($id);
        $data = Request ()->all();
        $tipo_dispositivo->fill ($data)->save();
        return redirect ()->to ('consultar_tipo_dispositivo');
    }

    public function eliminar14($id)

    {

      // Conseguimos el objeto
    $tipo_dispositivo=tipo_dispositivo::findorfail($id)->first();
    $tipo_dispositivo->delete();

    }

}
