@extends('master')

@section('pestaña')
<title>Inicio</title>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/comentarios/styles.css') }}">
@endpush


@section('contenido')

    <div class="container h-100">
        <h1 class="m-10">Agrega tu comentario</h1>

        <label for="exampleFormControlInput" class="form-label mb-2">Correo electrónico:</label>
        <input type="email" class="form-control" id="exampleFormControlInput" placeholder="nombre@ejemplo.com">

        <label for="exampleFormControlInput" class="form-label mt-7">Nombre:</label>

        <input type="text" class="form-control mb-2" id="exampleFormControlInput" placeholder="Luis Pérez">


        <label for="exampleFormControlSelect2" class="form-label mt-7">Tú opinión:</label>
        <select class="form-control" id="exampleFormControlSelect2">
            <option>Elige una</option>
            <option value="1">Buena</option>
            <option value="2">Normal</option>
            <option value="3">Mala</option>
        </select>

    <button type="button" class="btn-outline theme-success mt-7">Subir mi comentario</button>


    </div>



@endsection