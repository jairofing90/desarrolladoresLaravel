@extends('layouts.layout')

@section('titulo', 'Detalle del proyecto')

@section('content')
    <h1 class="text-center pt-5 pb-3">Detalle del proyecto</h1>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Nombre</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proyecto->nombre }}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-sm-3">
            <h3>Duracion</h3>
        </div>
        <div class="col-sm-3">
            <p>{{ $proyecto->duracion }} meses</p>
        </div>
    </div>
    <a href="{{ route('proyectos.index') }}" class="btn btn-primary mt-3">Volver</a>

@endsection