<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\marca;

class marcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar_marca()
       
      {
      $marca =Request()->get ('marca');
        echo "el nombre del aprendiz es:--". $marca;
         $descripcion =Request()->get ('descripcion');
        echo "el nombre del aprendiz es:--". $descripcion; echo "<br/>";
        
          
       
        $data =Request()->all();
        marca::create($data);

    }    

    
     public function consultar_marca()
    {
        $marca=marca::all();
        return view ('consultar_marca',compact('marca'));
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

        $marca=marca::findorfail($id);
        return view ('Actualizar_marca',compact('marca'));
    }

    public function actualizar($id){

        $marca=marca::findorfail($id);
        $data = Request ()->all();
        $marca->fill ($data)->save();
        return redirect ()->to ('consultar_marca');
    }

    public function eliminar14($id)

    {

      // Conseguimos el objeto
    $marca=marca::findorfail($id);
        $data = Request ()->all();
        $marca->fill ($data)->delete();
        return redirect ()->to ('consultar_marca');

    }

}
