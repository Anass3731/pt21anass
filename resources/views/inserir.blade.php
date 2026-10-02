@extends('plantilla')

@section('titulo', 'Inserir Cotxe')

@section('contingut')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-4 text-center">Afegir Nou Cotxe a la Venda</h2>
        <h3 class="mb-4 text-center">{{ session('success') }}</h3>
        <!-- FORMULARIO DE ENVÍO -->
        <form action="{{ route('datos_insertar') }}" method="POST">
            <!-- TOKEN DE SEGURIDAD OBLIGATORIO DE LARAVEL -->
            @csrf

            <!-- Campo 1: Bastidor / Matrícula -->
            <div class="mb-3">
                <label for="bastidor" class="form-label">Numero bastidor</label>
                <input type="text" class="form-control" name="bastidor" id="bastidor" placeholder="Escriu el bastidor..." >
            @error('bastidor')
                <h6 class="alert-danger">{{ $message }}</h6>
            @enderror
            </div>

            <!-- Campo 2: Marca -->
            <div class="mb-3">
                <label for="marca" class="form-label">Marca coche</label>
                <input type="text" class="form-control" name="marca" id="marca" placeholder="Escriu la marca..." >
            </div>
            @error('marca')
                <h6 class="alert-danger">{{ $message }}</h6>
            @enderror

            <!-- Campo 3: Años -->
            <div class="mb-3">
                <label for="anys" class="form-label">Años coche</label>
                <input type="number" class="form-control" name="anys" id="anys" placeholder="Escriu els anys..." >
                @error('anys')
                <h6 class="alert-danger">{{ $message }}</h6>
            @enderror
            </div>

            <!-- BOTÓN PARA ENVIAR EL FORMULARIO -->
            <button type="submit" class="btn btn-primary w-100">Guardar Cotxe</button>
        </form>

    </div>
</div>
@endsection