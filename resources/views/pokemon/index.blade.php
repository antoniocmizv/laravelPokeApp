@extends('base')
@section('title', 'Lista de Pokémon')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Pokédex</h1>
        <table class="table table-striped table-hover" id="tablaPokemon">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>Tipo</th>
                    <th>Número</th>
                    <th>Imagen</th>
                    @if(session('user'))
                        <th>Eliminar</th>
                        <th>Editar</th>
                    @endif
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pokemon as $poke)
                    <tr>
                        <td>{{$poke->id}}</td>
                        <td>{{$poke->nombre}}</td>
                        <td>{{$poke->peso}} kg</td>
                        <td>{{$poke->altura}} m</td>
                        <td>{{$poke->tipo}}</td>
                        <td>{{$poke->numero}}</td>
                        <td>
                            @if ($poke->image)
                                <img src="{{ asset('storage/' . $poke->image) }}" alt="{{ $poke->nombre }}" width="50">
                            @endif
                        </td>
                        @if(session('user'))
                            <td><a href="#" data-href="{{url('pokemon/' . $poke->id)}}" class="borrar">Eliminar</a></td>
                            <td><a href="{{url('pokemon/' . $poke->id . '/edit')}}">Editar</a></td>
                        @endif
                        <td><a href="{{url('pokemon/' . $poke->id)}}">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(session('user'))
            <a href="{{url('pokemon/create')}}" class="btn btn-success">Añadir Pokémon</a>
            <form id="formDelete" action="{{ url('') }}" method="post">
                @csrf
                @method('delete')
            </form>
        @endif
    </div>
@endsection
@section('scripts')
    <script src="{{url('assets/scripts/script.js')}}"></script>
@endsection