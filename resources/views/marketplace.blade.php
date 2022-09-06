@extends('layouts.app')

@section('css')
    <style>
        .marketplace-img{
            width: 13vw;
            height: 13vw;
            object-fit: cover;
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
    <div>
        <h1 style="font-size: 4rem;"><b>MarketPlace (tipos de actores económicos)</b></h1>
        <br>
        <p style="font-size: 1.4rem; padding-left: 2.5vw;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur justo quis 
        </p>
    </div>
    <div style="text-align:center;">
        <h2 style="padding-bottom:2.4rem; padding-top: 2.4rem; font-size: 2.4rem;"><b>Regístrate</b></h2>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2">
                <a href="{{route('register')}}"><img class="marketplace-img" src="{{asset('images/Imagen emprendedor.png')}}" alt="Emprendedor"></a>
                <h4 style="padding-top: 1.6rem;">Emprendedor</h4>
            </div>
            <div class="col-2">
                <a href="{{route('register')}}"><img class="marketplace-img" src="{{asset('images/Imagen empresa.png')}}" alt="Empresa"></a>
                <h4 style="padding-top: 1.6rem;">Empresa</h4>
            </div>
            <div class="col-2">
                <a href="{{route('register')}}"><img class="marketplace-img" src="{{asset('images/Imagen inversionista.png')}}" alt="Inversionista"></a>
                <h4 style="padding-top: 1.6rem;">Inversionista</h4>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
    <div style="text-align:center;">
        <h2 style="padding-bottom:2.4rem; padding-top: 2.4rem; font-size: 2.4rem;"><b>Participa</b></h2>
        <div class="row" style="padding-bottom: 6rem;">
            <div class="col-2"></div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Retos.jpg')}}" alt="Retos">
                <h4 style="padding-top: 1.6rem;">Retos</h4>
            </div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Comunidades.jpg')}}" alt="Comunidades">
                <h4 style="padding-top: 1.6rem;">Comunidades</h4>
            </div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Organismos.jpg')}}" alt="Organismos">
                <h4 style="padding-top: 1.6rem;">Organismos</h4>
            </div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Proyectos.jpg')}}" alt="Proyectos">
                <h4 style="padding-top: 1.6rem;">Proyectos</h4>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>
<div>
    <div class="row" style="background: rgba(0, 0, 51, 0.04); padding-top: 5vh; max-width: 100%; margin-left: 0;  padding-bottom: 8rem">
        <div class="col-6 card-column">
            <a href="{{route('calendar')}}" style="color: black;">
            <div class="card contact-card">
                <div class="card-body" style="padding: 1.6rem;">
                    <div class="row">
                        <div class="col-5">
                            <h5>Agendemos una</h5>
                            <h5>Reunión</h5>
                            <p style="padding-top: 2rem;"><small>Estamos disponibles para conversar</small></p>
                        </div>
                        <div class="col-3">
                            
                        </div>
                        <div class="col-4">
                            <img src="{{asset('images/Calendar icon.png')}}" style="max-width: 80%; max-height: 80%">
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-6 card-column">
            <div class="card contact-card">
                <div class="card-body" style="padding: 1.6rem;">
                    <div class="row">
                        <div class="col-5">
                            <h5>Contáctanos</h5>
                            <h5>directamente</h5>
                            <p style="padding-top: 2rem;"><small>Estamos disponibles para conversar</small></p>
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
