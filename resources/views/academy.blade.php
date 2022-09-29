@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {

        }

        @media (max-width: 575px) {
            .academy-card{
                margin-top: 2vh;
            }
        }
        
        .academy-card-text{
            padding: 2.75vw;
        }
        .academy-card-title{
            font-size: 2.4rem;
        }
        .academy-card-body{
            font-size: 2rem;
            color: #3a529d;
        }

    </style>
@endsection

@section('content')
<div id="content">
    <div class="row">
        <div class="col-md-6 col-sm-6 order-md-2" style="padding-left: 10%;">
            <div style="background-image: url('{{ asset('images/Image background.png')}}');">
                <img class="title-image" id="events-img" src="{{asset('images/academy-logo.jpg')}}" style="max-width:100%;">
            </div>
        </div>
        <div class="col-md-6 col-sm-6 order-md-1">
            <h1 style="font-size: 3.25rem; padding-top: 4rem;">Academia: blog</h1>
            <p style="padding-top: 0.8rem; padding-bottom: 2.4rem; font-size: 1.4rem;">
                Brindamos información de vanguardia sobre el entorno de nuevas tecnologías, emprendimiento, expansión de mercado, nuevos conocimientos y estrategias empresariales. 
            </p>
        </div>
    </div>
    <!-- Academy Cards-->
    <div class="row" style="margin-top: 2rem;">
        <div class="col-md-4 col-sm-12">
            <div class="academy-card">
                <div class="card">
                    <div class="card-body" style="padding: 0px;">
                        <img src="{{asset('images/academy-1.png')}}" style="width:100%;">
                        <div class="academy-card-text">
                            <p class="academy-card-title">
                                <b>Los retos del coworking en tiempos de pandemia</b>
                            </p>
                            <p class="academy-card-body">
                                <i>Covid-19, coworking, innovación, startups</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="academy-card">
                <div class="card">
                    <div class="card-body" style="padding: 0px;">
                        <img src="{{asset('images/academy-2.png')}}" style="width:100%;">
                        <div class="academy-card-text">
                            <p class="academy-card-title">
                                <b>Emprendedores Culinarios Peruanos Preparados para el Éxito</b>
                            </p>
                            <p class="academy-card-body">
                                <i>creative business, restaurantes</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="academy-card">
                <div class="card">
                    <div class="card-body" style="padding: 0px;">
                        <img src="{{asset('images/academy-3.png')}}" style="width:100%;">
                        <div class="academy-card-text">
                            <p class="academy-card-title">
                                <b>¿Qué podemos aprender de los emprendedores?</b>
                            </p>
                            <p class="academy-card-body">
                                <i>COVID-19, innovación, startups</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <p style="text-align: right; font-size: 2rem;"><a href="{{route('blog')}}" style="color:black">Ver más...</a></p>
</div>
<!-- News Subscription -->
<div style="background: rgba(0, 0, 51, 0.04);">
    @component('components.subscribe')
    @endcomponent
</div>
@endsection