<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Module;

class ModuloController extends Controller
{

    /**
     * Muestra el formulario para crear un nuevo modulo
     */
    public function index()
    {
        //Formulario para crear un nuevo módulo
        return view('module');
    }

    /**
     * Hace una inserción de un nuevo modulo en la base de datos
     */
    public function create(Request $request)
    {
        //validacion de los datos.
        $request->validate([
            'modulo' => 'required|string|max:255',
            'zona' => 'required|string|max:255',
        ]);

        //Inserción del nuevo módulo en la base de datos en la tabla modulos.
        Module::create([
            'nombre' => $request->input('modulo'),
            'zona' => $request->input('zona'),
            'estado' => '1',
        ]);

        echo "El módulo se guardó con el ID: " . Module::latest()->first()->id;
    }
}
