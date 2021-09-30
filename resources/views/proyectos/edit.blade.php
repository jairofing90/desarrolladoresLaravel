@extends('layouts.layout')

@section('titulo', 'Editar Proyecto')

@section('content')
<h1 class="text-center my-5">Editar proyecto</h1>
<form action="{{ route('proyectos.update', $proyecto->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del proyecto</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $proyecto->nombre }}">
    </div>
    <div class="mb-3">
        <label for="duracion" class="form-label">Duracion del proyecto en meses</label>
        <input type="number" class="form-control" name="duracion" id="duracion" value="{{ $proyecto->duracion }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection