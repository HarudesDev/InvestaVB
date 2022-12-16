@extends('layouts.app')

@section('css')
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

        .carousel-content {
            position: absolute;
            top: 30%;
            left: 15%;
            right: 10%;
            z-index: 20;
            color: white;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
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
            <h1 style="font-size: 3.25rem; padding-top: 4rem;">Casos de Éxito</h1>
        </div>
    </div>
    
    
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