@extends('base')
@section('title', 'Crear Pokémon')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Agregar Pokémon</h1>
        <form action="{{url('pokemon')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Pokémon</label>
                <input value="{{old('nombre')}}" required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Pokémon">
            </div>
            <div class="form-group">
                <label for="peso">Peso del Pokémon</label>
                <input value="{{old('peso')}}" required type="number" step="0.001" class="form-control" id="peso" name="peso" placeholder="Peso del Pokémon">
            </div>
            <div class="form-group">
                <label for="altura">Altura del Pokémon</label>
                <input value="{{old('altura')}}" required type="number" step="0.001" class="form-control" id="altura" name="altura" placeholder="Altura del Pokémon">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo del Pokémon</label>
                <input value="{{old('tipo')}}" required type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo del Pokémon">
            </div>
            <div class="form-group">
                <label for="numero">Número del Pokémon</label>
                <input value="{{old('numero')}}" required type="number" class="form-control" id="numero" name="numero" placeholder="Número del Pokémon">
            </div>
            <div class="form-group">
                <label for="image">Imagen del Pokémon</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
@endsection