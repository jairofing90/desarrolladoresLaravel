@extends('layouts.layout')

@section('titulo','Crear nuevo desarrollador')

@section('content')
    <h1 class="text-center pt-4 pb-3">Crear nuevo desarrollador</h1>
    @if ($errors->any())
        <div class="header"><strong>Ups...¡</strong> Algo salio mal</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>                
            @endforeach
        </ul>
    </div>        
    @endif
    <form action="{{ route('desarrolladores.store') }}" method="post">
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
        </div>
        <div class="mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" value="{{ old('apellido') }}">
        </div>
        <div class="mb-3">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" value="{{ old('direccion') }}">
        </div>
        <div class="mb-3">
            <label for="telefono">Telefono</label>
            <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="6014522369" value="{{ old('telefono') }}">
        </div>
        <div class="mb-3">
            <label for="proyectoId">Proyecto</label>
            <select name="proyectoId" id="proyectoId" class="form-select">
                <option value="" selected>Seleccione...</option>
                @foreach ($proyectos as $proyecto )
                <option value="{{ $proyecto->id }}"
                    @if (old('proyectoId') == $proyecto->id)
                        selected                      
                    @endif>
                    {{ $proyecto->nombre }}</option>                    
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    
@endsection