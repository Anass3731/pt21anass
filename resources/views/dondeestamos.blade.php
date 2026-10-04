@extends('plantilla')

@section('titulo', 'donde estamos')

@section('contingut')

<div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
    <div class="container-fluid py-3">
        <h1 class="display-10 fw-bold">Donde estamos</h1>
       
       <img src="{{ asset('img/ubi.jpg') }}" alt="Ubicacion mapa" class="img-fluid">
        <p class="col-md-8 fs-4">Carrer de Sant Pius X, 8, 08901 L'Hospitalet de Llobregat, Barcelona</p> 
       <a href="https://google.com/maps?sca_esv=3cbbadbd95a53bdb&sxsrf=APpeQnulTF26yprNXbp1XN8umcszQJCwWw:1791044339546&fbs=ABfTbFVyMZGZf1hfvX9uKjN_-G8c4u0nXx4bEIpwm1lnNH832cY0rzciwbWdjW1sV3VNzLwycIY6CqQdtp1y8TWQhA2ZUubobbLJHtyG849c38KkUw86DP_pQ8rSeSDow0nhTzEhBlp8n9OqumlWK3kNZjJRc0agicinpZr-JJ2ZCR3nR9kDE7I&biw=768&bih=784&dpr=1.25&um=1&ie=UTF-8&fb=1&gl=es&sa=X&geocode=KQWqp8PnmKQSMRPHpDXHgodH&daddr=Carrer+de+Sant+Pius+X,+8,+08901+L%27Hospitalet+de+Llobregat,+Barcelona" target="_blank">Ver ubicación en Google Maps</a>
    </div>
</div>
@endsection