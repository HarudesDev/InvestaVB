@extends('layouts.app')
    <style>
        #enterprise-img{
            border-radius: 213.531px 0px 218.785px 216px;
            filter: drop-shadow(0px 11.1346px 18.5576px rgba(2, 147, 52, 0.05));
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
<div class="page-content">
    <div class="row">
        <div class="col-6">
            <h1 style="font-size: 5vh; padding-top: 5vh;">¿Quienes somos?</h1>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.75vh;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur justo quis euismod vehicula. Quisque diam dui, imperdiet et hendrerit in, accumsan tempus erat.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.75vh;">
                Nullam ornare blandit urna, eu pulvinar elit faucibus eget. Sed justo mauris, ultricies eu urna at, gravida commodo mauris. Quisque ac felis ac sapien dictum gravida aliquet ac purus. Donec sit amet ex vel ex sollicitudin posuere at et metus. Duis sodales ligula nisi, molestie lacinia ex rhoncus vel.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.75vh;">
                Nullam ornare blandit urna, eu pulvinar elit faucibus eget. Sed justo mauris, ultricies eu urna at, gravida commodo mauris. Quisque ac felis ac sapien dictum gravida aliquet ac purus. Donec sit amet ex vel ex sollicitudin posuere at et metus. Duis sodales ligula nisi, molestie lacinia ex rhoncus vel.
            </p>
        </div>
        <div class="col-6" style="padding-left: 10%;">
            <img class="title-image" id="enterprise-img" src="{{asset('images/Imagen empresa.png')}}" style="max-width:100%;">
        </div>
    </div>

    <h2><b>Nuestros Aliados</b></h2>
    <p class="text-center" style="font-size: 2vh;"><b>Redes de Inversionistas, Aceleradoras y Concursos Mundiales</b></p>
    <br>
    <br>
    <!-- Carrusel -->
    <section class="awSlider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="width: 40vw;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{asset('images/Future Agro Challenge text.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('images/Future Agro Challenge text.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{asset('images/Future Agro Challenge text.png')}}" alt="Third slide">
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
    <!-- News Subscription -->
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