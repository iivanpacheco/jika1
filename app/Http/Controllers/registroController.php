<?php
/** @file : registroController.php
* @brief : Controller donde se llevaran acabo todos los metodos utilizados para la tabla de registro
* @date : 25/03/2017
* @author : Ivan Pacheco
* @version : 1
*/
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
          /** 
      *   @brief : Metodos para ingresar registro en la base de datos.
        * @return :Vista donde nos mostrara todos lo registro.
        */
      
        $data =Request()->all();
        registro::create($data);

    }    

    
     public function consultar_registro()

        /** 
      *   @brief : Metodos para consultar todos los  registro en la base de datos.
        * @return :Vista donde nos mostrara todos lo registro.
        */
    {
        $registro=registro::all();
        return view ('consultar_registro',compact('registro'));
    }

    public function editar14($id){
      /** 
      *   @param : $id
      *   @brief : Metodos para editar registro en la base de datos.
        * @return :Vista donde nos mostrara un formulario con todos los datos del registro a editar.
        */


        $registro=registro::findorfail($id);
        return view ('Actualizar_registro',compact('registro'));
    }

    public function actualizar($id){
      /** 
      *   @param : $id
      *   @brief : Metodos utilizado para actualizar registro en la base de datos.
        * @return :Vista donde nos mostrara todos lo registro.
        */

        $registro=registro::findorfail($id);
        $data = Request ()->all();
        $registro->fill ($data)->save();
        return redirect ()->to ('consultar_registro');
    }

    public function eliminar14($id)

    {
      /** 
      *   @param : $id
      *   @brief : Metodos utilizado para eliminar registro en la base de datos.
        * @return :Vista donde nos mostrara todos lo registro.
        */

      // Conseguimos el objeto
    $registro=registro::findorfail($id);
        $data = Request ()->all();
        $registro->fill ($data)->delete();
        return redirect ()->to ('consultar_registro');

    }
}
