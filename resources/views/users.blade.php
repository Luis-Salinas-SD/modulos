@extends('layouts/app')

@section('title')
    Usuarios
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ route('crearUsuario') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="nombre">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
                <label for="contrasenia" class="form-label">Password</label>
                <input type="password" class="form-control" id="contrasenia" name="password">
            </div>

            <div class="mb-3">
                <label for="rol" class="form-label">Rol</label>
                <select class="form-select" id="rol" name="tipo_usuario">
                    <option selected disabled>Selecciona un rol</option>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
