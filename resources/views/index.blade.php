@extends('plantilla')

@section('titulo', 'Inici')

@section('contingut')
<div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">Benvinguts a la nostra plataforma</h1>
        <p class="col-md-8 fs-4">Aquesta és la pàgina principal de la pràctica Pt2.1 utilitzant Laravel i Blade.</p>
        <img src="https://picsum.photos/800/300" class="img-fluid rounded shadow my-3" alt="Imatge principal">
    </div>
</div>
@endsection