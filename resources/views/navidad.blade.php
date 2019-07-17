@extends('layouts.app')

@section('content')

<style>
.row{height: 100vh;}
body{background: url(http://desktopbackgrounds1.com/wp-content/uploads/2012/12/Red-Christmas-Background-5.jpg)}
</style>
    
    <div class="container">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="captura">
                <span class="font-weight-bold display-1 text-white">Faltan {{ $resultado }} días</span>
                <br>
                <span class="font-weight-bold display-1 text-white">para navidad</span>
            </div>
        </div>
    </div>

        <script>
            setTimeout(function() {
            window.location.href = "/";
            }, 10000);
        </script>

@endsection