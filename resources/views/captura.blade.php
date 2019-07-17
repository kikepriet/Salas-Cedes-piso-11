@extends('layouts.app')

@section('content')

<style>.row{height: 100vh;}</style>

<div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="captura">
            <form action="/crear/reservacion" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="evento">Nombre del evento:</label>
                    <input type="text" class="form-control" id="evento" name="evento" aria-describedby="eventolHelp" placeholder="evento">
                    <small id="eventoHelp" class="form-text text-muted">junta, reunión, capacitación, Big Data, Lean etc.</small>
                </div>
                <div class="form-group">
                    <label for="responsable">Responsable:</label>
                    <input type="text" class="form-control" id="responsable" name="responsable" aria-describedby="responsablelHelp">
                </div>
                <div class="form-group">
                    <label for="dia">día del evento:</label>
                    <input type="date" class="form-control" id="dia" name="dia">
                </div>
                <div class="form-group">
                    <label for="hora_ini">Hora de inicio:</label>
                    <select class="custom-select" name="hora_ini" id="hora_ini">
                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">19:00</option>
                        <option value="19:30">19:30</option>
                        <option value="20:00">20:00</option>
                        <option value="20:30">20:30</option>
                        <option value="21:00">21:00</option>
                        <option value="21:30">21:30</option>
                        <option value="22:00">22:00</option>
                    </select>
                </div>
                <div class="form-group">
                        <label for="hora_fin">Hora final:</label>
                        <select class="custom-select" name="hora_fin" id="hora_fin">
                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">19:00</option>
                        <option value="19:30">19:30</option>
                        <option value="20:00">20:00</option>
                        <option value="20:30">20:30</option>
                        <option value="21:00">21:00</option>
                        <option value="21:30">21:30</option>
                        <option value="22:00">22:00</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="sala">Sala:</label>
                            <select class="custom-select" name="sala" id="sala">
                                <option selected>Selecciona una sala</option>
                                <option value="1">Sala 1</option>
                                <option value="2">Sala 2</option>
                                <option value="3">Sala 3</option>
                            </select>
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