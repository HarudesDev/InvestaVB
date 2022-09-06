@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {
            #content-header{
                text-align: center;
                padding: 10vh;
                padding-left: 25vw;
                padding-right: 25vw;
            }

            #contact-footer{
                background: rgba(0, 0, 51, 0.04);
                padding-top: 5vh;
                max-width: 100%;
                margin-left: 0;
                padding-bottom: 8rem;
            }
        }

        @media (max-width: 575px) {
            #content-header{
                text-align: center;
            }

            #contact-footer{
                background: rgba(0, 0, 51, 0.04);
                padding-top: 5vh;
                max-width: 100%;
                margin-left: 0;
                padding-bottom: 80vh;
            }
        }

        .contact-input{
            background: #F2F1F1;
            border-radius: 23px;
        }

        .form-group{
            padding-bottom: 3vh;
        }

        .contact-text-input{
            height: 3.6rem;
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
            padding-top: 2vh;
        }
    </style>
@endsection

@section('content')
<div id="content">
    <div id="content-header">
        <h1 style="font-size: 4rem;"><b>Contáctanos</b></h1>
        <br>
        <p style="font-size: 1.4rem;">
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
            <button class="btn btn-primary mb-2 col-auto" style="height: 4rem; background-color: #010133; border-color: #010133; border-radius: 20px; width: 100%; font-size: 1.4rem;"> Enviar </button>
        </form>
    </div>
</div>
<!-- Contact footer -->
<div>
    <div class="row" id="contact-footer">
        <div class="col-md-6 col-sm-12 card-column">
            <a href="{{route('calendar')}}" style="color: black;">
                <div class="card contact-card">
                    <div class="card-body" style="padding: 1.6rem;">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <h5>Agendemos una</h5>
                                <h5>Reunión</h5>
                                <p style="padding-top: 2rem;"><small>Estamos disponibles para conversar</small></p>
                            </div>
                            <div class="col-md-3 col-sm-1">
                                
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <img src="{{asset('images/Calendar icon.png')}}" style="max-width: 80%; max-height: 80%">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-sm-12 card-column">
            <a href="#" style="color: black;">
                <div class="card contact-card">
                    <div class="card-body" style="padding: 1.6rem;">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <h5>Contáctanos</h5>
                                <h5>directamente</h5>
                                <p style="padding-top: 2rem;"><small>Estamos disponibles para conversar</small></p>
                            </div>
                            <div class="col-md-3 col-sm-1">
                                
                            </div>
                            <div class="col-md-4 col-sm-5">
                                <img src="{{asset('images/Whatsapp icon.png')}}" style="max-width: 80%; max-height: 80%">
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection