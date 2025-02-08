
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Formulario</h2>

    <form action="{{ route('formularios.update', $formulario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $formulario->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control" value="{{ $formulario->telefono }}" required>
        </div>

        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" id="ciudad" name="ciudad" class="form-control" value="{{ $formulario->ciudad }}" required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" id="correo" name="correo" class="form-control" value="{{ $formulario->correo }}" required>
        </div>

        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea id="mensaje" name="mensaje" class="form-control" rows="4" required>{{ $formulario->mensaje }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('formularios.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection
