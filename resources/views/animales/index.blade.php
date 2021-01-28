@extends('layouts.master')
@section('titulo')
    Listado de Animales
@endsection
@section('contenido')

@if(session("mensaje"))
<div class="alert alert-info">
    {{session("mensaje")}}
</div>
@endif

    <h1>Listado de Animales</h1>

<div class="row">
    <!-- Recorro con un for each el array de animales -->
@foreach( $animales as  $animal )
<div class="card" style="width: 18rem;">
    <!-- Cojo la ruta animal y uso la imagen -->
<img src="{{asset('assets/imagenes')}}/{{$animal->imagen}}" style="height:200px"/>
  <div class="card-body">
      <h5 class="card-title"><a href="{{ route('animales.show' , $animal) }}"></a></h5>
    
    <p class="card-text">- Especie: {{$animal->especie}}</p>
    <p class="card-text">- Peso:  {{$animal->peso}}Kg</p>
    <p class="card-text">- Nacimiento: {{$animal->fechaNacimiento}}</p>
    <p class="card-text">- Alimentacion: {{$animal->alimentacion}}</p>
    <p class="card-text">- Altura: {{$animal->altura}}m</p>
   
    <!-- Esto es una ruta que te lleva a cada animal -->
    <a href="{{route('animales.show' , $animal )}}"  class="btn btn-success">{{$animal->especie}}</a>
  </div>
</div>
@endforeach
</div>
@endsection
