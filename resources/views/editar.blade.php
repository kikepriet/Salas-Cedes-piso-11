@extends('layouts.app')

@section('content')

<style>.row{height: 100vh;}</style>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="captura">
            <form action="/editar/reservacion" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="responsable">ID:</label>
                    <input type="text" class="form-control" id="ID" name="id" value="{{$queso}}" readonly>
                </div>
                
                <div class="form-group">
                    <label for="evento">Nombre del evento:</label>
                    <input type="text" class="form-control" id="evento" name="evento" aria-describedby="eventolHelp" value="{{$editar->evento}}" readonly>
                    <small id="eventoHelp" class="form-text text-muted">junta, reunión, capacitación, Big Data, Lean etc.</small>
                </div>

                <div class="form-group">
                    <label for="responsable">Responsable:</label>
                    <input type="text" class="form-control" id="responsable" name="responsable" aria-describedby="responsablelHelp" value="{{$editar->responsable}}"  readonly>
                </div>

                <div class="form-group">
                    <label for="dia">día del evento:</label>
                    <input type="date" class="form-control" id="dia" name="dia" value="{{$editar->dia}}">
                </div>

                <div class="form-group">
                    <label for="hora_ini">Hora de inicio:</label>
                    <input type="text" class="form-control" id="hora_ini" name="hora_ini" value="{{$editar->hora_ini}}">
                </div>

                <div class="form-group">
                        <label for="hora_fin">Hora final:</label>
                        <input type="text" class="form-control" id="hora_fin" name="hora_fin" value="{{$editar->hora_fin}}">
                </div>
                <div class="form-group">
                    <label for="sala">Sala:</label>
                    <input type="text" class="form-control" id="sala" name="sala" value="{{$editar->sala}}">
                </div>

                <button type="submit" class="btn btn-primary">Capturar</button>
                @if ($errors->any())
                    @foreach ($errors->get('evento') as $error )
                        <div class="mt-2 alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            </form>  
        </div>
    </div>
</div>



@endsection