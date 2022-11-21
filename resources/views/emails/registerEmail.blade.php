<!DOCTYPE html>
<html>
<head>
    <title>Registro exitoso</title>
</head>
<body>
    <div style="margin-left: 30%; margin-right: 30%; border-color: black; border-width: 2px;">
        <img src="https://web.investavb.com/investa/public/images/Investa%20Logo.png" alt="Investavb" style="width:30%;">
        <h1 style="color: #31388e">
            Te damos la bienvenida al Círculo de Negocios!
        </h1>
        <br>
        <div>
            <p style="font-size: 1.25rem;">
                {{$details['name']}}, activa tu cuenta con la siguiente contraseña temporal: 
            </p>
        </div>
        <br>
        <br>
        <div class="d-flex justify-content-center">
            <div style="background-color: darkgreen; color:white; height: 3.5rem; text-align: center; padding-top: 1rem; font-size: 1.5rem; border-radius: 15px; margin-left: 20%; margin-right: 20%;">
                <b>{{$details['password']}}</b>
            </div>
        </div>
        <br>
        <br>
        <p style="font-size: 1.25rem;">
            Desde el sitio web da clic a <a href="https://web.investavb.com/investaweb/public/inicio" style="color: #31388e; text-decoration:none;"><b>Ingresar</b></a>
        </p>
    </div>
</body>
</html>