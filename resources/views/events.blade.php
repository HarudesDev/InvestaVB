@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-6">
            <h1 style="font-size: 5vh; padding-top: 5vh;">Eventos</h1>
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
            <img class="title-image" id="events-img" src="{{asset('images/Events.jpg')}}" style="max-width:100%;">
        </div>
    </div>
    <!-- Event List -->
    <div style="padding-left: 20vw; padding-right: 20vw;">
        <div class="row" style="font-size: 2vh;">
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
            <div class="col-1">
                Nov
                <br>
                <b>23</b>
                <br>
                2020
            </div>
            <div class="col-11">
                23 noviembre, 2020 - 24 noviembre, 2020
                <br>
                <b>FINOVATE West 2020 (paid)</b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-1">
                Nov
                <br>
                <b>16</b>
                <br>
                2020
            </div>
            <div class="col-11">
                16 noviembre, 2020 - 18 noviembre, 2020
                <br>
                <b>CB Insights - Future of Fintech</b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-1">
                OCT
                <br>
                <b>27</b>
                <br>
                2020
            </div>
            <div class="col-11">
                27 octubre, 2020 @ 11:00 - 13:00 UTC-5
                <br>
                <b>Thousand Eyes on Me - The Leadership Gap & Përsonal Branding</b>
            </div>
        </div>
        <br>
    </div>
    <!-- News Subscription -->
    @component('components.subscribe')
    @endcomponent
</div>
@endsection