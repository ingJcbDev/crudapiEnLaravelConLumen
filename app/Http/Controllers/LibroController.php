<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Libros;

class LibroController extends Controller{

    public function index(){
    
        $datosLibro = Libro::all();

        return response()->json($datosLibro);
    }
    public function guardar(Request $request){

        // instancia la clase
        $datosLibro = new Libro;

        // Se pasan los parametros capturadas en la peticion
        $datosLibro->titulo = $request->titulo; 
        $datosLibro->imagen = $request->imagen;

        $datosLibro->save(); // Guarda en la tabla 

        return response()->json($request);
    }

}