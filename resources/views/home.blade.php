@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {
            #ecosystems-header{
                padding: 7.5vh; 
                width: 50%;
            }

            #left-ecosystem-card{
                padding-right: 3.2rem;
            }

            #center-ecosystem-card{
                padding-right: 1.6rem;
                padding-left: 1.6rem;
            }

            #right-ecosystem-card{
                padding-left: 3.2rem;
            }

            .card-container{
                height:100%;
            }

            #contact-card-col{
                position:relative;
                padding-left: 15vh;
            }

            #whatsapp-contact-card{
                position:absolute;
                bottom:0;
                width: 78%;
            }

            #header-container{
                padding-left: 8rem;
                padding-right: 8rem;
                padding-top: 8rem;
                max-width: 100%;
            }

            #header-title{
                font-size: 5rem;
            }
        }

        @media (max-width: 575px) {
            #ecosystems-header{

            }

            .card-container{
                padding-top: 2vh;
            }

            .contact-card{
                margin-top: 2vh;
            }

            #header-container{
                padding-left: 2vw;
                padding-right: 2vw;
                max-width: 100%;
            }

            #header-title{
                font-size: 3.25rem;
            }

            #header-button-div{
                padding-top: 2vh;
            }
        }
        
        #actors-articulation{
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .contact-card{
            border-radius: 0;
            width:100%;
            background-color: #fafafa;
            box-shadow: 0px 4px 0px #31388E;
        }

        .specialist-portrait{
            width: 166px;
            height: 175px;
            border-radius: 100px;
            align-self: center;
        }

        .specialist-card{
            box-shadow: 0px 10px 25px rgba(0, 0, 51, 0.08);
            height:100%;
            border-radius: 20px;
        }

        .ecosystem-card{
            box-shadow: 0px 10px 25px rgba(0, 0, 51, 0.08);
            border-radius: 20px;
        }

        .specialist-card-body{
            padding-left: 1.74rem;
            padding-right: 3.2rem;
            padding-bottom: 2.4rem;
        }

        #header-background{
            background-image: linear-gradient(#ffffff, #ededed);
        }

        .tab-nav{
            text-align: -webkit-center;
            margin-right: 3rem;
        }

        .container {
            margin: 0 auto!important;
            width: 95%;
            max-width:95% !important;
        }
    </style>
@endsection

@section('content')
<div id="header-background">
    <div id="header-container" class="row">
        <div class="col-md-6 col-sm-12 order-md-2">
            <img src="{{asset('images/Startups Image.png')}}" 
            style="filter: drop-shadow(0px 11.1346px 18.5576px rgba(2, 147, 52, 0.05)); border-radius: 213.531px 0px 218.785px 216px; max-width:90%; max-height: 40rem;">
        </div>
        <div class="col-md-6 col-sm-12 order-md-1" style="padding-right: 5vw;">
            <h1 id="header-title"><b>{{__('lang.Home-header-title')}}</b></h1>
            <p style="padding-top: 0.8rem; padding-bottom: 2.4rem; font-size: 1.75rem; font-weight: 100;">
                {{__('lang.Home-header-text')}}
            </p>
        </div>
        <div id="header-button-div" class="col-md-12 order-md-3">
            <a class="btn btn-primary" style="height: 4rem; padding-left: 1.6rem; padding-right: 1.6rem; font-size: 1.25rem; border-radius: 25px" href="{{route('marketplace')}}"><div style="padding-top:5%;">{{__('lang.I-want-to-start')}}</div></a>
        </div>
    </div>
    <div style="text-align: center; margin-top: 3rem;">
        <h2 style="margin-bottom: 3rem;">{{__('lang.At-Investa-VB-we-generate-Value:')}}</h2>
        <div class="row">
            <div class="col-md-3 col-sm-12"></div>
            <div class="col-md-2 col-sm-4">
                <h4>{{__('lang.More-than')}}</h4>
                <h1 style="color: #38519c;"><b>215</b></h1>
                <h4>{{__('lang.Startups-on-our-actual-portfolio')}}</h4>
            </div>
            <div class="col-md-2 col-sm-4">
                <h4>{{__('lang.More-than')}}</h4>
                <h1 style="color: #38519c;"><b>60</b></h1>
                <h4>{{__('lang.Experience-years-on-our-team')}}</h4>
            </div>
            <div class="col-md-2 col-sm-4">
                <h4>Visión{{__('lang.More-than')}}</h4>
                <h1 style="color: #38519c;"><b>360</b></h1>
                <h4>del Ecosistema Emprendedor de la Alianza del Pacífico y España{{__('lang.More-than')}}</h4>
            </div>
            <div class="col-md-3 col-sm-12"></div>
        </div>
    </div>
    <h2 style="margin-left: 10%; margin-top: 2rem;">
        <b>Nuestros servicios:{{__('lang.More-than')}}</b>
    </h2>
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-top: 2.4rem; padding-left: 12.5vw;">
        <li class="nav-item tab-nav">
            <a class="nav-link active" id="ecosystem-generation-tab" data-toggle="tab" href="#ecosystem-generation" role="tab" aria-controls="ecosystem-generation" aria-selected="true" style="height:100%; color: black; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Economy ecosistem icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Círculo de{{__('lang.More-than')}}</h4>
                <h4>Negocios{{__('lang.More-than')}}</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="international-expantion-tab" data-toggle="tab" href="#international-expantion" role="tab" aria-controls="international-expantion" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/International expantion icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Expansión{{__('lang.More-than')}}</h4>
                <h4>Internacional{{__('lang.More-than')}}</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="financial-search-tab" data-toggle="tab" href="#financial-search" role="tab" aria-controls="financial-search" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Finalcial search icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Búsqueda de{{__('lang.More-than')}}</h4>
                <h4>Financiamiento{{__('lang.More-than')}}</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="consultory-tab" data-toggle="tab" href="#consultory" role="tab" aria-controls="consultory" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Consultory icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Consultoria{{__('lang.More-than')}}</h4>
            </a>
        </li>
    </ul>
