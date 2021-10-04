@extends('layouts.layout')

@section('titulo', 'Desarrolladores')

@section('content')
    <h1 class="text-center pt-4 pb-3">Desarrolladores</h1>
    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-sucess alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>    
    @endif
        <a href="{{ route('desarrolladores.create') }}" class="btn btn-primary my-3 float-end">Crear Desarrollador</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($desarrolladores as $desarrollador)
                    <tr>
                        <td>{{ $desarrollador->nombre }}</td>
                        <td>{{ $desarrollador->apellido }}</td>
                        <td>
                            <a href="{{ route('desarrolladores.show', $desarrollador->id) }}" class="btn btn-info">Ver detalles</a>
                            <a href="{{ route('desarrolladores.edit', $desarrollador->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('desarrolladores.destroy', $desarrollador->id) }}" class="d-inline-flex" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" 
                                onclick="return confirm('¿Confirma la eliminación del Desarrollador {{ $desarrollador->nombre }}?')">
                                    Eliminar
                            </button>
                            </form>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
@endsection