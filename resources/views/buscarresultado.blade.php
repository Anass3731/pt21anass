@extends('app')
@section('content')
<p>Soy el resultado</p>
<div class="mx-auto" style="width: 400px;">
    @if (count($dades) == 0)
        <h3>Resultado de la busqueda</h3>
        <p>Sin resultados</p>
    
    @else
    <h3>Resultado de la busqueda. Resultados-> {{ count($dades) }}</h3>   
    <ul>
        @foreach ($dades as $i )
        <li>
           {{ $i->bastidor }} - {{ $i->marca }} {{ $i->anys }} 
        </li>            
        @endforeach

    </ul>
    @endif
    <a href="{{ route('dades-buscar') }}">Tornar a buscar</a>
</div>

@endsection