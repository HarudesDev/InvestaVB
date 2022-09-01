@extends('layouts.app')

@section('css')
    <style>
        .card-wrapper{
            padding-bottom: 1.5vh;
        }
        .card-header-text{
            font-size: 3vh;
            padding-left: 0.5vw;
            padding-right: 0.5vw;
            padding-bottom: 2vh;
        }
        .card-date-text{
            font-size: 1.5vh;
            color: #37519a;
            padding-left: 0.5vw;
            padding-right: 0.5vw;
            padding-bottom: 2vh;
        }
        .card-content-text{
            padding-left: 0.5vw;
            padding-right: 0.5vw;
            padding-bottom: 2vh;
            font-size: 1.5vh;
        }
        .blog-card{
            background-color: #edeef0;
            padding-bottom: 1vh;
        }
        .card-button{
            width: 100%;
            font-size: 1.25vh;
            height: 3vh;
            border-radius: 5px;
        }
        .filter-button{
            margin-left: 0.25vw;
            margin-right: 0.25vw;
            font-size: 1.25vh;
        }

    </style>
@endsection

@section('content')
<div id="content" style="padding-bottom: 10vh;">
    <h1 style="text-align: -webkit-center; padding-bottom: 8vh; color: rgba(0, 0, 51, 0.95)">Blog de Investa VB</h1>
    <div style="text-align-last: center;">
        <span>
            <a class="btn btn-primary filter-button"> ALL </a>
            <a class="btn btn-primary filter-button"> CREATIVE BUSINESS </a>
            <a class="btn btn-primary filter-button"> EDUCACIÓN </a>
            <a class="btn btn-primary filter-button"> INNOVACIÓN </a>
            <a class="btn btn-primary filter-button"> STARTUPS </a>
        </span>
    </div>
    <div class="row" style="padding-left: 15vw; padding-right: 15vw; padding-top: 3vh;">
        <div class="col-4">
            <div class="card-wrapper">
                <div class="card blog-card">
                    <div class="card-body">
                        <h2 class="card-header-text"><b> Los retos del coworking en tiempos de pandemia </b></h2>
                        <img src="{{asset('images/academy-1.png')}}" style="max-width: 100%; padding-bottom: 2vh;">
                        <h3 class="card-date-text"> <i class="fa fa-calendar" aria-hidden="true"></i><b> 6 mayo, 2022</b></h3>
                        <p class="card-content-text">
                            La pandemia actual ha obligado a las organizaciones a adaptarse recurriendo al teletrabajo. A lo lar...
                        </p>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <a class="btn btn-primary card-button"> READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="card blog-card">
                    <div class="card-body">
                        <h2 class="card-header-text"><b> El rol de la Mujer en el Emprendimiento </b></h2>
                        <img src="{{asset('images/Imagen empresa.png')}}" style="max-width: 100%; padding-bottom: 2vh;">
                        <h3 class="card-date-text"> <i class="fa fa-calendar" aria-hidden="true"></i><b> 6 mayo, 2022</b></h3>
                        <p class="card-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue, dolor vitae placerat tristique, purus turpis...
                        </p>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <a class="btn btn-primary card-button"> READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card-wrapper">
                <div class="card blog-card">
                    <div class="card-body">
                        <h2 class="card-header-text"><b> Emprendedores Culinarios Peruanos Preparados para el Éxito </b></h2>
                        <img src="{{asset('images/academy-2.png')}}" style="max-width: 100%; padding-bottom: 2vh;">
                        <h3 class="card-date-text"> <i class="fa fa-calendar" aria-hidden="true"></i><b> 2 diciembre, 2021</b></h3>
                        <p class="card-content-text">
                            Creative startups da a conocer un nuevo programa patrocinado por la Embajada de Estados Unidos en Pe...
                        </p>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <a class="btn btn-primary card-button"> READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="card blog-card">
                    <div class="card-body">
                        <h2 class="card-header-text"><b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </b></h2>
                        <img src="{{asset('images/academy-logo.jpg')}}" style="max-width: 100%; padding-bottom: 2vh;">
                        <h3 class="card-date-text"> <i class="fa fa-calendar" aria-hidden="true"></i><b> 2 diciembre, 2021</b></h3>
                        <p class="card-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue, dolor vitae placerat tristique, purus turpis maximus mauris...
                        </p>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <a class="btn btn-primary card-button"> READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card-wrapper">
                <div class="card blog-card">
                    <div class="card-body">
                        <h2 class="card-header-text"><b> ¿Qué podemos aprender de los emprendedores? </b></h2>
                        <img src="{{asset('images/academy-3.png')}}" style="max-width: 100%; padding-bottom: 2vh;">
                        <h3 class="card-date-text"> <i class="fa fa-calendar" aria-hidden="true"></i><b> 16 julio, 2021</b></h3>
                        <p class="card-content-text">
                            Saras Sarasvathy analiza los comportamientos de diversos emprendedores de éxito. Sobre la base d...
                        </p>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <a class="btn btn-primary card-button"> READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="card blog-card">
                    <div class="card-body">
                        <h2 class="card-header-text"><b> ¿Cómo financiarnos sin bancos, ángeles o VC? </b></h2>
                        <img src="{{asset('images/Imagen emprendedor.png')}}" style="max-width: 100%; padding-bottom: 2vh;">
                        <h3 class="card-date-text"> <i class="fa fa-calendar" aria-hidden="true"></i><b> 16 julio, 2021</b></h3>
                        <p class="card-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc congue, dolor vitae placerat tristique, purus turpis maximus...
                        </p>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col">
                                <a class="btn btn-primary card-button"> READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection