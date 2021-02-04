@extends('layouts.master')
@section('titulo')
    Zoológico
@endsection
@section('contenido')
 <div class="row">
<div class="col-sm-3">
<img src="{{asset('assets/imagenes')}}/{{$animal->imagen}}" style="height:400px; width: 400px;"/>

</div>
<div class="col-sm-9">
    <p class="h3">{{$animal->especie}}</p>
    <p class="h5">Peso</p>
    <p>{{$animal->peso}} Kg</p>
    <p class="h3">Altura</p>
    <p>{{$animal->altura}} cm</p>
    <p class="h5">Descripcion</p>
    <p>{{$animal->descripcion}}</p>
    <p class="h5">Revisiones</p>
    @foreach($animal->revisiones as $aux )
    <p>{{$aux->fecha}}</p>
    <p>{{$aux->descripcion}}</p>
    @endforeach
    <div>
        <a href="{{route('animales.edit' , $animal )}}"><button type="button" class="btn btn-warning">Editado</button></a>
        <a href="{{route('revisiones.create' , $animal )}}"><button type="button" class="btn btn-success">Añadir una revision</button></a>
        <a href="{{route('animales.index')}}"><button type="button" class="btn btn-secondary">Volver al Listado</button></a>

</div>
</div>
  
@endsection

