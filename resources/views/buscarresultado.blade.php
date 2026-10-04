@extends('plantilla')

@section('titulo', 'Resultado de la busqueda')

@section('contingut')
<p>Soy el resultado</p>
<div class="mx-auto" style="width: 600px;">
    @if (count($dades) == 0)
    <div class="alert alert-danger mt-3" role="alert">
    <strong>Sin resultados:</strong> No se ha encontrado ningún vehículo que coincida con "<em>{{ $busqueda }}</em>".
    </div>
    @else
    <h6>Resultado de la busqueda. Resultados-> {{ count($dades) }}</h3>   
    <ul>
        @foreach ($dades as $i )
        <li> 
           Matricula-> {{ $i->matricula }} - {{ $i->marca }} {{ $i->modelo }} del año {{ $i->anyo }} 
                    <a href="{{ url('/listar/' . $i->matricula) }}" class="btn btn-sm btn-outline-info">Ver detalle</a>
         </li>            
        @endforeach
    </ul>
    @endif
    
</div>
<a href="{{ route('datos_buscar') }}">Hacer otra busqueda</a>

@endsection