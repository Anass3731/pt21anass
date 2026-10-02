@extends('plantilla')

@section('titulo', 'Consultar detalle Cotxe')

@section('contingut')

<p>Hola soy consultar detalle</p>
<p>Mostrar resultado. Resultado: {{ count($dades) }}</p>
<ul>
    <li><strong>Bastidor->  </strong>{{ $dades[0]->bastidor }}</li>
    <li><strong>Marca->  </strong>{{ $dades[0]->marca }}</li>
    <li><strong>Anys->  </strong>{{ $dades[0]->anys }}</li>

</ul>


@endsection