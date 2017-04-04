<?php
/** @file : marcaController.php
* @brief : Controller donde se llevaran acabo todos los metodos utilizados para la tabla de marca
* @date : 25/03/2017
* @author : Ivan Pacheco
* @version : 1
*/

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
       /** 
      *   @brief : Metodos para ingresar marca en la base de datos.
        * @return :Vista donde nos mostrara todos lo marca.
        */
        
          
       
        $data =Request()->all();
        marca::create($data);

    }    

    
     public function consultar_marca()

        /** 
      *   @brief : Metodos para consultar todas las  marca en la base de datos.
        * @return :Vista donde nos mostrara todas las marca.
        */
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
         /** 
      *   @param : $id
      *   @brief : Metodos para editar la marca en la base de datos.
        * @return :Vista donde nos mostrara un formulario con todos los datos de la marca a editar.
        */


        $marca=marca::findorfail($id);
        return view ('Actualizar_marca',compact('marca'));
    }

    public function actualizar($id){
        /** 
      *   @param : $id
      *   @brief : Metodos utilizado para actualizar marca en la base de datos.
        * @return :Vista donde nos mostrara todos lo marca.
        */

        $marca=marca::findorfail($id);
        $data = Request ()->all();
        $marca->fill ($data)->save();
        return redirect ()->to ('consultar_marca');
    }

    public function eliminar14($id)

    {
        /** 
      *   @param : $id
      *   @brief : Metodos utilizado para eliminar marca en la base de datos.
        * @return :Vista donde nos mostrara todas las marca.
        */

      // Conseguimos el objeto
    $marca=marca::findorfail($id);
        $data = Request ()->all();
        $marca->fill ($data)->delete();
        return redirect ()->to ('consultar_marca');

    }

}
