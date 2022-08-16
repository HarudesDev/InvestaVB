<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Investa VB</title>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="http://test.gestiona2.com/maquetas_avance/maquetas/public/js/libs/wrunner-jquery.js"></script>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="http://test.gestiona2.com/maquetas_avance/maquetas/public/css/investa-app.css">
        <link rel="stylesheet" href="http://test.gestiona2.com/maquetas_avance/maquetas/public/css/wrunner-default-theme.css">
        <style>
            #page-footer{
                position:absolute;
                left:0;
                bottom:0;
                width:100%;
                height:15rem;
            }

            #page-container {
                position: relative;
                min-height: 100vh;
                padding-left:5vh;
            }

            #content-wrap {
            padding-bottom: 15rem;
            }

            #content{
                padding-left: 10vh;
                padding-right: 10vh;
            }
        </style>
        @yield('css')
    </head>
<body>
    <div id="page-container" class="container-fluid p-0">
        <div id="content-wrap">
            <div id="mainNavigator" class="m-0 d-flex justify-content-between bg-grey1">
                <div class="m-3">
                    <p class="m-0"><small>¿Necesitas ayuda?</small></p>
                    <p class="m-0"><small><strong>info@investavb.com</strong></small></p><p>
                </p></div>
                <nav class="navbar navbar-expand-lg p-0 m-3">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <a class="navbar-brand" href="http://test.gestiona2.com/maquetas_avance/maquetas/public/peruvian">
                                <img src="http://test.gestiona2.com/maquetas_avance/maquetas/public/images/investa/logo.png" alt="Investavb" style="max-width:150px;">
                            </a>
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <ul class="nav justify-content-end">   
                                <li class="nav-item dropdown d-table">
                                    <a class="nav-link dropdown-toggle d-table-cell align-middle link-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                        Market Place
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"> </a></li>
                                    </ul>
                                </li>
                                <li class="nav-item d-table">
                                    <a class="nav-link d-table-cell align-middle link-dark" href="#">Academia</a>
                                </li>
                                <li class="nav-item d-table">
                                    <a class="nav-link d-table-cell align-middle link-dark" href="#">Eventos</a>
                                </li>
                                <li class="nav-item d-table">
                                    <a class="nav-link d-table-cell align-middle link-dark" href="#">Contacto</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </nav>
                <div class="m-3">
                    <div class="d-flex justify-content-center">
                        <ul class="list-unstyled d-flex">
                            <li class="mx-3"><a class="link-dark" href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a></li>
                            <li class="mx-3"><a class="link-dark" href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
                            <li class="mx-3"><a class="link-dark" href="#"><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></a></li>     
                        </ul>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-outline-primary rounded-4 w-100">Ingresar</button>
                    </div>
                </div>
            </div>

            <main id="content" class="py-4" style="max-width: 190vh;">
                @yield('content')
            </main>
        </div>

        <footer id="page-footer" class="p-5 bg-blue1 text-white">
            <div class="row justify-content-center g-5">
                <div class="col-12 col-lg-3 mb-4" style="text-align-last: center;">
                    <img src="/images/logo blanco.png" style="width:213px; height:102px;">
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
                        <li class="nav-item mb-2 ms-5 ms-sm-0"><a href="{{route('events')}}" class="nav-link p-0 text-white">CALENDARIO DE EVENTOS</a></li>
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
</body>
</html>
