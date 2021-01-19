@extends('layouts.master')
@section('titulo')
    Listado de Animales
@endsection
@section('contenido')
    <h1>Listado de Animales</h1>

<div class="row">
@foreach( $animales as $clave => $animal )
<div class="card" style="width: 18rem;">
<img src="{{asset('assets/imagenes')}}/{{$animal['imagen']}}" style="height:200px"/>
  <div class="card-body">
      <h5 class="card-title"><a href="{{ route('animales.show' , $clave ) }}"></a></h5>
    
    <p class="card-text">- {{$animal['especie']}}</p>
    <p class="card-text">- {{$animal['peso']}}</p>
    <p class="card-text">- {{$animal['fechaNacimiento']}}</p>
    <p class="card-text">- {{$animal['alimentacion']}}</p>
    
    <a href="{{route('animales.show' , $clave )}}"  class="btn btn-primary">Ver Animal</a>
  </div>
</div>
@endforeach
</div>
@endsection
