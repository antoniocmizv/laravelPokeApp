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
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="">Selecciona un tipo</option>
                    <option value="Agua" {{ old('tipo') == 'Agua' ? 'selected' : '' }}>Agua</option>
                    <option value="Fuego" {{ old('tipo') == 'Fuego' ? 'selected' : '' }}>Fuego</option>
                    <option value="Planta" {{ old('tipo') == 'Planta' ? 'selected' : '' }}>Planta</option>
                    <option value="Eléctrico" {{ old('tipo') == 'Eléctrico' ? 'selected' : '' }}>Eléctrico</option>
                    <option value="Hielo" {{ old('tipo') == 'Hielo' ? 'selected' : '' }}>Hielo</option>
                    <option value="Lucha" {{ old('tipo') == 'Lucha' ? 'selected' : '' }}>Lucha</option>
                    <option value="Veneno" {{ old('tipo') == 'Veneno' ? 'selected' : '' }}>Veneno</option>
                    <option value="Tierra" {{ old('tipo') == 'Tierra' ? 'selected' : '' }}>Tierra</option>
                    <option value="Volador" {{ old('tipo') == 'Volador' ? 'selected' : '' }}>Volador</option>
                    <option value="Psíquico" {{ old('tipo') == 'Psíquico' ? 'selected' : '' }}>Psíquico</option>
                    <option value="Bicho" {{ old('tipo') == 'Bicho' ? 'selected' : '' }}>Bicho</option>
                    <option value="Roca" {{ old('tipo') == 'Roca' ? 'selected' : '' }}>Roca</option>
                    <option value="Fantasma" {{ old('tipo') == 'Fantasma' ? 'selected' : '' }}>Fantasma</option>
                    <option value="Dragón" {{ old('tipo') == 'Dragón' ? 'selected' : '' }}>Dragón</option>
                    <option value="Siniestro" {{ old('tipo') == 'Siniestro' ? 'selected' : '' }}>Siniestro</option>
                    <option value="Acero" {{ old('tipo') == 'Acero' ? 'selected' : '' }}>Acero</option>
                    <option value="Hada" {{ old('tipo') == 'Hada' ? 'selected' : '' }}>Hada</option>
                </select>
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