<?php
/** @file : tipo_dispositivoController.php
* @brief : Controller donde se llevaran acabo todos los metodos utilizados para la tabla de tipo_dispositivo
* @date : 25/03/2017
* @author : Ivan Pacheco
* @version : 1
*/
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
       /** 
      *   @brief : Metodos para ingresar tipo_dispositivo en la base de datos.
        * @return :Vista donde nos mostrara todos lo tipo_dispositivo.
        */
          
       
        $data =Request()->all();
        tipo_dispositivo::create($data);

    }    

    
     public function consultar_tipo_dispositivos()

        /** 
      *   @brief : Metodos para consultar todos los  tipo_dispositivo en la base de datos.
        * @return :Vista donde nos mostrara todos lo tipo_dispositivo.
        */
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

/** 
      *   @param : $id
      *   @brief : Metodos para editar tipo_dispositivo en la base de datos.
        * @return :Vista donde nos mostrara un formulario con todos los datos del tipo_dispositivo a editar.
        */

        $tipo_dispositivo=tipo_dispositivo::findorfail($id);
        return view ('Actualizar_tipo_dispositivo',compact('tipo_dispositivo'));
    }

    public function actualizar($id){
        /** 
      *   @param : $id
      *   @brief : Metodos utilizado para actualizar tipo_dispositivo en la base de datos.
        * @return :Vista donde nos mostrara todos lo tipo_dispositivo.
        */

        $tipo_dispositivo=tipo_dispositivo::findorfail($id);
        $data = Request ()->all();
        $tipo_dispositivo->fill ($data)->save();
        return redirect ()->to ('consultar_tipo_dispositivo');
    }

    public function eliminar14($id)

    { 
        /** 
      *   @param : $id
      *   @brief : Metodos utilizado para eliminar tipo_dispositivo en la base de datos.
        * @return :Vista donde nos mostrara todos lo tipo_dispositivo.
        */

      // Conseguimos el objeto
        $tipo_dispositivo=tipo_dispositivo::findorfail($id);
        $data = Request ()->all();
        $tipo_dispositivo->fill ($data)->delete();
        return redirect ()->to ('consultar_tipo_dispositivo');

    }

}
