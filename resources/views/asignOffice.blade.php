@extends('layouts/app')

@section('title')
Asignación de oficina
@endsection

@section('content')
<div class="container mt-5">

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Asignar oficina al usuario</h5>
        </div>
    </div>

    <div class="card p-4">
        <form action="{{ route('asignarOficinaCreate') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Fecha de asignación</label>
                <input type="date" class="form-control" id="name" name="fecha_asignacion">
            </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <select class="form-select" id="usuario" name="id">
                    <option selected disabled>Seleccionar usuario</option>
                    @foreach ($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="oficina" class="form-label">Oficina</label>
                <select class="form-select" id="oficina" name="id_oficina">
                    <option selected disabled>Seleccionar oficina</option>
                    @foreach ($offices as $office)
                    <option value="{{ $office->id_oficina }}">{{ $office->oficina }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>

</div>
@endsection