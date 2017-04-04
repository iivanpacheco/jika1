<?php
 /** @file : rolController.php
* @brief : Controller donde se llevaran acabo todos los metodos utilizados para la tabla de rol
* @date : 25/03/2017
* @author : Ivan Pacheco
* @version : 1
*/

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
       /** 
      *   @brief : Metodos para ingresar rol en la base de datos.
        * @return :Vista donde nos mostrara todos lo rol.
        */
          
       
        $data =Request()->all();
        rol::create($data);

    }    

    
     public function consultar_rol()

        /** 
      *   @brief : Metodos para consultar todos los  rol en la base de datos.
        * @return :Vista donde nos mostrara todos lo rol.
        */
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
        /** 
      *   @param : $id
      *   @brief : Metodos para editar rol en la base de datos.
        * @return :Vista donde nos mostrara un formulario con todos los datos del rol a editar.
        */


        $rol=rol::findorfail($id);
        return view ('Actualizar_rol',compact('rol'));
    }

    public function actualizar($id){
        /** 
      *   @param : $id
      *   @brief : Metodos utilizado para actualizar rol en la base de datos.
        * @return :Vista donde nos mostrara todos lo rol.
        */

        $rol=rol::findorfail($id);
        $data = Request ()->all();
        $rol->fill ($data)->save();
        return redirect ()->to ('consultar_rol');
    }

    public function eliminar14($id)

    {
        /** 
      *   @param : $id
      *   @brief : Metodos utilizado para eliminar rol en la base de datos.
        * @return :Vista donde nos mostrara todos lo rol.
        */

      // Conseguimos el objeto
    $rol=rol::findorfail($id);
        $data = Request ()->all();
        $rol->fill ($data)->delete();
        return redirect ()->to ('consultar_rol');
    }
}
