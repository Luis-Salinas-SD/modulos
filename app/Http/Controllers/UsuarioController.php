<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Module;


use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Muestra el formulario para crear un nuevo usuario
     */
    public function index()
    {

        //Mandar a llamar mis registros de modulos para mostrarlos en el formulario de creación de usuarios.
        $modulos = Module::all();

        return view('users', compact('modulos'));
    }

    /**
     * Hace una inserción de un nuevo usuario en la base de datos
     */
    public function create(Request $request)
    {

        //validacion de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:6',
            'tipo_usuario' => 'required|integer|in:1,2',
            'id_modulo' => 'required|integer',
        ]);

        //Inserción del nuevo usuario en la base de datos en la tabla usuarios.
        User::create([
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'tipo_usuario' => $request->input('tipo_usuario'),
            'id_modulo' => $request->input('id_modulo'),
        ]);

        echo "Usuario asignado con éxito";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
