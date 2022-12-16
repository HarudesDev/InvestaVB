@extends('layouts.app')
    <style>
        @media (min-width: 576px) {
            #carouselExampleControls{
                width: 60rem;
            }
        }

        @media (max-width: 575px) {
            #carouselExampleControls{
                height: 100px;
            }
            
            .carousel-inner{
                height:inherit;
            }
        }


        section.awSlider .carousel{
            display:table;
            z-index:2;
            -moz-box-shadow: 0 0 4px #444;
                -webkit-box-shadow: 0 0 4px #444;
                box-shadow: 0 0 15px rgba(1,1,1,.5);
        }

        section.awSlider{
            margin:30px auto;
            padding:30px;
            position:relative;
            display:table;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        section.awSlider:hover > img{
            -ms-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.2);
            opacity:1;
        }

        section.awSlider img{
            pointer-events: none;
        }

        section.awSlider > img{
            position:absolute;
            top:30px;
            z-index:1;
            transition:all .3s;
            filter: blur(1.8vw);
            -webkit-filter: blur(2vw);
            -moz-filter: blur(2vw); 
            -o-filter: blur(2vw); 
            -ms-filter: blur(2vw);
            -ms-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
            opacity:.5;
        }

        .carousel-item{
            height: 25rem;
        }

        .carousel-content {
            position: absolute;
            top: 20%;
            left: 15%;
            right: 10%;
            z-index: 20;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
        }

        .carousel-img {
            max-width: 100%;            
            height: 25rem;            
        }


        .btn-outline-primary:hover{
            color: white;
        }
    </style>
