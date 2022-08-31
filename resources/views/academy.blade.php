@extends('layouts.app')

@section('css')
    <style>
        .academy-card-text{
            padding: 2.75vw;
        }
        .academy-card-title{
            font-size: 3vh;
        }
        .academy-card-body{
            font-size: 2.5vh;
            color: #3a529d;
        }

    </style>
@endsection

@section('content')
<div id="content">
    <div class="row">
        <div class="col-6">
            <h1 style="font-size: 5vh; padding-top: 5vh;">Academia: blog</h1>
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
            <img class="title-image" id="events-img" src="{{asset('images/academy-logo.jpg')}}" style="max-width:100%;">
        </div>
    </div>
    <!-- Academy Cards-->
    <div class="row">
        <div class="col-4">
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
        <div class="col-4">
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
        <div class="col-4">
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
    <br>
    <p style="text-align: right; font-size: 2.5vh;">Ver más...</p>
</div>
<!-- News Subscription -->
<div style="background: rgba(0, 0, 51, 0.04);">
    @component('components.subscribe')
    @endcomponent
</div>
@endsection