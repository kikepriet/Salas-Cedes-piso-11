@extends('layouts/app')

@section('content')

<style>
  .salas{
            display: grid;
            grid-template-columns: 100%;
            grid-template-rows: 97vh;
            
        }
        
</style>

<table class="table table-striped table-dark text-center">
  <thead>
    <tr>
    <th scope="col"><a href="/captura">id</a></th>
      <th scope="col">evento</th>
      <th scope="col">responsable</th>
      <th scope="col">horario</th>
      <th scope="col">fecha</th>
      <th scope="col">sala</th>
      <th scope="col">modificar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($nexts as $next)
    <tr>
    <td>{{$next->id}} </td>
    <td>{{$next->evento}} </td>
    <td>{{$next->responsable}} </td>
    <td> {{ $next->hora_ini }} a {{ $next->hora_fin }} </td>
    <td> {{ $next->dia }} </td>
    <td> {{ $next->sala }} </td>
    <td>
        <span><a href="/editar?id={{$next->id}}" class="btn btn-primary btn-sm mr-2">Editar</a></span>
        <span><a href="/borrar?id={{$next->id}}" class="btn btn-danger btn-sm">Eliminar</a></span>
    </td>
    </tr>
    @endforeach



@endsection