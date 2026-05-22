<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display login form
     */
    public function index()
    {
        return view('login');
    }

    //! Validacion del usuario
    public function login(Request $request)
    {
        //validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            //regenerar el toke csrf para evitar ataques de tipo CSRF
            request()->session()->regenerate();

            if (auth()->user()->tipo_usuario == 1) {
                //echo 'Inicio de sesión exitoso para admin';
                return redirect()->route('profileAdmin')->with('success', 'Inicio de sesión exitoso');
            } else if (auth()->user()->tipo_usuario == 2) {
                //echo 'Inicio de sesión exitoso para user';
                return redirect()->route('profileUser')->with('success', 'Inicio de sesión exitoso');
            }
        } else {
            //return back()->withErrors(['email' => 'Credenciales inválidas'])->withInput();
            echo 'Credenciales inválidas';
        }
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
