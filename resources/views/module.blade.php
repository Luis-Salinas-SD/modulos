@extends('layouts/app')

@section('title')
    Usuarios
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ route('crearModulo') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="module" class="form-label">Modulo</label>
                <input type="text" class="form-control" id="module" name="modulo">
            </div>

            <div class="mb-3">
                <label for="zona" class="form-label">Zona</label>
                <input type="text" class="form-control" id="zona" name="zona">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection
