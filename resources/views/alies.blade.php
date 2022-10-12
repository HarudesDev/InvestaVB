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
    <div class="row" style="margin-bottom: 4rem;">
        <div class="col-md-6 col-sm-6 order-md-2" style="padding-left: 10%;">
            <div style="background-image: url('{{ asset('images/Image background.png')}}');">
                <img class="title-image" id="events-img" src="{{asset('images/academy-logo.jpg')}}" style="max-width:100%;">
            </div>
        </div>
        <div class="col-md-6 col-sm-6 order-md-1">
            <h1 style="font-size: 3.25rem; padding-top: 4rem;">Aliados</h1>
            <p style="padding-top: 0.8rem; padding-bottom: 2.4rem; font-size: 1.4rem;">
                CIDE PUCP (Católica) | <a href="https://cide.pucp.edu.pe/" target="_blank">cide.pucp.edu.pe/</a>
                <br>
                USIL VENTURES (Usil) | <a href="https://usilventures.com/" target="_blank">usilventures.com/</a>
                <br>
                Creative Business Cup (Institución Internacional - Dinamarca) | <a href="https://cbnet.com/cup/" target="_blank">cbnet.com/cup/</a>
                <br>
                Future Agro Challenge (Concurso Internacional) | <a href="https://facagro.com/" target="_blank">facagro.com/</a>
                <br>
                Entrepreneurship World Cup (Concurso Internacional) | <a href="https://gbsn.org/" target="_blank">gbsn.org/</a>
                <br>
                University Startup World Cup (Concurso Internacional)
                <br>
                BBCS Capital (Compañía peruana) | <a href="http://www.bbcscapital.com/" target="_blank">www.bbcscapital.com/</a>
                <br>
                ACM Ventures (Compañía peruana) | <a href="https://acmventures.com/" target="_blank">acmventures.com/</a>
                <br>
                DADNEO (Fondo de Inversión – Chile) | <a href="https://www.dadneo.com/" target="_blank">www.dadneo.com/</a>
                <br>
                WEMPO Academy (Compañía) | <a href="https://wempo-peru.org/" target="_blank">wempo-peru.org/</a>
                <br>
                Creame (Asociación colombiana) | <a href="https://www.creame.com.co/" target="_blank">www.creame.com.co/</a>
            </p>
        </div>
    </div>
    
</div>
<!-- News Subscription -->
<div style="background: rgba(0, 0, 51, 0.04);">
    @component('components.subscribe')
    @endcomponent
</div>
@endsection