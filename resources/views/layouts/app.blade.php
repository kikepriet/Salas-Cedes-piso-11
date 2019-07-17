
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cedes Piso 11</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        *{
            margin:0;
            padding:0;
            border:0;
            
        }
        .salas{
            display: grid;
            grid-template-columns: 100vw;
            grid-template-rows: 97vh;
            
        }
        .table{
            height: 100%;
            
        }
        table thead tr{
            color: white;
        }
        table thead tr th:nth-child(1){
            width: 10%;
        }
        td{
           width: 14%;
           font-size: large;
        } 

        
    </style>
    
</head>
<body>
    <div class="salas">
        @yield('content')
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>