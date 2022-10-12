<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Investa VB</title>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('js/libs/wrunner-jquery.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/investa-app.css')}}">
        <link rel="stylesheet" href="{{asset('css/wrunner-default-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <style>
            #message-container{
                color: #000033;
                margin-top: 15%;
                margin-left: 30%;
                margin-right: 30%;
                text-align: center;
            }
            
            .btn-primary{
                background-color: #31388E;
                border-color: #31388E
            }

            .btn-outline-primary{
                border-color: #31388E;
                color: #31388E;
                border-radius: 20px;
                border-width: 2px;
            }

            .btn-primary:hover{
                background-color: #20277D;
                border-color: #20277D;
            }

            .btn-outline-primary:hover{
                border-color: #20277D;
                background-color: #20277D;
            }

            h1{
                font-size: 3rem;
            }

            p{
                font-size: 1.25rem;
            }

            #backBtn{
                border-radius: 20px;
                font-size: 1.5rem;
                width: 12.5rem;
            }

        </style>
    </head>
<body>
    <div id="message-container">
        <h1>
            <b>¡Felicitaciones!</b>
        </h1>
        <br>
        <br>
        <p>
            Felicidades, te has registrado
        </p>
        <p>
            <b>Recibirás un correo con la información para validar tu registro en nuestra plataforma</b>
        </p>
        <br>
        <p>
            Bienvenido(a)
        </p>
        <br>
        <a id="backBtn" class="btn btn-primary" href="{{route('marketplace')}}">
            Regresar
        </a>
    </div>
</body>
</html>
