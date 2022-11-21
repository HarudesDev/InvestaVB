@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {
            #contact-footer{
                background: rgba(0, 0, 51, 0.04);
                padding-top: 5vh;
                max-width: 100%;
                margin-left: 0;
                padding-bottom: 8rem;
            }

            .marketplace-img{
                width: 13vw;
                height: 13vw;
                object-fit: cover;
            }
        }

        @media (max-width: 575px) {
            #contact-footer{
                background: rgba(0, 0, 51, 0.04);
                padding-top: 5vh;
                max-width: 100%;
                margin-left: 0;
                padding-bottom: 40rem;
            }
            
            .marketplace-img{
                width: 300px;
                height: 300px;
                object-fit: cover;
                margin-top: 4vh;
            }
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

        .container {
            position: relative;
        }

        .image {
            display: block;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .container:hover .overlay {
            opacity: 1;
        }

        .overlay-text {
            overflow-y: auto;
            margin-left: 5%;
            margin-right: 5%;
            color: black;
            font-size: 1.15rem;
            position: absolute;
            height:100%;
        }


    </style>
@endsection

@section('content')
<div id="content">
    <div>
        <h1 style="font-size: 3.25rem;"><b>MarketPlace</b></h1>
        <br>
        <p style="font-size: 1.4rem; padding-left: 2.5vw; ">
            Contamos con un círculo de negocios que conecta a emprendedores con empresas para crear soluciones innovadoras a los retos actuales.
            <br>
            Si eres emprendedor puedes participar en un Reto.
        </p>
    </div>
    <div style="text-align:center;">
        <h2 style="padding-bottom:2.4rem; padding-top: 2.4rem; font-size: 2.4rem;"><b>Regístrate</b></h2>
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-2 col-sm-12">
                <a href="{{route('user.entrepreneur.register')}}">
                    <div class="container">
                        <img class="marketplace-img" src="{{asset('images/Imagen emprendedor.png')}}" alt="Emprendedor">
                        <div class="overlay">
                            <div class="overlay-text">
                                <br>
                                <div style="text-align:left;">
                                    Conecta tus ideas con empresas
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <h4 style="padding-top: 1.6rem;">Emprendedor</h4>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{route('user.enterprise.register')}}">
                    <div class="container">
                        <img class="marketplace-img" src="{{asset('images/Imagen empresa.png')}}" alt="Empresa">
                        <div class="overlay">
                            <div class="overlay-text">
                                <br>
                                <div style="text-align:left;">
                                    Conoce las nuevas soluciones 
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <h4 style="padding-top: 1.6rem;">Empresa</h4>
            </div>
            <div class="col-md-2 col-sm-12">
                <a href="{{route('user.portfolio.register')}}">
                    <div class="container">
                        <img class="marketplace-img" src="{{asset('images/Imagen inversionista.png')}}" alt="Inversionista">
                        <div class="overlay">
                            <div class="overlay-text">
                                <br>
                                <div style="text-align:left;">
                                    Conoce las nuevas tecnologías
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <h4 style="padding-top: 1.6rem;">Inversionista</h4>
            </div>
            <div class="col-md-3 col-sm-12">
            </div>
        </div>
    </div>
    <div style="text-align:center;">
        <h2 style="padding-bottom:2.4rem; padding-top: 2.4rem; font-size: 2.4rem;"><b>Participa</b></h2>
        <div class="row" style="padding-bottom: 6rem;">
            <div class="col-md-2 col-sm-12"></div>
            <div class="col-md-2 col-sm-12">
                <div class="container">
                    <img class="marketplace-img image" src="{{asset('images/Retos.jpg')}}" alt="Retos">
                    <div class="overlay">
                        <div class="overlay-text">
                            <br>
                            <div style="text-align:left;">
                                Nuevos desafíos de las empresas
                            </div>
                        </div>
                    </div>
                </div>
                <h4 style="padding-top: 1.6rem;">Retos</h4>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="container">
                    <img class="marketplace-img" src="{{asset('images/Comunidades.jpg')}}" alt="Comunidades">
                    <div class="overlay">
                        <div class="overlay-text">
                            <br>
                            <div style="text-align:left;">
                                Forma parte de nuestra comunidad
                            </div>
                        </div>
                    </div>
                </div>
                <h4 style="padding-top: 1.6rem;">Comunidades</h4>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="container">
                    <img class="marketplace-img" src="{{asset('images/Organismos.jpg')}}" alt="Organismos">
                    <div class="overlay">
                        <div class="overlay-text">
                            <br>
                            <div style="text-align:left;">
                                Forma parte de nuestro grupo de organizaciones
                            </div>
                        </div>
                    </div>
                </div>
                <h4 style="padding-top: 1.6rem;">Organismos</h4>
            </div>
            <div class="col-md-2 col-sm-12">
                <div class="container">
                    <img class="marketplace-img" src="{{asset('images/Proyectos.jpg')}}" alt="Proyectos">
                    <div class="overlay">
                        <div class="overlay-text">
                            <br>
                            <div style="text-align:left;">
                                Emprendimientos tradicionales
                            </div>
                        </div>
                    </div>
                </div>
                <h4 style="padding-top: 1.6rem;">Proyectos</h4>
            </div>
            <div class="col-md-2 col-sm-12">
            </div>
        </div>
    </div>
</div>
<!-- Contact footer -->
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
@endsection