</div>
<div id="content">
    <!-- Actors articulation -->
    <div id="actors-articulation">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ecosystem-generation" role="tabpanel" aria-labelledby="ecosystem-generation-tab">
                        <h3 style="1.5rem;">Nuevas Soluciones{{__('lang.More-than')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Ayudamos en la creación de nuevos ecosistemas de negocio, en donde convergen emprendedores, empresas, inversionistas y nuevo conocimiento.{{__('lang.More-than')}}
                            <a href="{{route('services')}}">ver más...{{__('lang.More-than')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                    <div class="tab-pane fade" id="international-expantion" role="tabpanel" aria-labelledby="international-expantion-tab">
                        <h3 style="1.5rem;">Nuevos Mercados{{__('lang.More-than')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Ayudamos en el proceso de ingreso a nuevos mercados centralizados en la Alianza del Pacífico y con nuestra amplia red te conectamos con potenciales socios y clientes.{{__('lang.More-than')}}
                            <a href="{{route('services')}}">ver más...{{__('lang.More-than')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/3769138/pexels-photo-3769138.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                    <div class="tab-pane fade" id="financial-search" role="tabpanel" aria-labelledby="financial-search-tab">
                        <h3 style="1.5rem;">Nuevos Inversionistas{{__('lang.More-than')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Ayudamos en la búsqueda de recursos financieros para la implementación de nuevas ideas, lo hacemos mediante el acompañamiento y asesoramiento correcto.{{__('lang.More-than')}}
                            <a href="{{route('services')}}">ver más...{{__('lang.More-than')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                    <div class="tab-pane fade" id="consultory" role="tabpanel" aria-labelledby="consultory-tab">
                        <h3 style="1.5rem;">Nuevas Experiencias{{__('lang.More-than')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Guiamos y acompañamos en el proceso de desarrollo startups, mediante asesorías de mejora estratégica, capacidad innovadora, modelo de negocio y conocimiento del mercado.{{__('lang.More-than')}}
                            <a href="{{route('services')}}">ver más...{{__('lang.More-than')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/2977565/pexels-photo-2977565.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                </div>
            </div>
            <div id="contact-card-col" class="col-md-5 col-sm-12">
                <a href="{{route('calendar')}}" style="color: black;">
                    <div class="card contact-card">
                        <div class="card-body" style="padding: 2vh;">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <h4>Agendemos una{{__('lang.More-than')}}</h4>
                                    <h4>Reunión{{__('lang.More-than')}}</h4>
                                    <p style="padding-top: 2.5vh; opacity: 60%;"><small>Estamos disponibles para conversar{{__('lang.More-than')}}</small></p>
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
                <a href="#" style="color: black;">
                    <div id="whatsapp-contact-card" class="card contact-card">
                        <div class="card-body" style="padding: 2vh;">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <h4>Contáctanos{{__('lang.More-than')}}</h4>
                                    <h4>directamente{{__('lang.More-than')}}</h4>
                                    <p style="padding-top: 2.5vh; opacity: 60%;"><small>Estamos disponibles para conversar{{__('lang.More-than')}}</small></p>
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
    <hr>
    <!-- Ecosystems -->
    <div>
        <div style="text-align: -webkit-center;">
            <div id="ecosystems-header">
                <h2 style="font-size: 3rem; color: #000033;"><b>Generamos relaciones{{__('lang.More-than')}}</b></h2>
                <h2 style="font-size: 3rem; color: #000033;"><b>entre los ecosistemas{{__('lang.More-than')}}</b></h2>
                <br>
                <p style="font-size: 1.5rem; color: #00000B">
                    Sabemos que el crecimiento de un emprendimiento requiere de una innovación constante y alianzas estratégicas, por lo que creamos espacios de intercambio entre emprendedores y empresas.{{__('lang.More-than')}}
                </p>
            </div>
        </div>
        <div class="row">
            <div id="left-ecosystem-card" class="col-md-4 col-sm-12">
                <div class="card-container">
                    <div class="card border-0" style="height: 100%;">
                        <div class="card-body ecosystem-card" style="padding: 2.4rem;">
                            <img src="{{asset('images/briefcase icon.png')}}" style="width:7.2rem; padding:1.6rem;">
                            <h3><b>OPORTUNIDADES{{__('lang.More-than')}}</b></h3>
                            <p style="font-size: 1.25rem; padding-top: 1.6rem; line-height: 2rem;">
                                Conoce los nuevos proyectos que están generando las empresas, busca una solución rentable y genera nuevos socios.{{__('lang.More-than')}}
                            </p>
                            <br>
                            <br>
                            <button type="button" class="btn btn-outline-primary" style="height:3.25rem; width:8rem; font-size: 1.15rem;">Leer más{{__('lang.More-than')}}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="center-ecosystem-card" class="col-md-4 col-sm-12">
                <div class="card-container">
                    <div class="card border-0" style="height: 100%;">
                        <div class="card-body ecosystem-card" style="padding: 2.4rem;">
                            <img src="{{asset('images/briefcase icon.png')}}" style="width:7.2rem; padding:1.6rem;">
                            <h3><b>RETOS{{__('lang.More-than')}}</b></h3>
                            <p style="font-size: 1.25rem; padding-top: 1.6rem; line-height: 2rem;">
                                Conoce los nuevos desafíos que están atravesando las empresas, crea soluciones innovadoras, genera nuevos socios e impulsa tu emprendimiento.{{__('lang.More-than')}}
                            </p>
                            <br>
                            <br>
                            <button type="button" class="btn btn-outline-primary" style="height:3.25rem; width:8rem; font-size: 1.15rem;">Leer más{{__('lang.More-than')}}</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right-ecosystem-card" class="col-md-4 col-sm-12">
                <div class="card-container">
                    <div class="card border-0" style="height: 100%;">
                        <div class="card-body ecosystem-card" style="padding: 2.4rem;">
                            <img src="{{asset('images/briefcase icon.png')}}" style="width:7.2rem; padding:1.6rem;">
                            <h3><b>GESTIÓN DE ACUERDOS{{__('lang.More-than')}}</b></h3>
                            <p style="font-size: 1.25rem; padding-top: 1.6rem; line-height: 2rem;">
                                Creamos y acompañamos nuevos acuerdos bajo los estándares legales registrados en cada país y sector.{{__('lang.More-than')}}
                            </p>
                            <br>
                            <br>
                            <button type="button" class="btn btn-outline-primary" style="height:3.25rem; width:8rem; font-size: 1.15rem;">Leer más{{__('lang.More-than')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Specialists -->
    <div style="padding-top: 4rem; padding-bottom: 4rem;">
        <p style="opacity: 0.3; font-size: 2.25rem;"><b>¿Cómo lo hacemos?{{__('lang.More-than')}}</b></p>
        <h2 style="font-size: 3.5rem;">Nuestros especialistas a tu lado{{__('lang.More-than')}}</h2>
        <div style="width: 25%; background-color: #31388E; height: 0.75rem;"></div>
        <p style="width: 70%; font-size: 1.25rem; padding-top: 2rem;">
            Somos un equipo con experiencia y amante de la innovación.{{__('lang.More-than')}}
        </p>
        <div>
            <div class="row" style="padding-top: 4rem;">
                <div class="col-sm-12 col-md-4">
                    <div class="card-container">
                        <div class="card specialist-card border-0">
                            <br>
                            <img class="specialist-portrait" src="{{asset('images/Javier Benavides portrait.jpg')}}">
                            <br>
                            <div class="specialist-card-body">
                                <div style="width: 80%; background-color: #31388E; height: 0.4rem;"></div>
                                <h5 style="font-size: 2rem; margin-top: 1rem;">Javier Benavides{{__('lang.More-than')}}</h5>
                                <p style="font-size: 1.25rem;">Experto en finanzas y su vinculación con la innovación y el emprendimiento{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">Fundador de redes de ángeles y diseñador de fondos de inversión{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">Director Perú de Inversionistas AP, gremio de venture capital apoyado por el Banco Interamericano de Desarrollo{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">
                                    MBA del IE Business School.{{__('lang.More-than')}}
                                    <br>
                                    Docente de postgrado en políticas públicas de innovación, finanzas e innovación empresarial{{__('lang.More-than')}}
                                    <br>
                                    <a class="link-dark" href="https://www.linkedin.com/in/benavidesjavier/" target="_blank"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card-container">
                        <div class="card specialist-card border-0">
                            <br>
                            <img class="specialist-portrait" src="{{asset('images/Luis Salazar portrait.jpg')}}">
                            <br>
                            <div class="specialist-card-body">
                                <div style="width: 80%; background-color: #31388E; height: 0.4rem;"></div>
                                <h5 style="font-size: 2rem; margin-top: 1rem;">Luis Salazar{{__('lang.More-than')}}</h5>
                                <p style="font-size: 1.25rem;">Emprendedor, socio fundador de Investa VB{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">Apasionado por la innovación abierta, con especial interés en tecnologías{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">
                                    MBA por el Instituto de Empresa.{{__('lang.More-than')}}
                                    <br>
                                    Especializado en modelos de negocio, estrategia e innovación. Docente de pre y post grado en emprendimiento e innovación. Speaker internacional en diversos eventos de innovación, startups y emprendimiento.{{__('lang.More-than')}}
                                    <br>
                                    <a class="link-dark" href="https://www.linkedin.com/in/salazarluis/" target="_blank"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card-container">
                        <div class="card specialist-card border-0">
                            <br>
                            <img class="specialist-portrait" src="{{asset('images/Alejandro Bernaola portrait.jpg')}}">
                            <br>
                            <div class="specialist-card-body">
                                <div style="width: 80%; background-color: #31388E; height: 0.4rem;"></div>
                                <h5 style="font-size: 2rem; margin-top: 1rem;">Alejandro Bernaola{{__('lang.More-than')}}</h5>
                                <p style="font-size: 1.25rem;">Experto en promoción de la Ciencia, Tecnología, Innovación y Emprendimiento desde los espacios público, privado y multilateral{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">Impulsor de ecosistemas regionales de innovación con enfoque en desarrollo productivo y territorial{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">Gerente de Alianzas en ACM Ventures, aceleradora agtech{{__('lang.More-than')}}</p>
                                <p style="font-size: 1.25rem;">
                                    Ex Director General de Innovación en Produce.{{__('lang.More-than')}}
                                    <br>
                                    Ponente en temas de Innovación y agtech en distintos eventos nacionales e internacionales.{{__('lang.More-than')}}
                                    <br>
                                    <a class="link-dark" href="https://www.linkedin.com/in/alejandrobernaola/" target="_blank"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Subscription -->
<div style="background: rgba(0, 0, 51, 0.04);">
    @component('components.subscribe')
    @endcomponent
</div>
<script></script>
@endsection