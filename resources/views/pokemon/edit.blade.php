
@extends('base')
@section('title', 'Editar Pokémon')
@section('content')
    <form action="{{url('pokemon/' . $pokemon->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">Nombre del Pokémon</label>
            <input value="{{old('nombre', $pokemon->nombre)}}" required type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Pokémon">
        </div>
        <div class="form-group">
            <label for="peso">Peso del Pokémon</label>
            <input value="{{old('peso', $pokemon->peso)}}" required type="number" step="0.001" class="form-control" id="peso" name="peso" placeholder="Peso del Pokémon">
        </div>
        <div class="form-group">
            <label for="altura">Altura del Pokémon</label>
            <input value="{{old('altura', $pokemon->altura)}}" required type="number" step="0.001" class="form-control" id="altura" name="altura" placeholder="Altura del Pokémon">
        </div>
        <div class="form-group">
            <label for="tipo">Tipo del Pokémon</label>
            <input value="{{old('tipo', $pokemon->tipo)}}" required type="text" class="form-control" id="tipo" name="tipo" placeholder="Tipo del Pokémon">
        </div>
        <div class="form-group">
            <label for="numero">Número del Pokémon</label>
            <input value="{{old('numero', $pokemon->numero)}}" required type="number" class="form-control" id="numero" name="numero" placeholder="Número del Pokémon">
        </div>
        <div class="form-gro">
            <label for="image">Imagen del Pokémon</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        @if ($pokemon->image)
        <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->nombre }}" width="100">
    @endif
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@endsection