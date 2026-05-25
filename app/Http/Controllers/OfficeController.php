<?php

namespace App\Http\Controllers;

use App\Models\Office;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    //Formulario para crear una nueva oficina
    public function index()
    {
        return view('offices');
    }

    /**
     * Hace una inserción de un nuevo modulo en la base de datos
     */
    public function create(Request $request)
    {
        //validacion de los datos.
        $request->validate([
            'oficina' => 'required|string|max:255',
        ]);


        //Inserción de la nueva oficina en la base de datos en la tabla oficina.
        Office::create([
            'oficina' => $request->input('oficina'),
            'estado' => '1',
        ]);

        echo "La oficina se guardó con éxito: ";
    }
}
