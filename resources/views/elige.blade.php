@extends('layouts.app')

@section('content')

<style>.row{height: 100vh;} p{text-align: center;}</style>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="captura">
            <h1 class="mb-5">¿Qué quieres hacer?</h1>
            <p><a class="btn btn-primary" href="/pizarra">Ver Pizarra</a></p>
            <p><a class="btn btn-primary" href="/captura">Capturar Eventos</a></p>
            <p><a class="btn btn-primary" href="/next">Todos los Eventos</a></p>
        </div>
    </div>
</div>



@endsection