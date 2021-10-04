@extends('layouts.layout')

@section('titulo', 'Editar Desarrollador')

@section('content')
<h1 class="text-center my-5">Editar Desarrollador</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"><strong>Ups....</strong> algo salio mal</div>
        <ul>
            @foreach ($errors->all(); as $error)
            <li>{{ $error }}</li>                
            @endforeach
        </ul>
    </div>    
@endif
<form action="{{ route('desarrolladores.update', $desarrollador->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $desarrollador->nombre }}">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" id="apellido" value="{{ $desarrollador->apellido }}">
    </div>
    <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $desarrollador->direccion }}">
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $desarrollador->telefono }}">
    </div>
    <div class="mb-3">
        <label for="proyectoId" class="form-label">Proyecto</label>
        <select name="proyectoId" id="proyectoId" class="form-control">
        @foreach ($proyectos as $proyecto)
            <option value="{{ $proyecto->id }}"
                @if ($desarrollador->proyectoId == $proyecto->id)
                    selected
                @endif
                >
                {{ $proyecto->nombre }}
            </option>         
        @endforeach
        </select>   
    </div> 
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection