@extends('layouts.layout')

@section('titulo', 'Proyectos')

@section('content')
    <h1 class="text-center pt-5 pb-3">Proyectos</h1>
    @if ($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissble fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif

    @if ($query)
        <div class="alert alert-primary"> 
            <p> Los resultados de busqueda <strong>{{ $query }}</strong></p>
        </div>
    @endif
    
    <a href=" {{ route('proyectos.create') }} " class="btn btn-primary my-3 float-end">Crear Poyecto</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->nombre }}</td>
                    <td>
                        <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-info">Ver Detalles</a>
                        <a href=" {{ route('proyectos.edit', $proyecto->id) }} " class="btn btn-warning">Editar</a>
                        <form action="" method="post"></form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection