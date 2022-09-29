@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {
            #event-list-container{
                padding-left: 20vw;
                padding-right: 20vw;
                padding-bottom: 5vh;
            }

        }

        @media (max-width: 575px) {
            #event-list-container{

            }

            .event-date{
                display:none;
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
    </style>
@endsection

@section('content')
<div id="content">
    <div class="row">
        <div class="col-md-6 col-sm-12 order-md-2" style="padding-left: 10%;">
            <img class="title-image" id="events-img" src="{{asset('images/Events.jpg')}}" style="max-width:100%;">
        </div>
        <div class="col-md-6 col-sm-12 order-md-1">
            <h1 style="font-size: 3.25rem; padding-top: 5vh;">Eventos</h1>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.4rem;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur justo quis euismod vehicula. Quisque diam dui, imperdiet et hendrerit in, accumsan tempus erat.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.4rem;">
                Nullam ornare blandit urna, eu pulvinar elit faucibus eget. Sed justo mauris, ultricies eu urna at, gravida commodo mauris. Quisque ac felis ac sapien dictum gravida aliquet ac purus. Donec sit amet ex vel ex sollicitudin posuere at et metus. Duis sodales ligula nisi, molestie lacinia ex rhoncus vel.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.4rem;">
                Nullam ornare blandit urna, eu pulvinar elit faucibus eget. Sed justo mauris, ultricies eu urna at, gravida commodo mauris. Quisque ac felis ac sapien dictum gravida aliquet ac purus. Donec sit amet ex vel ex sollicitudin posuere at et metus. Duis sodales ligula nisi, molestie lacinia ex rhoncus vel.
            </p>
        </div>
    </div>
    <br><br>
    <!-- Event List -->
    <div id="event-list-container">
        <div class="row" style="font-size: 1.6rem;">
            <div class="col">
                <a class="nav-link dropdown-toggle d-table-cell align-middle link-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                    A PARTIR DE AHORA
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"> </a></li>
                </ul>
            </div>
            <div class="col" style="text-align: right;">
                <i class="fa fa-search" aria-hidden="true"></i>
                <i class="fa fa-list" aria-hidden="true"></i>
            </div>
        </div>
        <br>
        <h3><b> Últimos Eventos Pasados </b></h3>
        <br>
        <br>
        <div class="row">
            <div class="col-md-1 col-sm-2 event-date" style="font-size: 1.25rem;">
                NOV
                <br>
                <b style="font-size: 1.6rem;">23</b>
                <br>
                2020
            </div>
            <div class="col-md-11 col-sm-10" style="font-size: 1.25rem;">
                23 noviembre, 2020 - 24 noviembre, 2020
                <br><br>
                <b style="font-size: 1.6rem;">FINOVATE West 2020 (paid)</b>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-1 col-sm-2 event-date" style="font-size: 1.25rem;">
                NOV
                <br>
                <b style="font-size: 1.6rem;">16</b>
                <br>
                2020
            </div>
            <div class="col-md-11 col-sm-10" style="font-size: 1.25rem;">
                16 noviembre, 2020 - 18 noviembre, 2020
                <br><br>
                <b style="font-size: 1.6rem;">CB Insights - Future of Fintech</b>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-1 col-sm-2 event-date" style="font-size: 1.25rem;">
                OCT
                <br>
                <b style="font-size: 1.6rem;">27</b>
                <br>
                2020
            </div>
            <div class="col-md-11 col-sm-10" style="font-size: 1.25rem;">
                27 octubre, 2020 @ 11:00 - 13:00 UTC-5
                <br><br>
                <b style="font-size: 1.6rem;">Thousand Eyes on Me - The Leadership Gap & Përsonal Branding</b>
            </div>
        </div>
        <br>
    </div>
</div>
<!-- News Subscription -->
<div style="background: rgba(0, 0, 51, 0.04);">
    @component('components.subscribe')
    @endcomponent
</div>
@endsection