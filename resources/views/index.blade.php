@extends('plantilla')

@section('titulo', 'Inici')

@section('contingut')
<div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">Compra venta de coches</h1>
        <p class="col-md-8 fs-4">Pagina web para comprar y vender coches</p>
    <img src="{{ asset('img/coche1.jpg') }}" alt="Coche de prueba" class="img-fluid">
    </div>
</div>
@endsection