<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Office;


use Illuminate\Http\Request;

class AsignOfficeController extends Controller
{
    //Mostrat formulario de asignación de oficina
    public function index()
    {

        $usuarios = User::all();
        $offices = Office::all();

        return view('asignOffice', compact('offices', 'usuarios'));
    }

    //Hacer una inserción de una nueva asignación de oficina en la base de datos
    public function create(Request $request)
    {

        //validacion de los datos
        $request->validate([
            'fecha_asignacion' => 'required',
            'id' => 'required',
            'id_oficina' => 'required',
        ]);

        //Obtener el usuario seteado en el formulario
        $usuario = User::find($request->input('id'));

        //Asignar la oficina al usuario, utilizando la relación definida en el modelo User
        //mi relación se llama oficinas()
        //lo pasamos a traves del método attach() para insertar un nuevo registro en la tabla pivote oficina_usuarios
        $usuario->oficinas()->attach(
            $request->input('id_oficina'), //llave foránea de la tabla pivote
            [
                //Campos adicionales en la tabla pivote
                'fecha_asignacion' => $request->input('fecha_asignacion'),
            ]
        );

        echo "Oficina asignada con éxito";
    }
}
