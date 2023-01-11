@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {
            #content-header{
                text-align: center;
                padding: 10vh;
                padding-left: 25vw;
                padding-right: 25vw;
            }

            #contact-footer{
                background: rgba(0, 0, 51, 0.04);
                padding-top: 5vh;
                max-width: 100%;
                margin-left: 0;
                padding-bottom: 8rem;
            }
        }

        @media (max-width: 575px) {
            #content-header{
                text-align: center;
            }

            #contact-footer{
                background: rgba(0, 0, 51, 0.04);
                padding-top: 5vh;
                max-width: 100%;
                margin-left: 0;
                padding-bottom: 40rem;
            }
        }

    </style>
@endsection

@section('content')
<div id="content">
    <h1 style="font-size: 3.25rem; padding-top: 5vh;">{{__('lang.Challenges')}}</h1>
        <div class="row">
            @foreach($challenges as $challenge)
            <div class="col-3" style="margin-bottom: 1rem; margin-top: 1rem;">
                <div class="card" style="padding: 0px; margin-right: 1rem; height: 100%;">
                    <div class="card-body" style="padding: 0px; min-height: 350px;">
                        @if($challenge->image_url)
                        <img src="{{'https://web.investavb.com/investaweb/public/images/'.$challenge->image_url}}" style="width:100%; height: 10rem;" alt="{{$challenge->problem}}">
                        @else
                        <img src="https://web.investavb.com/investaweb/public/images//Imagen reto.png" style="width:100%; height: 10rem; padding: 1rem;" alt="{{$challenge->problem}}">
                        @endif
                        <div style="padding: 2rem; text-align: center;">
                            <h3><b>{{$challenge->problem}}</b></h3>
                            <h5>
                                {{$challenge->problem_description}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
@endsection