@extends('layouts.app')
    <style>
        @media (min-width: 576px) {
            #carouselExampleControls{
                width: 40vw;
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
            height: 28vh;
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
                Las startups constantemente buscan crear alianzas estratégicas con empresas para el desarrollo de nuevas tecnologías. 
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.4rem;">
                Nosotros los acompañamos a generar estas alianzas mediante las diversas soluciones que manejamos.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.4rem;">
                Generación de ecosistemas, Expansión internacional, Busqueda de financiamiento, Conocimiento y Academia, Consultoría.
            </p>
        </div>
    </div>

    <h2><b>Nuestros Aliados</b></h2>
    <p class="text-center" style="font-size: 1.6rem;"><b>Redes de Inversionistas, Aceleradoras y Concursos Mundiales</b></p>
    <br>
    <br>
    <!-- Carrusel -->
    <section class="awSlider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid carousel-img" src="{{asset('images/Future Agro Challenge text.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid carousel-img" src="{{asset('images/Future Agro Challenge text.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid carousel-img" src="{{asset('images/Future Agro Challenge text.png')}}" alt="Third slide">
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