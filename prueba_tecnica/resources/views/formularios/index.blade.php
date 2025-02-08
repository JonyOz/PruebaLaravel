<!-- resources/views/formularios/index.blade.php -->
@extends('layouts.app') {{-- Si tienes un layout principal, extiéndelo --}}
@section('title', 'Mensajes')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Lista de Formularios</h2>

    {{-- Mostrar mensaje de éxito --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Correo</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formularios as $formulario)
            <tr>
                <td>{{ $formulario->id }}</td>
                <td>{{ $formulario->nombre }}</td>
                <td>{{ $formulario->telefono }}</td>
                <td>{{ $formulario->ciudad }}</td>
                <td>{{ $formulario->correo }}</td>
                <td>{{ $formulario->mensaje }}</td>
                <td>
                    <!-- Botón para editar -->
                    <a href="{{ route('formularios.edit', $formulario->id) }}" class="btn btn-warning btn-sm">Editar</a>

                    <!-- Formulario para eliminar -->
                    <form action="{{ route('formularios.destroy', $formulario->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
