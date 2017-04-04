<?php

/** @file : jika.php
* @brief : Controller donde se llevaran acabo todos los metodos utilizados para la tabla de usuarios
* @date : 25/03/2017
* @author : Ivan Pacheco
* @version : 1
*/

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
        /** 
      *   @brief : Metodos para ingresar usuarios en la base de datos.
        * @return :Vista donde nos mostrara todos lo usuarios.
        */
      
       
        $data =Request()->all();
        usuario::create($data);
        return redirect ()->to ('inicio');

    }    

    
     public function consultar()
    {
        /** 
      *   @brief : Metodos para consultar todos los  usuarios en la base de datos.
        * @return :Vista donde nos mostrara todos lo usuarios.
        */
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
        /** 
      *   @param : $id
      *   @brief : Metodos para editar usuarios en la base de datos.
        * @return :Vista donde nos mostrara un formulario con todos los datos del usuarios a editar.
        */

        $usuario=usuario::findorfail($id);
        return view ('Actualizar_usuario',compact('usuario'));
    }

    public function actualizar($id){
        /** 
      *   @param : $id
      *   @brief : Metodos utilizado para actualizar usuarios en la base de datos.
        * @return :Vista donde nos mostrara todos lo usuarios.
        */

        $usuario=usuario::findorfail($id);
        $data = Request ()->all();
        $usuario->fill ($data)->save();
        return redirect ()->to ('consultar_usuario');
    }

    public function eliminar14($id)

    {

/** 
      *   @param : $id
      *   @brief : Metodos utilizado para eliminar usuarios en la base de datos.
        * @return :Vista donde nos mostrara todos lo usuarios.
        */
      // Conseguimos el objeto
  $usuario=usuario::findorfail($id);
        $data = Request ()->all();
        $usuario->fill ($data)->delete();
        return redirect ()->to ('consultar_usuario');
    }

}
