@extends('layouts.app')

@section('css')
    <style>
        .contact-input{
            background: #F2F1F1;
            border-radius: 23px;
        }

        .form-group{
            padding-bottom: 3vh;
        }

        .contact-text-input{
            height: 4.5vh;
        }

        .contact-card{
            border-radius: 0;
            width:100%;
            background-color: #fafafa;
            box-shadow: 0px 4px 0px #31388E;
        }

        .card-column{
            padding-left: 7.5vw;
            padding-right: 7.5vw;
        }
    </style>
@endsection

@section('content')
<div id="content">
    <div style="text-align: center; padding: 10vh; padding-left: 30vw; padding-right: 30vw;">
        <h1 style="font-size: 5vh;"><b>Contáctanos</b></h1>
        <br>
        <p style="font-size: 1.75vh;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur justo quis 
        </p>
        <br>
        <br>
        <form>
            <div class="form-group">
                <input type="text" class="form-control contact-input contact-text-input" id="contactNameInput" placeholder="Nombres y Apellidos">
            </div>
            <div class="form-group">
                <input type="email" class="form-control contact-input contact-text-input" id="contactEmailInput" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea class="form-control contact-input" id="exampleFormControlTextarea1" rows="6" placeholder="Déjanos tu pregunta"></textarea>
            </div>
            <button class="btn btn-primary mb-2 col-auto" style="height: 5vh; background-color: #010133; border-color: #010133; border-radius: 20px; width: 100%; font-size: 1.75vh;"> Enviar </button>
        </form>
    </div>
</div>
<div style="background: rgba(0, 0, 51, 0.04); padding-top: 5vh; padding-bottom: 5vh;">
    <div class="row">
        <div class="col-6 card-column">
            <div class="card contact-card">
                <div class="card-body" style="padding: 2vh;">
                    <div class="row">
                        <div class="col-5">
                            <h5>Agendemos una</h5>
                            <h5>Reunión</h5>
                            <p style="padding-top: 2.5vh;"><small>Estamos disponibles para conversar</small></p>
                        </div>
                        <div class="col-3">
                            
                        </div>
                        <div class="col-4">
                            <img src="{{asset('images/Calendar icon.png')}}" style="max-width: 80%; max-height: 80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 card-column">
            <div class="card contact-card">
                <div class="card-body" style="padding: 2vh;">
                    <div class="row">
                        <div class="col-5">
                            <h5>Contáctanos</h5>
                            <h5>directamente</h5>
                            <p style="padding-top: 2.5vh;"><small>Estamos disponibles para conversar</small></p>
                        </div>
                        <div class="col-3">
                            
                        </div>
                        <div class="col-4">
                            <img src="{{asset('images/Whatsapp icon.png')}}" style="max-width: 80%; max-height: 80%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection