@extends('layouts.app')

@section('css')
    <style>
        .marketplace-img{
            width: 13vw;
            height: 13vw;
            object-fit: cover;
        }
    </style>
@endsection

@section('content')
<div id="content">
    <div>
        <h1 style="font-size: 5vh;"><b>MarketPlace (tipos de actores económicos)</b></h1>
        <br>
        <p style="font-size: 1.75vh; padding-left: 2.5vw;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur justo quis 
        </p>
    </div>
    <div style="text-align:center;">
        <h2 style="padding-bottom:3vh; padding-top: 3vh; font-size: 3vh;"><b>Regístrate</b></h2>
        <div class="row" style="max-width:170vh;">
            <div class="col-3"></div>
            <div class="col-2">
                <a href="{{route('register')}}"><img class="marketplace-img" src="{{asset('images/Imagen emprendedor.png')}}" alt="Emprendedor"></a>
                <h4 style="padding-top: 2vh;">Emprendedor</h4>
            </div>
            <div class="col-2">
                <a href="{{route('register')}}"><img class="marketplace-img" src="{{asset('images/Imagen empresa.png')}}" alt="Empresa"></a>
                <h4 style="padding-top: 2vh;">Empresa</h4>
            </div>
            <div class="col-2">
                <a href="{{route('register')}}"><img class="marketplace-img" src="{{asset('images/Imagen inversionista.png')}}" alt="Inversionista"></a>
                <h4 style="padding-top: 2vh;">Inversionista</h4>
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
    <div style="text-align:center;">
        <h2 style="padding-bottom:3vh; padding-top: 3vh; font-size: 3vh;"><b>Participa</b></h2>
        <div class="row" style="max-width:170vh; padding-bottom: 7.5vh;">
            <div class="col-2"></div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Retos.jpg')}}" alt="Retos">
                <h4 style="padding-top: 2vh;">Retos</h4>
            </div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Comunidades.jpg')}}" alt="Comunidades">
                <h4 style="padding-top: 2vh;">Comunidades</h4>
            </div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Organismos.jpg')}}" alt="Organismos">
                <h4 style="padding-top: 2vh;">Organismos</h4>
            </div>
            <div class="col-2">
                <img class="marketplace-img" src="{{asset('images/Proyectos.jpg')}}" alt="Proyectos">
                <h4 style="padding-top: 2vh;">Proyectos</h4>
            </div>
            <div class="col-2">
            </div>
        </div>
    </div>
</div>

@endsection
