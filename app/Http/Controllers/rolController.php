<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\rol;

class rolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function registrar_rol()
       
      {
      $rol =Request()->get ('rol');
        echo "el nombre del aprendiz es:--". $rol;
         $descripcion =Request()->get ('descripcion');
        echo "el nombre del aprendiz es:--". $descripcion; echo "<br/>";
        
          
       
        $data =Request()->all();
        rol::create($data);

    }    

    
     public function consultar_rol()
    {
        $rol=rol::all();
        return view ('consultar_rol',compact('rol'));
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

        $rol=rol::findorfail($id);
        return view ('Actualizar_rol',compact('rol'));
    }

    public function actualizar($id){

        $rol=rol::findorfail($id);
        $data = Request ()->all();
        $rol->fill ($data)->save();
        return redirect ()->to ('consultar_rol');
    }

    public function eliminar14($id)

    {

      // Conseguimos el objeto
    $rol=rol::findorfail($id)->first();
         $rol->delete();

    }
}
