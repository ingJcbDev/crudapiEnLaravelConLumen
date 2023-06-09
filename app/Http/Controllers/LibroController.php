<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
// hora fecha 
use Carbon\Carbon;

class LibroController extends Controller
{

    public function index()
    {

        $datosLibro = Libro::all();

        return response()->json($datosLibro);
    }
    public function guardar(Request $request)
    {

        // instancia la clase
        $datosLibro = new Libro;

        // Valida que exista un archivo adjunta e inserta en la base de datos
        if ($request->hasFile('imagen')) {
            // Obtener el nombre original
            $nombreArchivoOriginal = $request->file('imagen')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './upload/';
            // Cambiar el nombre del archivo
            $request->file('imagen')->move($carpetaDestino, $nuevoNombre);

            // Se pasan los parametros capturadas en la peticion
            $datosLibro->titulo = $request->titulo;
            $datosLibro->imagen = ltrim($carpetaDestino, '.') . $nuevoNombre;

            $datosLibro->save(); // Guarda en la tabla 
        }

        return response()->json($datosLibro);
    }

    public function ver($id)
    {

        $datosLibro = new Libro;
        $datosEncontrados = $datosLibro->find($id);

        return response()->json($datosEncontrados);
    }

    public function eliminar($id)
    {

        $datosLibro = Libro::find($id);

        // Si los tados del libro existen
        if ($datosLibro) {
            $rutaArchivo = base_path('public') . $datosLibro->imagen;
            // si el archivo existe
            if (file_exists($rutaArchivo)) {
                // Borrar
                unlink($rutaArchivo);
            }
            $datosLibro->delete();
        }


        return response()->json("Registro Borrado");
    }

    public function actualizar(Request $request, $id)
    {
        // Se busca la informacion del libro
        $datosLibro = Libro::find($id);

        // Valida que exista un archivo adjunta e inserta en la base de datos
        if ($request->hasFile('imagen')) {

            // Si los tados del libro existen
            if ($datosLibro) {
                $rutaArchivo = base_path('public') . $datosLibro->imagen;
                // si el archivo existe
                if (file_exists($rutaArchivo)) {
                    // Borrar
                    unlink($rutaArchivo);
                }
                $datosLibro->delete();
            }

            // Obtener el nombre original
            $nombreArchivoOriginal = $request->file('imagen')->getClientOriginalName();
            $nuevoNombre = Carbon::now()->timestamp . "_" . $nombreArchivoOriginal;
            $carpetaDestino = './upload/';
            // Cambiar el nombre del archivo
            $request->file('imagen')->move($carpetaDestino, $nuevoNombre);

            // Se pasan los parametros capturadas en la peticion
            $datosLibro->imagen = ltrim($carpetaDestino, '.') . $nuevoNombre;
            $datosLibro->save();
        }
        // Se pregunta si el campo esta diferente a vacio
        if ($request->input('titulo')) {
            // Se le asigna a la tabla
            $datosLibro->titulo = $request->input('titulo');
        }

        // Se guarda en la tabla
        $datosLibro->save();

        return response()->json(array('message' => 'Datos actualizados', 'data' => $datosLibro));
    }
}
