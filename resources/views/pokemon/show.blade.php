@extends('base')
@section('title', 'Detalles del Pokémon')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Detalles del Pokémon</h1>
        <div class="form-group">
            <label>Pokémon número:</label>
            <p>{{$pokemon->numero}}</p>
        </div>
        <div class="form-group">
            <label>Nombre del Pokémon:</label>
            <p>{{$pokemon->nombre}}</p>
        </div>
        <div class="form-group">
            <label>Peso del Pokémon:</label>
            <p>{{$pokemon->peso}} kg</p>
        </div>
        <div class="form-group">
            <label>Altura del Pokémon:</label>
            <p>{{$pokemon->altura}} m</p>
        </div>
        <div class="form-group">
            <label>Tipo del Pokémon:</label>
            <p>{{$pokemon->tipo}}</p>
        </div>
        @if ($pokemon->image)
            <div class="form-group">
                <label>Imagen del Pokémon:</label>
                <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->nombre }}" width="200">
            </div>
        @endif
        <a href="{{url()->previous()}}" class="btn btn-secondary">Volver</a>
    </div>
@endsection