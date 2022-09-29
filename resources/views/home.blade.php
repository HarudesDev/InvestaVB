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
            <h1 id="header-title"><b>Somos el puente entre startups y empresas innovadoras</b></h1>
            <p style="padding-top: 0.8rem; padding-bottom: 2.4rem; font-size: 1.75rem; font-weight: 100;">
                Creamos alianzas entre empresas y startups, impulsando el desarrollo de nuevas tecnologías y así contribuir de manera significativa al crecimiento del país.
            </p>
        </div>
        <div id="header-button-div" class="col-md-12 order-md-3">
            <button type="button" class="btn btn-primary" style="height: 4rem; padding-left: 1.6rem; padding-right: 1.6rem; font-size: 1.25rem; border-radius: 25px">Quiero empezar</button>
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-top: 2.4rem; padding-left: 12.5vw;">
        <li class="nav-item tab-nav">
            <a class="nav-link active" id="ecosystem-generation-tab" data-toggle="tab" href="#ecosystem-generation" role="tab" aria-controls="ecosystem-generation" aria-selected="true" style="height:100%; color: black; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Economy ecosistem icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Generación de</h4>
                <h4>Ecosistema</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="international-expantion-tab" data-toggle="tab" href="#international-expantion" role="tab" aria-controls="international-expantion" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/International expantion icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Expanción</h4>
                <h4>Internacional</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="financial-search-tab" data-toggle="tab" href="#financial-search" role="tab" aria-controls="financial-search" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Finalcial search icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Búsqueda de</h4>
                <h4>Financiamiento</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="knowledge-and-academy-tab" data-toggle="tab" href="#knowledge-and-academy" role="tab" aria-controls="knowledge-and-academy" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Knowledge and academy icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Conocimiento</h4>
                <h4>y Academia</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="consultory-tab" data-toggle="tab" href="#consultory" role="tab" aria-controls="consultory" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Consultory icon.png')}}" style="height: 8rem;">
                <br>
                <h4>Consultoria</h4>
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
                        <h3 style="1.5rem;">Nuevos Escenarios</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Ayudamos en la creación de nuevos ecosistemas de negocio, en donde convergen emprendedores, empresas, inversionistas y nuevo conocimiento, para el surgimiento y desarrollo de las futuras empresas. 
                        </p>
                    </div>
                    <div class="tab-pane fade" id="international-expantion" role="tabpanel" aria-labelledby="international-expantion-tab">
                        <h3 style="1.5rem;">Nuevos Mercados</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Guiamos en el proceso de extensión de operaciones en mercados fuera de su país de origen, mediante alianzas estratégicas y asesorías con el fin de incrementar su competitividad empresarial. 
                        </p>
                    </div>
                    <div class="tab-pane fade" id="financial-search" role="tabpanel" aria-labelledby="financial-search-tab">
                        <h3 style="1.5rem;">Nuevos Inversionistas</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Ayudamos en la búsqueda de financiamiento estatal o particular mediante el acompañamiento y asesoramiento correcto.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="knowledge-and-academy" role="tabpanel" aria-labelledby="knowledge-and-academy-tab">
                        <h3 style="1.5rem;">Nueva Información</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Brindamos información de vanguardia sobre el entorno de nuevas tecnologías, emprendimiento, expansión de mercado, nuevos conocimientos y estrategias empresariales.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="consultory" role="tabpanel" aria-labelledby="consultory-tab">
                        <h3 style="1.5rem;">Nueva Experiencia</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            Brindamos soluciones como asesorías y entrenamientos en mejora estratégica, capacidad innovadora, modelo de negocio, aprestamiento para emprendimiento y para la inversión, con el fin de impulsar a los nuevos emprendedores.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12" style="text-align: center; margin-top: 2vh;">
                        <img src="{{asset('images/Imagen emprendedor.png')}}" style="max-width:100%">
                        <h5 style="padding-top: 1.6rem; font-size: 1.75rem;">Emprendedor</h5>
                    </div>
                    <div class="col-md-4 col-sm-12" style="text-align: center; margin-top: 2vh;">
                        <img src="{{asset('images/Imagen empresa.png')}}" style="max-width:100%">
                        <h5 style="padding-top: 1.6rem; font-size: 1.75rem;">Empresa</h5>
                    </div>
                    <div class="col-md-4 col-sm-12" style="text-align: center; margin-top: 2vh;">
                        <img src="{{asset('images/Imagen inversionista.png')}}" style="max-width:100%">
                        <h5 style="padding-top: 1.6rem; font-size: 1.75rem;">Inversionista</h5>
                    </div>
                </div>
            </div>
            <div id="contact-card-col" class="col-md-5 col-sm-12">
                <a href="{{route('calendar')}}" style="color: black;">
                    <div class="card contact-card">
                        <div class="card-body" style="padding: 2vh;">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <h4>Agendemos una</h4>
                                    <h4>Reunión</h4>
                                    <p style="padding-top: 2.5vh; opacity: 60%;"><small>Estamos disponibles para conversar</small></p>
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
                                    <h4>Contáctanos</h4>
                                    <h4>directamente</h4>
                                    <p style="padding-top: 2.5vh; opacity: 60%;"><small>Estamos disponibles para conversar</small></p>
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
                <h2 style="font-size: 3rem; color: #000033;"><b>Generamos relaciones</b></h2>
                <h2 style="font-size: 3rem; color: #000033;"><b>entre los ecosistemas</b></h2>
                <br>
                <p style="font-size: 1.5rem; color: #00000B">
                    Sabemos que el crecimiento de un emprendimiento requiere de una innovación constante y alianzas estratégicas, por lo que creamos espacios de intercambio entre emprendedores y empresas.
                </p>
            </div>
        </div>
        <div class="row">
            <div id="left-ecosystem-card" class="col-md-4 col-sm-12">
                <div class="card-container">
                    <div class="card border-0" style="height: 100%;">
                        <div class="card-body ecosystem-card" style="padding: 2.4rem;">
                            <img src="{{asset('images/briefcase icon.png')}}" style="width:7.2rem; padding:1.6rem;">
                            <h3><b>OPORTUNIDADES</b></h3>
                            <p style="font-size: 1.25rem; padding-top: 1.6rem; line-height: 2rem;">
                                Conoce los nuevos proyectos que están generando las empresas, busca una solución rentable, genera nuevos socios y amplia tu cartera de clientes.
                            </p>
                            <br>
                            <br>
                            <button type="button" class="btn btn-outline-primary" style="height:3.25rem; width:8rem; font-size: 1.15rem;">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="center-ecosystem-card" class="col-md-4 col-sm-12">
                <div class="card-container">
                    <div class="card border-0" style="height: 100%;">
                        <div class="card-body ecosystem-card" style="padding: 2.4rem;">
                            <img src="{{asset('images/briefcase icon.png')}}" style="width:7.2rem; padding:1.6rem;">
                            <h3><b>DESAFÍOS</b></h3>
                            <p style="font-size: 1.25rem; padding-top: 1.6rem; line-height: 2rem;">
                                Conoce los nuevos retos que están atravesando las empresas, crea soluciones innovadoras, genera nuevos socios e impulsa tu emprendimiento.
                            </p>
                            <br>
                            <br>
                            <button type="button" class="btn btn-outline-primary" style="height:3.25rem; width:8rem; font-size: 1.15rem;">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="right-ecosystem-card" class="col-md-4 col-sm-12">
                <div class="card-container">
                    <div class="card border-0" style="height: 100%;">
                        <div class="card-body ecosystem-card" style="padding: 2.4rem;">
                            <img src="{{asset('images/briefcase icon.png')}}" style="width:7.2rem; padding:1.6rem;">
                            <h3><b>GESTIÓN DE ACUERDOS</b></h3>
                            <p style="font-size: 1.25rem; padding-top: 1.6rem; line-height: 2rem;">
                                Generamos confianza en los nuevos ecosistemas mediante acuerdos estándares que manejamos, relacionados a nuevas tecnologías.
                            </p>
                            <br>
                            <br>
                            <button type="button" class="btn btn-outline-primary" style="height:3.25rem; width:8rem; font-size: 1.15rem;">Leer más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Specialists -->
    <div style="padding-top: 4rem; padding-bottom: 4rem;">
        <p style="opacity: 0.3; font-size: 2.25rem;"><b>¿Cómo lo hacemos?</b></p>
        <h2 style="font-size: 3.5rem;">Nuestros especialistas a tu lado</h2>
        <div style="width: 25%; background-color: #31388E; height: 0.75rem;"></div>
        <p style="width: 70%; font-size: 1.25rem; padding-top: 2rem;">
            Somos un equipo con experiencia, diverso y amante de la innovación.
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
                                <h5 style="font-size: 2rem; margin-top: 1rem;">Javier Benavides</h5>
                                <p style="font-size: 1.25rem;">Experto en finanzas y su vinculación con la innovación y el emprendimiento</p>
                                <p style="font-size: 1.25rem;">Fundador de redes de ángeles y diseñador de fondos de inversión</p>
                                <p style="font-size: 1.25rem;">Director Perú de Inversionistas AP, gremio de venture capital apoyado por el Banco Interamericano de Desarrollo</p>
                                <p style="font-size: 1.25rem;">
                                    MBA del IE Business School.
                                    <br>
                                    Docente de postgrado en políticas públicas de innovación, finanzas e innovación empresarial
                                    <br>
                                    in: <a href="https://www.linkedin.com/in/benavidesjavier/">https://www.linkedin.com/in/benavidesjavier/</a>
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
                                <h5 style="font-size: 2rem; margin-top: 1rem;">Luis Salazar</h5>
                                <p style="font-size: 1.25rem;">Emprendedor, socio fundador de Investa VB</p>
                                <p style="font-size: 1.25rem;">Apasionado por la innovación abierta, con especial interés en tecnologías</p>
                                <p style="font-size: 1.25rem;">
                                    MBA por el Instituto de Empresa.
                                    <br>
                                    Especializado en modelos de negocio, estrategia e innovación. Docente de pre y post grado en emprendimiento e innovación. Speaker internacional en diversos eventos de innovación, startups y emprendimiento.
                                    <br>
                                    in: <a href="https://www.linkedin.com/in/salazarluis/">https://www.linkedin.com/in/salazarluis/</a>
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
                                <h5 style="font-size: 2rem; margin-top: 1rem;">Alejandro Bernaola</h5>
                                <p style="font-size: 1.25rem;">Experto en promoción de la Ciencia, Tecnología, Innovación y Emprendimiento desde los espacios público, privado y multilateral</p>
                                <p style="font-size: 1.25rem;">Impulsor de ecosistemas regionales de innovación con enfoque en desarrollo productivo y territorial/p>
                                <p style="font-size: 1.25rem;">Gerente de Alianzas en ACM Ventures, aceleradora agtech</p>
                                <p style="font-size: 1.25rem;">
                                    Ex Director General de Innovación en Produce.
                                    <br>
                                    Ponente en temas de Innovación y agtech en distintos eventos nacionales e internacionales.
                                    <br>
                                    in: <a href="https://www.linkedin.com/in/alejandrobernaola/">https://www.linkedin.com/in/alejandrobernaola/</a>
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