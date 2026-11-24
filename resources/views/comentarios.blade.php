@extends('master')

@section('pestaña')
    <title>Inicio</title>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/comentarios/styles.css') }}">
    @endpush
@endsection

@section('contenido')
    <div class="container h-100">
        <h1 class="m-10">Agrega tu comentario</h1>

        <form action="{{ url('/guardarOpinion') }}" method="POST">
            @csrf

            <label for="email" class="form-label mb-2">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="nombre@ejemplo.com" required>

            <label for="nombre" class="form-label mt-7">Nombre:</label>
            <input type="text" class="form-control mb-2" id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Luis Pérez" required>

            <label for="opinion" class="form-label mt-7">Tú opinión:</label>
            <select class="form-control" id="opinion" name="opinion" required>
                <option value="" disabled selected>Elige una</option>
                <option value="1" @selected(old('opinion') == '1')>Buena</option>
                <option value="2" @selected(old('opinion') == '2')>Normal</option>
                <option value="3" @selected(old('opinion') == '3')>Mala</option>
            </select>

            <button type="submit" class="btn-outline theme-success mt-7">Subir mi comentario</button>
        </form>
    </div>
@endsection