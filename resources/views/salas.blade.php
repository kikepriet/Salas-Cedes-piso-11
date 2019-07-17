@extends('layouts/app')

@section('content')

<table class="table table-bordered">
            <thead>
                <tr class="bg-primary">
                <th scope="col" class="text-center">{{ $mesLetra }}</th>
                <th scope="col" class="text-center">Lunes {{ date("d", $lunes) }}</th>
                <th scope="col" class="text-center">Martes {{ date("d", $martes) }}</th>
                <th scope="col" class="text-center">Miércoles {{ date("d", $miercoles) }}</th>
                <th scope="col" class="text-center">Jueves {{ date("d", $jueves) }}</th>
                <th scope="col" class="text-center">Viernes {{ date("d", $viernes) }}</th>
                <th scope="col" class="text-center">Sábado {{ date("d", $sabado) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row" class="align-middle text-center">sala 1</th>
                <td>@foreach ($reservationsLu1S1 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsMa1S1 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsMi1S1 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsJu1S1 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsVi1S1 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsSa1S1 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                </tr>
                <tr>
                <th scope="row" class="align-middle text-center">sala 2</th>
                <td>@foreach ($reservationsLu1S2 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsMa1S2 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsMi1S2 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsJu1S2 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsVi1S2 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsSa1S2 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                </tr>
                <tr>
                <th scope="row" class="align-middle text-center">sala 3</th>
                <td>@foreach ($reservationsLu1S3 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsMa1S3 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsMi1S3 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsJu1S3 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsVi1S3 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                <td>@foreach ($reservationsSa1S3 as $reservation)<b>{{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }}</b> <br> {{ $reservation['evento'] }} <br> <small>{{ $reservation['responsable'] }}</small><br><br>@endforeach</td>
                </tr>
            </tbody>
        </table>
        {{-- <div class="salas">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-info">
                <th scope="col"></th>
                <th scope="col">Lunes {{ date("d", $lunesb) }}</th>
                <th scope="col">Martes {{ date("d", $martesb) }}</th>
                <th scope="col">Miércoles {{ date("d", $miercolesb) }}</th>
                <th scope="col">Jueves {{ date("d", $juevesb) }}</th>
                <th scope="col">Viernes {{ date("d", $viernesb) }}</th>
                <th scope="col">Sábado {{ date("d", $sabadob) }}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">sala 1</th>
                <td>@foreach ($reservationsLu2S1 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsMa2S1 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsMi2S1 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsJu2S1 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsVi2S1 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsSa2S1 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                </tr>
                <tr>
                <th scope="row">sala 2</th>
                <td>@foreach ($reservationsLu2S2 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsMa2S2 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsMi2S2 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsJu2S2 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsVi2S2 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsSa2S2 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                </tr>
                <tr>
                <th scope="row">sala 3</th>
                <td>@foreach ($reservationsLu2S3 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsMa2S3 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsMi2S3 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsJu2S3 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsVi2S3 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                <td>@foreach ($reservationsSa2S3 as $reservation){{ $reservation->hora_ini }} a {{ $reservation['hora_fin'] }} - {{ $reservation['evento'] }}<br>@endforeach</td>
                </tr>
            </tbody>
        </table> --}}
        <script>
            setTimeout(function() {
            window.location.href = "/navidad";
            }, 1800000);
        </script>
@endsection