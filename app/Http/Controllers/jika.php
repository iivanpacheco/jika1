<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\usuario;

class jika extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar_usuario()
       
      {
      $nombre =Request()->get ('nombre');
        echo "el nombre del aprendiz es:--". $nombre;
         $apellido =Request()->get ('apellido');
        echo  $apellido; echo "<br/>";
        $celular =Request()->get ('celular');
        echo "Numero de celular del aprendiz es--". $celular; echo "<br/>";
        $genero =Request()->get ('genero');
        echo "El genero del aprendiz es--". $genero; echo "<br/>";
        $correo =Request()->get ('correo');
      echo "El corre del aprendiz es--". $correo; echo "<br/>";
        $fecha_nacimiento =Request()->get ('fecha_nacimiento');
        echo "Fecha de nacimineto del aprendiz--". $fecha_nacimiento; echo "<br/>"; 
          $fk_id_rol =Request()->get ('rol');
        echo "El rol es--". $fk_id_rol; echo "<br/>";   
          
       
        $data =Request()->all();
        usuario::create($data);

    }    

    
     public function consultar()
    {
        $usuario=usuario::all();
        return view ('consultar_usuario',compact('usuario'));
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

        $usuario=usuario::findorfail($id);
        return view ('Actualizar_usuario',compact('usuario'));
    }

    public function actualizar($id){

        $usuario=usuario::findorfail($id);
        $data = Request ()->all();
        $usuario->fill ($data)->save();
        return redirect ()->to ('consultar_usuario');
    }

    public function eliminar14($id)

    {

      // Conseguimos el objeto
    $usuario=usuario::findorfail($id)->first();
         $usuario->delete();

    }

}
