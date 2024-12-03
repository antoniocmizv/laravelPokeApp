@extends('base')
@section('title', 'Editar Pokémon')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Editar Pokémon</h1>
        <form action="{{url('pokemon/' . $pokemon->id)}}" method="post" enctype="multipart/form-data">
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
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="">Selecciona un tipo</option>
                    <option value="Agua" {{ old('tipo', $pokemon->tipo) == 'Agua' ? 'selected' : '' }}>Agua</option>
                    <option value="Fuego" {{ old('tipo', $pokemon->tipo) == 'Fuego' ? 'selected' : '' }}>Fuego</option>
                    <option value="Planta" {{ old('tipo', $pokemon->tipo) == 'Planta' ? 'selected' : '' }}>Planta</option>
                    <option value="Eléctrico" {{ old('tipo', $pokemon->tipo) == 'Eléctrico' ? 'selected' : '' }}>Eléctrico</option>
                    <option value="Hielo" {{ old('tipo', $pokemon->tipo) == 'Hielo' ? 'selected' : '' }}>Hielo</option>
                    <option value="Lucha" {{ old('tipo', $pokemon->tipo) == 'Lucha' ? 'selected' : '' }}>Lucha</option>
                    <option value="Veneno" {{ old('tipo', $pokemon->tipo) == 'Veneno' ? 'selected' : '' }}>Veneno</option>
                    <option value="Tierra" {{ old('tipo', $pokemon->tipo) == 'Tierra' ? 'selected' : '' }}>Tierra</option>
                    <option value="Volador" {{ old('tipo', $pokemon->tipo) == 'Volador' ? 'selected' : '' }}>Volador</option>
                    <option value="Psíquico" {{ old('tipo', $pokemon->tipo) == 'Psíquico' ? 'selected' : '' }}>Psíquico</option>
                    <option value="Bicho" {{ old('tipo', $pokemon->tipo) == 'Bicho' ? 'selected' : '' }}>Bicho</option>
                    <option value="Roca" {{ old('tipo', $pokemon->tipo) == 'Roca' ? 'selected' : '' }}>Roca</option>
                    <option value="Fantasma" {{ old('tipo', $pokemon->tipo) == 'Fantasma' ? 'selected' : '' }}>Fantasma</option>
                    <option value="Dragón" {{ old('tipo', $pokemon->tipo) == 'Dragón' ? 'selected' : '' }}>Dragón</option>
                    <option value="Siniestro" {{ old('tipo', $pokemon->tipo) == 'Siniestro' ? 'selected' : '' }}>Siniestro</option>
                    <option value="Acero" {{ old('tipo', $pokemon->tipo) == 'Acero' ? 'selected' : '' }}>Acero</option>
                    <option value="Hada" {{ old('tipo', $pokemon->tipo) == 'Hada' ? 'selected' : '' }}>Hada</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numero">Número del Pokémon</label>
                <input value="{{old('numero', $pokemon->numero)}}" required type="number" class="form-control" id="numero" name="numero" placeholder="Número del Pokémon">
            </div>
            <div class="form-group">
                <label for="image">Imagen del Pokémon</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($pokemon->image)
                    <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->nombre }}" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
@endsection