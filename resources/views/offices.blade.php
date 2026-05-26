@extends('layouts/app')

@section('title')
Oficinas
@endsection

@section('content')
<div class="container mt-5">

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Agregar Oficina</h5>
        </div>
    </div>

    <div class="card p-3">
        <form action="{{ route('crearOficina') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nombre de la oficina</label>
                <input type="text" class="form-control" id="name" name="oficina">
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>

</div>
@endsection