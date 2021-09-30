@extends('layouts.layout')

@section('titulo', 'crear nuevo proyecto')

@section('content')
<h1 class="text-center my-5">Crear nuevo proyecto</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>Ups...</strong> algo salio mal</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('proyectos.store') }}" method="post">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del proyecto</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del proyecto" value="{{ old('nombre') }}">
    </div>
    <div class="mb-3">
        <label for="duracion" class="form-label">Duracion del proyecto en meses</label>
        <input type="number" class="form-control" name="duracion" id="duracion" placeholder="0" value="{{ old('duracion') }}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection
