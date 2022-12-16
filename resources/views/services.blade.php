@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {
            #ecosystems-header{
                padding: 7.5vh; 
                width: 50%;
            }

            #left-ecosystem-card{
                padding-right: 3.2rem;
            }

            #center-ecosystem-card{
                padding-right: 1.6rem;
                padding-left: 1.6rem;
            }

            #right-ecosystem-card{
                padding-left: 3.2rem;
            }

            .card-container{
                height:100%;
            }

            #contact-card-col{
                position:relative;
                padding-left: 15vh;
            }

            #whatsapp-contact-card{
                position:absolute;
                bottom:0;
                width: 78%;
            }

            #header-container{
                padding-left: 8rem;
                padding-right: 8rem;
                padding-top: 8rem;
                max-width: 100%;
            }

            #header-title{
                font-size: 5rem;
            }
        }

        @media (max-width: 575px) {
            #ecosystems-header{

            }

            .card-container{
                padding-top: 2vh;
            }

            .contact-card{
                margin-top: 2vh;
            }

            #header-container{
                padding-left: 2vw;
                padding-right: 2vw;
                max-width: 100%;
            }

            #header-title{
                font-size: 3.25rem;
            }

            #header-button-div{
                padding-top: 2vh;
            }
        }
        
        #actors-articulation{
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        .contact-card{
            border-radius: 0;
            width:100%;
            background-color: #fafafa;
            box-shadow: 0px 4px 0px #31388E;
        }

        .specialist-portrait{
            width: 166px;
            height: 175px;
            border-radius: 100px;
            align-self: center;
        }

        .specialist-card{
            box-shadow: 0px 10px 25px rgba(0, 0, 51, 0.08);
            height:100%;
            border-radius: 20px;
        }

        .ecosystem-card{
            box-shadow: 0px 10px 25px rgba(0, 0, 51, 0.08);
            border-radius: 20px;
        }

        .specialist-card-body{
            padding-left: 1.74rem;
            padding-right: 3.2rem;
            padding-bottom: 2.4rem;
        }

        #header-background{
            background-image: linear-gradient(#ffffff, #ededed);
        }

        .tab-nav{
            text-align: -webkit-center;
            margin-right: 3rem;
        }

        .container {
            margin: 0 auto!important;
            width: 95%;
            max-width:95% !important;
        }
    </style>
@endsection

@section('content')
<div id="content">
    <!-- Actors articulation -->
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-top: 2.4rem; padding-left: 12.5vw;">
        <li class="nav-item tab-nav">
            <a class="nav-link active" id="ecosystem-generation-tab" data-toggle="tab" href="#ecosystem-generation" role="tab" aria-controls="ecosystem-generation" aria-selected="true" style="height:100%; color: black; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Economy ecosistem icon.png')}}" style="height: 8rem;">
                <br>
                <h4>{{__('lang.Business-circle-1')}}</h4>
                <h4>{{__('lang.Business-circle-2')}}</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="international-expantion-tab" data-toggle="tab" href="#international-expantion" role="tab" aria-controls="international-expantion" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/International expantion icon.png')}}" style="height: 8rem;">
                <br>
                <h4>{{__('lang.International-expantion-1')}}</h4>
                <h4>{{__('lang.International-expantion-2')}}</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="financial-search-tab" data-toggle="tab" href="#financial-search" role="tab" aria-controls="financial-search" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Finalcial search icon.png')}}" style="height: 8rem;">
                <br>
                <h4>{{__('lang.Financial-search-1')}}</h4>
                <h4>{{__('lang.Financial-search-2')}}</h4>
            </a>
        </li>
        <li class="nav-item tab-nav">
            <a class="nav-link" id="consultory-tab" data-toggle="tab" href="#consultory" role="tab" aria-controls="consultory" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 3.2rem; padding-right: 3.2rem;">
                <img src="{{asset('images/Consultory icon.png')}}" style="height: 8rem;">
                <br>
                <h4>{{__('lang.Consultory')}}</h4>
            </a>
        </li>
    </ul>
    <div id="actors-articulation">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="ecosystem-generation" role="tabpanel" aria-labelledby="ecosystem-generation-tab">
                        <h3 style="1.5rem;">{{__('lang.New-Solutions')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            {{__('lang.New-Solutions-text')}}
                            <a href="{{route('services')}}">{{__('lang.See-more...')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/3183197/pexels-photo-3183197.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                    <div class="tab-pane fade" id="international-expantion" role="tabpanel" aria-labelledby="international-expantion-tab">
                        <h3 style="1.5rem;">{{__('lang.New-Markets')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            {{__('lang.New-Markets-text')}}
                            <a href="{{route('services')}}">{{__('lang.See-more...')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/3769138/pexels-photo-3769138.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                    <div class="tab-pane fade" id="financial-search" role="tabpanel" aria-labelledby="financial-search-tab">
                        <h3 style="1.5rem;">{{__('lang.New-Investors')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            {{__('lang.New-Investors-text')}}
                            <a href="{{route('services')}}">{{__('lang.See-more...')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                    <div class="tab-pane fade" id="consultory" role="tabpanel" aria-labelledby="consultory-tab">
                        <h3 style="1.5rem;">{{__('lang.New-Experiences')}}</h3>
                        <p style="padding-top: 2.4rem; padding-bottom: 2.4rem; padding-right: 15%; opacity: 0.7; line-height: 2.5rem;">
                            {{__('lang.New-Experiences-text')}}
                            <a href="{{route('services')}}">{{__('lang.See-more...')}}</a>
                        </p>
                        <img src="https://images.pexels.com/photos/2977565/pexels-photo-2977565.jpeg" style="height: 15rem;" alt="Nuevos Mercados">
                    </div>
                </div>
            </div>
            <div id="contact-card-col" class="col-md-5 col-sm-12">
                <a href="{{route('calendar')}}" style="color: black;">
                    <div class="card contact-card">
                        <div class="card-body" style="padding: 2vh;">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <h4>{{__('lang.Schedule-Meeting-1')}}</h4>
                                    <h4>{{__('lang.Schedule-Meeting-2')}}</h4>
                                    <p style="padding-top: 2.5vh; opacity: 60%;"><small>{{__('lang.Schedule-Meeting-text')}}</small></p>
                                </div>
                                <div class="col-md-3 col-sm-1">
                                    
                                </div>
                                <div class="col-md-4 col-sm-5">
                                    <img src="{{asset('images/Calendar icon.png')}}" style="max-width: 80%; max-height: 80%">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" style="color: black;">
                    <div id="whatsapp-contact-card" class="card contact-card">
                        <div class="card-body" style="padding: 2vh;">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <h4>{{__('lang.Contact-us-1')}}</h4>
                                    <h4>{{__('lang.Contact-us-2')}}</h4>
                                    <p style="padding-top: 2.5vh; opacity: 60%;"><small>{{__('lang.Contact-us-text')}}</small></p>
                                </div>
                                <div class="col-md-3 col-sm-1">
                                    
                                </div>
                                <div class="col-md-4 col-sm-5">
                                    <img src="{{asset('images/Whatsapp icon.png')}}" style="max-width: 80%; max-height: 80%">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <hr>
</div>
<!-- News Subscription -->
<div style="background: rgba(0, 0, 51, 0.04);">
    @component('components.subscribe')
    @endcomponent
</div>
<script></script>
@endsection