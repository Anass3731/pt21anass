@extends('plantilla') {{-- O el nombre de tu layout principal --}}

@section('titulo', 'Sobre Nosotros - Tcoches')

@section('contingut')
<div class="container my-5">
    <div class="row align-items-center mb-5">
        <div class="col-lg-6">
            <h1 class="display-4 fw-bold text-primary mb-3">Sobre nosotros</h1>
            <p class="lead text-secondary">
                Somos tu concesionario de confianza especializado en la compra, venta y gestión de vehículos de ocasión y nuevos.
            </p>
            <p>
                Ofrecemos una amplia variedad de marcas y modelos revisados con los más altos estándares de calidad. Nuestro objetivo es hacer que encontrar tu próximo coche sea una experiencia sencilla, transparente y rápida.
            </p>
        </div>
        <div class="col-lg-6 text-center">
            <img src="{{ asset('img/nosotros.jpg') }}" alt="Ubicacion mapa" class="img-fluid">
        </div>
    </div>


</div>
@endsection