@section('content')
<div class="page-content" id="content">
    <div class="row">
        <div class="col-md-6 col-sm-12 order-md-2" style="padding-left: 10%;">
            <div style="background-image: url('{{ asset('images/Image background.png')}}');">
                <img class="title-image" id="enterprise-img" src="{{asset('images/Imagen empresa.png')}}" style="max-width:100%;">
            </div>
        </div>
        <div class="col-md-6 col-sm-12 order-md-1">
            <h1 style="font-size: 3.25rem; padding-top: 5vh;"><b>¿Quienes Somos?</b></h1>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.4rem;">
                Somos una compañía con experiencia en el ecosistema emprendedor.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.4rem;">
                Impulsamos el crecimiento de emprendedores dedicados a la creación de nuevas tecnologías, mediante la generación de alianzas con empresas innovadoras, asesorías, internacionalización y exploración de financiamiento.
            </p>
        </div>
    </div>

    <h2><b>Nuestros Aliados</b></h2>
    <p class="text-center" style="font-size: 1.6rem;"><b>Redes de Inversionistas, Aceleradoras y Concursos Mundiales</b></p>
    <br>
    <br>
    <!--
        University Startup World Cup (Concurso Internacional)
        <br>
        BBCS Capital (Compañía peruana) | <a href="http://www.bbcscapital.com/" target="_blank">www.bbcscapital.com/</a>
        <br>
        DADNEO (Fondo de Inversión – Chile) | <a href="https://www.dadneo.com/" target="_blank">www.dadneo.com/</a>
        <br>
        WEMPO Academy (Compañía) | <a href="https://wempo-peru.org/" target="_blank">wempo-peru.org/</a>
        <br>
        Creame (Asociación colombiana) | <a href="https://www.creame.com.co/" target="_blank">www.creame.com.co/</a>
     -->
    <!-- Carrusel -->
    <section class="awSlider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                <li data-target="#carouselExampleControls" data-slide-to="3"></li>
                <li data-target="#carouselExampleControls" data-slide-to="4"></li>
                <li data-target="#carouselExampleControls" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-img" src="{{asset('images/CIDE PUCP.png')}}" alt="First slide" style="width: 100%;">
                    <div class="carousel-content" style="margin-left: 7.5rem;">
                        <p>
                        Se denomina ecosistema de emprendimiento e innovación a todas las organizaciones involucradas 
                        en dar soporte e impulsar al emprendedor, promoviendo la innovación y el desarrollo de nuevas 
                        propuestas que generen valor. Nosotros hemos estado por más de 20 años con ustedes.
                        </p>
                        <a class="btn btn-outline-primary" href="https://cide.pucp.edu.pe/" style="border-color: white; color:white;" target="_blank">Leer más</a>
                    </div>                    
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="{{asset('images/Usil Ventures.png')}}" alt="First slide" style="object-fit: cover; width: 100%;">
                    <div class="carousel-content">
                        <h3>
                            Usil Ventures
                        </h3>
                        <p>
                        Somos la incubadora y aceleradora del Grupo Educativo San Ignacio de Loyola respaldada por el 
                        programa Innóvate Perú, que tiene incorporado un modelo educativo emprendedor que fomenta la 
                        innovación, tecnología y sostenibilidad con la finalidad de crear startups globales.
                        </p>
                        <a class="btn btn-outline-primary" href="https://usilventures.com/" style="border-color: white; color:white;" target="_blank">Leer más</a>
                    </div>  
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="{{asset('images/CBNET.png')}}" alt="First slide" style="object-fit: cover;">
                    <div class="carousel-content" style="color: black; margin-left: 17.5rem;">
                        <h3>
                            Creative Business Network
                        </h3>
                        <p>
                        Creative Business Cup is an annual global competition, enrolling participants from more than 80 countries from all over the world.  
                        </p>
                        <a class="btn btn-outline-primary" href="https://cbnet.com/cup/" style="border-color: black;" target="_blank">Leer más</a>
                    </div>  
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="{{asset('images/FUTURE AGRO CHALLENGE.png')}}" alt="First slide" style="object-fit: cover;">
                    <div class="carousel-content" style="color: black; margin-left: 12.5rem;">
                        <h3>
                            Future Agro Challenge
                        </h3>
                        <p>
                        There’s an agricultural revolution underway. FAC anchors a dynamic community that takes root in each joining nation, 
                        enriching the global conversation with a transfer of ideas and solutions. Each nation and region brings a new perspective, 
                        fresh concepts, unique solutions borne of their own individual experiences in overcoming obstacles.
                        </p>
                        <a class="btn btn-outline-primary" href="https://facagro.com/" style="border-color: black;" target="_blank">Leer más</a>
                    </div>  
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="{{asset('images/gbsn.png')}}" alt="First slide" style="object-fit: cover;">
                    <div class="carousel-content" style="color: black; margin-left: 10rem;">
                        <h3>
                            Global Business School Network
                        </h3>
                        <p>
                        Our purpose is for the developing world to have the management and entrepreneurship talent it needs to generate prosperity.
                        </p>
                        <a class="btn btn-outline-primary" href="https://gbsn.org/" style="border-color: black;" target="_blank">Leer más</a>
                    </div>  
                </div>
                <div class="carousel-item">
                    <img class="carousel-img" src="{{asset('images/ACM.png')}}" alt="First slide" style="object-fit: cover;">
                    <div class="carousel-content" style="color: black; margin-left: 12.5rem;">
                        <h3>
                            Advertising Consulting Management
                        </h3>
                        <p>
                        ACM - Advertising, Consulting and Management Co, provides marketing, consulting, and company management 
                        services to select US companies and international clients. Additionally, ACM specializes in market 
                        research, property management, business advisory services, and project management.
                        </p>
                        <a class="btn btn-outline-primary" href="https://acmventures.com/" style="border-color: black;" target="_blank">Leer más</a>
                    </div>  
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
</div>
<!-- News Subscription -->
<div style="background: rgba(0, 0, 51, 0.04);">
    @component('components.subscribe')
    @endcomponent
</div>
@endsection
@section('scripts')
    <script>
        $('.carousel').carousel({
            pause: "hover",
            interval: 3000
        });
    </script>
@endsection