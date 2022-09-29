<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Investa VB</title>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{asset('js/libs/wrunner-jquery.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/investa-app.css')}}">
        <link rel="stylesheet" href="{{asset('css/wrunner-default-theme.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <style>
            @media (min-width: 576px) {
                #content{
                    padding-left: 10vh;
                    padding-right: 10vh;
                    padding-top: 3vh;
                }

                #subscribe-banner{
                    padding: 10vh;
                    padding-right: 40vh;
                    padding-left: 40vh;
                }

                #subscribe-banner-button{
                    height: 4rem;
                    min-width: 9.75rem;
                    background-color: #010133;
                    border-color: #010133;
                    border-radius: 20px;
                    font-size: 1.25rem;
                }
            }
            @media (max-width: 575px) {
                #content{
                    padding-left: 5vw;
                    padding-right: 5vw;
                    padding-top: 3vh;
                }

                #subscribe-banner{
                    padding-bottom: 40rem;
                }

                #subscribe-banner-button{
                    height: 4rem;
                    width: 93%;
                    margin-left:3.5%;
                    background-color: #010133;
                    border-color: #010133;
                    border-radius: 20px;
                    font-size: 1.25rem;
                }

                #logo-container{
                    width:100%;
                }

                #navBar{
                    width: 100vw;
                }
            }
            body {
                font-family: 'Ubuntu', sans-serif;
            }
            #page-footer{
                position:absolute;
                left:0;
                bottom:0;
                width:100%;
                font-size: 1rem;
            }

            #page-container {
                position: relative;
                min-height: 100vh;
                padding-left:5vh;
            }

            #content-wrap {
                padding-bottom: 15rem;
            }

            .btn-primary{
                background-color: #31388E;
                border-color: #31388E
            }

            .btn-outline-primary{
                border-color: #31388E;
                color: #31388E;
                border-radius: 20px;
                border-width: 2px;
            }

            .btn-primary:hover{
                background-color: #20277D;
                border-color: #20277D;
            }

            .btn-outline-primary:hover{
                border-color: #20277D;
                background-color: #20277D;
            }

            .title-image{
                border-radius: 213.531px 0px 218.785px 216px;
            }

            .link-dark{
                color:#212529!important;
            }

            .link-dark:focus,.link-dark:hover{
                color:#1a1e21!important
            }

            .ms-3{
                margin-left:1rem!important
            }

            .link-light{
                color:#f8f9fa!important
            }

            .link-light:focus,.link-light:hover{
                color:#f9fafb!important
            }
        </style>
        @yield('css')
    </head>
<body>
    <div id="page-container" class="container-fluid p-0">
        <div id="content-wrap">
            <!-- Page Header -->
            <div id="mainNavigator" class="m-0 d-flex justify-content-between bg-grey1 flex-wrap" style="font-size: 1.25rem;">
                <nav id="navBar" class="navbar navbar-expand-lg navbar-light p-0 m-3 order-md-2">
                    <div id="logo-container" class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img id="" src="{{asset('images/Investa Logo.png')}}" alt="Investavb" style="max-width:15rem;">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-left: 3vw;">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <div class="col-12 d-flex justify-content-center">
                                <ul class="nav justify-content-lg-end">   
                                    <li class="nav-item dropdown d-table">
                                        <a class="nav-link dropdown-toggle d-table-cell align-middle link-dark" data-bs-toggle="dropdown" href="{{route('marketplace')}}" role="button" aria-expanded="false">
                                            Market Place
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"> </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item d-table">
                                        <a class="nav-link d-table-cell align-middle link-dark" href="{{route('academy')}}">Academia</a>
                                    </li>
                                    <li class="nav-item d-table">
                                        <a class="nav-link d-table-cell align-middle link-dark" href="{{route('events')}}">Eventos</a>
                                    </li>
                                    <li class="nav-item d-table">
                                        <a class="nav-link d-table-cell align-middle link-dark" href="{{route('contact')}}">Contacto</a>
                                    </li>
                                </ul> 
                            </div>   
                        </div>                 
                    </div>
                </nav>
                <div class="m-3 order-md-3">
                    <div class="d-flex justify-content-center">
                        <ul class="list-unstyled d-flex">
                            <li class="mx-3"><a class="link-dark" href="#"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a></li>   
                            <li class="mx-3"><a class="link-dark" href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                            <li class="mx-3"><a class="link-dark" href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>  
                        </ul>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary w-100" style="height: 3.rem; font-size: 1.25rem; margin-top: 3rem;">Ingresar</button>
                    </div>
                </div>
                <div class="m-3 order-md-1">
                    <p class="m-0"><small>¿Necesitas ayuda?</small></p>
                    <p class="m-0"><small><strong>info@investavb.com</strong></small></p><p>
                </p></div>
            </div>

        <!-- Page Content -->

            <main style="max-width: 100vw;">
                @yield('content')
            </main>
        </div>

        <!-- Page Footer -->
        <footer id="page-footer" class="p-5 bg-blue1 text-white">
            <div class="row justify-content-center g-5">
                <div class="col-12 col-lg-3 mb-4" style="text-align-last: center;">
                    <img src="{{asset('images/logo blanco.png')}}" style="width:213px; height:102px;" alt="Investavb">
                    <p class="text-center">Transfórmate y Escala</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-2 mb-4">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="{{route('home')}}" class="nav-link p-0 text-white">INICIO</a></li>
                        <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="{{route('aboutUs')}}" class="nav-link p-0 text-white">NOSOTROS</a></li>
                        <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="#" class="nav-link p-0 text-white">CASO DE ÉXITO</a></li>
                    </ul>
                </div>

            <div class="col-12 col-sm-6 col-lg-2 mb-4">
                    <ul class="nav flex-column gs-sm-5">
                        <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="#" class="nav-link p-0 text-white">SERVICIOS</a></li>
                        <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="{{route('calendar')}}" class="nav-link p-0 text-white">CALENDARIO DE EVENTOS</a></li>
                        <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="#" class="nav-link p-0 text-white">PROYECTOS</a></li>            </ul>
            </div>

            <div class="col-12 col-lg-2 mb-4">
                <ul class="nav flex-column">
                <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="#" class="nav-link p-0 text-white">SUSCRÍBETE</a></li>
                <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="#" class="nav-link p-0 text-white">CODIGO DE ÉTICA</a></li>
                <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="{{route('contact')}}" class="nav-link p-0 text-white">CONTÁCTANOS</a></li>
                </ul>
            </div>

            <div class="col-12 col-lg-3 mb-4">
                <div class="position-relative d-flex justify-content-center">
                    <p>CONÉCTATE CON INVESTAVB</p>
                </div>
                <div class="position-relative d-flex justify-content-center">
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-light" href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
                        <li class="ms-3"><a class="link-light" href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a></li>     
                    </ul>
                </div>
            </div>
            </div>
            
            <div class="border-top">
                <p class="text-center m-0">© Todos los derechos reservados - investavb</p>
                <p class="text-center m-0">Powered by Ingenia3Peru</p>
            </div>
        </footer>
    </div>
    @yield('scripts')
</body>
</html>
