@extends('base')
@section('title', 'Detalles del Pokémon')
@section('content')
<div class="form-group">
    Pokémon número #:
    {{$pokemon->numero}}
</div>
<div class="form-group">
    Nombre del Pokémon:
    {{$pokemon->nombre}}
</div>
<div class="form-group">
    Peso del Pokémon:
    {{$pokemon->peso}} kg
</div>
<div class="form-group">
    Altura del Pokémon:
    {{$pokemon->altura}} m
</div>
<div class="form-group">
    Tipo del Pokémon:
    {{$pokemon->tipo}}
</div>
@if ($pokemon->image)
    <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->nombre }}" width="200">
@endif
<div class="form-group">
    <a href="{{url()->previous()}}">Volver</a>
</div>
@endsection