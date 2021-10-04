@extends('layouts.layout')

@section('titulo', 'Detalle del desarrollador')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del desarrollador</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nombre: </h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $desarrollador->nombre }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Apellido: </h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $desarrollador->apellido }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Direccion: </h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $desarrollador->direccion }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Teléfono: </h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $desarrollador->telefono }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Proyecto Actual: </h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $desarrollador->nombreProyecto }}</p>
        </div>
    </div>
    <a href="{{ route('desarrolladores.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection