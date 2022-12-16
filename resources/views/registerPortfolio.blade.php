@extends('layouts.app')

@section('css')
    <style>
        @media (min-width: 576px) {
            
        }

        @media (max-width: 575px) {
            #register-form{
                padding-bottom: 30rem;
            }
        }

        .register-img{
            width: 80%;
            max-height: 45rem;
            object-fit: cover;
        }

        .form-control{
            background: #F2F1F1;
            border-radius: 23px;
            height: 4rem;
            padding-left: 3vh;
        }

        .form-group{
            padding-bottom: 3rem;
        }

        .form-check{
            padding-bottom: 2rem;
        }

        .form-check-label{
            font-size: 1.25rem;
            padding-left: 1vw;
        }

        .form-check-input{
            height: 1.25rem;
            width: 1.25rem;
        }
    </style>
@endsection

@section('content')
<div id="content">
    <h1 style="font-size: 3.25rem; padding-top: 5vh;"><b>{{__('lang.Register: Investor')}}</b></h1>
    <br>
    <p style="font-size:  1.4rem; padding-left: 2.5vw;">
        {{__('lang.Investor-register-header')}}
    </p>
    <div class="row" style="padding-bottom: 25vh;">
        <div class="col-md-5 col-sm-12 order-md-2" style="text-align: center;">
            <img alt="Inversionista" src="{{asset('images/Imagen inversionista.jpg')}}" class="register-img">
            <h4 style="padding-top: 2vh;">
                {{__('lang.Investor')}}
            </h4>
        </div>
        <div class="col-md-7 col-sm-12 order-md-1" style="padding-left: 6%; padding-right: 6%; padding-top: 6vh;">
            <form id="register-form" action="{{route('user.portfolio.store')}}" method="POST">
                @csrf
                <div class="form-container">
                    <div class="form-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="form-name" aria-describedby="Nombres" placeholder="{{__('lang.Names')}}" name="name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('lastname') is-invalid @enderror" id="form-lastname" aria-describedby="Apellidos" placeholder="{{__('lang.Surnames')}}" name="lastname">
                        @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select class="form-control @error('document-type') is-invalid @enderror" id="input-document-type" name="document-type">
                            @foreach($document_types as $document_type)
                                <option value="{{$document_type->id}}">
                                    {{$document_type->short_name}}
                                </option>
                            @endforeach
                        </select>
                        @error('document-type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('document-number') is-invalid @enderror" id="form-document-number" aria-describedby="Número de documento" placeholder="{{__('lang.Document-number')}}" name="document-number">
                        @error('document-number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="form-email" aria-describedby="Email" placeholder="{{__('lang.Corporate-email')}}" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="info-treatment-authorize-check">
                        <label class="form-check-label" for="info-treatment-authorize-check">{{__('lang.Authorize-info')}}</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="conditions-accept-check">
                        <label class="form-check-label" for="conditions-accept-check">{{__('lang.User-agreement')}}</label>
                    </div>
                </div>
                <br>
                <br>
                <button id="register-button" class="btn btn-primary mb-2 col-auto" style="height: 4rem; background-color: #010133; border-color: #010133; border-radius: 20px; width: 100%; font-size:  1.4rem;" type="submit"> {{__('lang.Register-self')}} </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{asset('js/register.js')}}"></script>
@endsection