<?php
/** @file : dispositivoController.php
* @brief : Controller donde se llevaran acabo todos los metodos utilizados para la tabla de dispositivos.
* @date : 25/03/2017
* @author : Ivan Pacheco
* @version : 1
*/

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
      /** 
      
      *   @brief : Metodos para ingresar Dispositivos en la base de datos.
        * @return :Vista donde nos mostrara todos lo dispositivos.
        */
   
        $data =Request()->all();
        dispositivo::create($data);
        return redirect ()->to ('consultar_dispositivo');

    }

     public function consultar_dispositivo()
    {

      /** 
      *   @brief : Metodos para consultar todos los  Dispositivos en la base de datos.
        * @return :Vista donde nos mostrara todos lo dispositivos.
        */
        $dispositivos=dispositivo::all();
        return view ('consultar_dispositivo',compact('dispositivos'));
    }

    public function editar14($id_dispositivo){
      /** 
      *   @param : $id_dispositivo 
      *   @brief : Metodos para editar Dispositivos en la base de datos.
        * @return :Vista donde nos mostrara un formulario con todos los datos del dispoditivo a editar.
        */

        $dispositivos=dispositivo::findorfail($id_dispositivo);
        return view ('Actualizar_dispositivo',compact('dispositivos'));
    }

    public function actualizar($id_dispositivo){
       /** 
      *   @param : $id_dispositivo 
      *   @brief : Metodos utilizado para actualizar Dispositivos en la base de datos.
        * @return :Vista donde nos mostrara todos lo dispositivos.
        */

        $dispositivos=dispositivo::findorfail($id_dispositivo);
        $data = Request ()->all();
        $dispositivos->fill ($data)->save();
        return redirect ()->to ('consultar_dispositivo');
    }

    public function eliminar14($id_dispositivo)

    {
      /** 
      *   @param : $id_dispositivo 
      *   @brief : Metodos utilizado para eliminar Dispositivos en la base de datos.
        * @return :Vista donde nos mostrara todos lo dispositivos.
        */

      // Conseguimos el objeto
        $dispositivos=dispositivo::findorfail($id_dispositivo);
        $data = Request ()->all();
        $dispositivos->fill ($data)->delete();
        return redirect ()->to ('consultar_dispositivo');

    }

}
