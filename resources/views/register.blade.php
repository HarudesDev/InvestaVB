@extends('layouts.app')

@section('css')
    <style>
        .register-img{
            width: 80%;
            max-height: 45rem;
            object-fit: cover;
        }

        .form-control{
            background: #F2F1F1;
            border-radius: 23px;
            height: 2.4rem;
            padding-top: 2.5vh;
            padding-bottom: 2.5vh;
            padding-left: 3vh;
        }

        .form-group{
            padding-bottom: 3rem;
        }

        .form-check{
            padding-bottom: 2rem;
        }

        .form-check-label{
            font-size: 1.25rem;
            padding-left: 1vw;
        }

        .form-check-input{
            height: 1.25rem;
            width: 1.25rem;
        }
    </style>
@endsection

@section('content')
<div id="content">
    <h1 style="font-size: 4rem; padding-top: 5vh;"><b>Registro: USUARIO</b></h1>
    <br>
    <p style="font-size:  1.4rem; padding-left: 2.5vw;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur justo quis 
    </p>
    <div class="row" style="padding-bottom: 25vh;">
        <div class="col" style="padding-left: 6%; padding-right: 6%; padding-top: 6vh;">
            <form>
                <div class="form-container">
                    <div class="form-group">
                        <input type="text" class="form-control" id="form-name" aria-describedby="Nombres y Apellidos" placeholder="Nombres y Apellidos / Razón Social">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="form-document-type" aria-describedby="Tipo de documento" placeholder="Tipo de documento">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="form-document-number" aria-describedby="Número de documento" placeholder="Número de documento">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="form-document-number" aria-describedby="Email" placeholder="Email">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="info-treatment-authorize-check">
                        <label class="form-check-label" for="info-treatment-authorize-check">Autorizo el tratamiento de mi información.</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="conditions-accept-check">
                        <label class="form-check-label" for="conditions-accept-check">Acepto los términos y condiciones</label>
                    </div>
                </div>
                <br>
                <br>
                <button class="btn btn-primary mb-2 col-auto" style="height: 4rem; background-color: #010133; border-color: #010133; border-radius: 20px; width: 100%; font-size:  1.4rem;"> Registrarme </button>
            </form>
        </div>
        <div class="col" style="text-align: center;">
            <img alt="Emprendedor" src="{{asset('images/Imagen emprendedor.jpg')}}" class="register-img">
            <h4 style="padding-top: 2vh;">
                Emprendedor
            </h4>
        </div>
    </div>
</div>
@endsection