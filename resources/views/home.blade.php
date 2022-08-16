@extends('layouts.app')

@section('css')
    <style>
        #actors-articulation{
            padding-top: 5vh;
            padding-bottom: 5vh;
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
            padding-left: 1.75vh;
            padding-right: 4vh;
            padding-bottom: 3vh;
        }
    </style>
@endsection

@section('content')
<div>
    <div class="row">
        <div class="col">
            <h1 style="font-size: 7.5vh;">Somos el puente entre startups y empresas innovadoras</h1>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.75vh;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris convallis mollis sem, a cursus ipsum scelerisque eu. Quisque blandit sit amet ipsum in consequat. Phasellus auctor, lacus sed vulputate pellentesque, lorem lectus consequat elit, nec vestibulum odio ante non ante. Sed id lectus eros. Sed sollicitudin dictum neque id dignissim.
            </p>
            <button type="button" class="btn btn-primary rounded-5" style="height: 5vh; padding-left: 2vh; padding-right: 2vh; font-size: 1.5vh;">Quiero empezar</button>
        </div>
        <div class="col">
            <img width="1009" height="610" src="/images/Startups Image.png"
            style="filter: drop-shadow(0px 11.1346px 18.5576px rgba(2, 147, 52, 0.05)); border-radius: 213.531px 0px 218.785px 216px">
        </div>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-top: 3vh;">
        <li class="nav-item" style="text-align: -webkit-center;">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="height:100%; color: black; padding: 2hv; padding-left: 4vh; padding-right: 4vh;">
                <img src="/images/Economy ecosistem icon.png" style="height: 10vh;">
                <br>
                <h4>Generación de</h4>
                <h4>Ecosistema</h4>
            </a>
        </li>
        <li class="nav-item" style="text-align: -webkit-center;">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 4vh; padding-right: 4vh;">
                <img src="/images/International expantion icon.png" style="height: 10vh;">
                <br>
                <h4>Expanción</h4>
                <h4>Internacional</h4>
            </a>
        </li>
        <li class="nav-item" style="text-align: -webkit-center;">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 4vh; padding-right: 4vh;">
                <img src="/images/Finalcial search icon.png" style="height: 10vh;">
                <br>
                <h4>Búsqueda de</h4>
                <h4>Financiamiento</h4>
            </a>
        </li>
        <li class="nav-item" style="text-align: -webkit-center;">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 4vh; padding-right: 4vh;">
                <img src="/images/Knowledge and academy icon.png" style="height: 10vh;">
                <br>
                <h4>Conocimiento</h4>
                <h4>y Academia</h4>
            </a>
        </li>
        <li class="nav-item" style="text-align: -webkit-center;">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="height:100%; color: black;; padding: 2hv; padding-left: 4vh; padding-right: 4vh;">
                <img src="/images/Consultory icon.png" style="height: 10vh;">
                <br>
                <h4>Consultoria</h4>
            </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
    </div>
    <!-- Actors articulation -->
    <div id="actors-articulation">
        <div class="row">
            <div class="col-7">
                <h3>Articulación entre actores</h3>
                <p style="padding-top: 3vh; padding-bottom: 3vh; padding-right: 15%; opacity: 0.7;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim mi facilisis nisl scelerisque sodales. Integer nisi nunc, interdum non nibh id, lobortis volutpat nisi. Cras convallis lobortis fermentum. Aliquam in orci nulla. Nulla sit.
                </p>
                <div class="row">
                    <div class="col-4" style="text-align: center;">
                        <img src="/images/Imagen emprendedor.png" style="max-width:100%">
                        <h5 style="padding-top: 2vh; font-size: 2vh;">Emprendedor</h5>
                    </div>
                    <div class="col-4" style="text-align: center;">
                        <img src="/images/Imagen empresa.png" style="max-width:100%">
                        <h5 style="padding-top: 2vh; font-size: 2vh;">Empresa</h5>
                    </div>
                    <div class="col-4" style="text-align: center;">
                        <img src="/images/Imagen inversionista.png" style="max-width:100%">
                        <h5 style="padding-top: 2vh; font-size: 2vh;">Inversionista</h5>
                    </div>
                </div>
            </div>
            <div class="col-5" style="position:relative; padding-left: 15vh;">
                <div class="card contact-card">
                    <div class="card-body" style="padding: 2vh;">
                        <div class="row">
                            <div class="col-5">
                                <h5>Agendemos una</h5>
                                <h5>Reunión</h5>
                                <p style="padding-top: 2.5vh;"><small>Estamos disponibles para conversar</small></p>
                            </div>
                            <div class="col-3">
                                
                            </div>
                            <div class="col-4">
                                <img src="/images/Calendar icon.png" style="max-width: 80%; max-height: 80%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card contact-card" style="position:absolute; bottom:0; width: 78%;">
                    <div class="card-body" style="padding: 2vh;">
                        <div class="row">
                            <div class="col-5">
                                <h5>Contáctanos</h5>
                                <h5>directamente</h5>
                                <p style="padding-top: 2.5vh;"><small>Estamos disponibles para conversar</small></p>
                            </div>
                            <div class="col-3">
                                
                            </div>
                            <div class="col-4">
                                <img src="/images/Whatsapp icon.png" style="max-width: 80%; max-height: 80%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <!-- Ecosystems -->
    <div>
        <div style="text-align: -webkit-center;">
            <div style="text-align: center; padding: 7.5vh; width: 50%">
                <h2 style="font-size: 4vh; color: #000033;">Generamos relaciones</h2>
                <h2 style="font-size: 4vh; color: #000033;">entre los ecosistemas</h2>
                <br>
                <p style="font-size: 2vh; color: #00000B">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim mi facilisis nisl scelerisque sodales. Integer nisi nunc, interdum non nibh id, lobortis volutpat nisi. Cras convallis lobortis fermentum. Aliquam in orci nulla. Nulla sit.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-4" style="padding-right: 4vh;">
                <div class="card border-0" style="height: 100%;">
                    <div class="card-body ecosystem-card" style="padding: 3vh;">
                        <img src="https://cdn-icons-png.flaticon.com/512/1230/1230247.png" style="width:9vh; padding:2vh;">
                        <h3>OPORTUNIDADES</h3>
                        <p style="font-size: 1.5vh; padding-top: 2vh; line-height: 2.5vh;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim mi facilisis nisl scelerisque sodales. Integer nisi nunc, interdum non nibh id, lobortis volutpat nisi. Cras convallis lobortis fermentum. Aliquam in orci nulla. Nulla sit.
                        </p>
                        <br>
                        <br>
                        <button type="button" class="btn btn-outline-primary rounded-4" style="height:4vh; width:10vh;">Leer más</button>
                    </div>
                </div>
            </div>
            <div class="col-4" style="padding-right: 2vh; padding-left: 2vh;">
                <div class="card border-0" style="height: 100%;">
                    <div class="card-body ecosystem-card" style="padding: 3vh;">
                        <img src="https://cdn-icons-png.flaticon.com/512/1230/1230247.png" style="width:9vh; padding:2vh;">
                        <h3>DESAFÍOS</h3>
                        <p style="font-size: 1.5vh; padding-top: 2vh; line-height: 2.5vh;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim mi facilisis nisl scelerisque sodales. Integer nisi nunc, interdum non nibh id, lobortis volutpat nisi. Cras convallis lobortis fermentum. Aliquam in orci nulla. Nulla sit.
                        </p>
                        <br>
                        <br>
                        <button type="button" class="btn btn-outline-primary rounded-4" style="height:4vh; width:10vh;">Leer más</button>
                    </div>
                </div>
            </div>
            <div class="col-4" style="padding-left: 4vh;">
                <div class="card border-0" style="height: 100%;">
                    <div class="card-body ecosystem-card" style="padding: 3vh;">
                        <img src="https://cdn-icons-png.flaticon.com/512/1230/1230247.png" style="width:9vh; padding:2vh;">
                        <h3>GESTIÓN DE ACUERDOS</h3>
                        <p style="font-size: 1.5vh; padding-top: 2vh; line-height: 2.5vh;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim mi facilisis nisl scelerisque sodales. Integer nisi nunc, interdum non nibh id, lobortis volutpat nisi. Cras convallis lobortis fermentum. Aliquam in orci nulla. Nulla sit.
                        </p>
                        <br>
                        <br>
                        <button type="button" class="btn btn-outline-primary rounded-4" style="height:4vh; width:10vh;">Leer más</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Specialists -->
    <div style="padding-top: 5vh;">
        <p style="opacity: 0.3; font-size: 2.5vh;"><b>¿Cómo lo hacemos?</b></p>
        <h2 style="font-size: 4vh;">Nuestros especialistas a tu lado</h2>
        <div style="width: 25%; background-color: #31388E; height: 1vh;"></div>
        <p style="width: 70%; font-size: 1.5vh; padding-top: 2vh;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim mi facilisis nisl scelerisque sodales. Integer nisi nunc, interdum non nibh id, lobortis volutpat nisi. Cras convallis lobortis fermentum. Aliquam in orci nulla. Nulla sit.
        </p>
        <div class="row" style="padding-top: 5vh;">
            <div class="col"></div>
            <div class="col">
                <div class="card specialist-card border-0">
                    <br>
                    <img class="specialist-portrait" src="/images/Javier Benavides portrait.jpg">
                    <br>
                    <div class="specialist-card-body">
                        <div style="width: 80%; background-color: #31388E; height: 0.5vh;"></div>
                        <h5 style="font-size: 2.5vh;">Javier Benavides</h5>
                        <p style="font-size: 1.5vh;">Contador</p>
                        <p style="font-size: 1.5vh;">BBCS Capital, PECAP y VC</p>
                        <p style="font-size: 1.5vh;">Alianza del Pacífico</p>
                        <p style="font-size: 1.5vh;">
                            MBA del IE Business School.
                            <br>
                            Lidera una Red de Inversionistas Ángeles.
                            Docente de innovación en diversa universidades del país.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card specialist-card border-0">
                    <br>
                    <img class="specialist-portrait" src="/images/Luis Salazar portrait.jpg">
                    <br>
                    <div class="specialist-card-body">
                        <div style="width: 80%; background-color: #31388E; height: 0.5vh;"></div>
                        <h5 style="font-size: 2.5vh;">Luis Salazar</h5>
                        <p style="font-size: 1.5vh;">Administrador</p>
                        <p style="font-size: 1.5vh;">Emprendedor, Docente</p>
                        <p style="font-size: 1.5vh;">
                            MBA del IE Business School.
                            <br>
                            Speaker nacional r internacional. Evaluador de Startup Perú. Docente pre y post grado en innovación. Mentro en distintas incubadoras de negocios
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card specialist-card border-0">
                    <br>
                    <img class="specialist-portrait" src="/images/Alejandro Bernaola portrait.jpg">
                    <br>
                    <div class="specialist-card-body">
                        <div style="width: 80%; background-color: #31388E; height: 0.5vh;"></div>
                        <h5 style="font-size: 2.5vh;">Alejandro Bernaola</h5>
                        <p style="font-size: 1.5vh;">Economista</p>
                        <p style="font-size: 1.5vh;">Gerente de Alianzas ACM</p>
                        <p style="font-size: 1.5vh;">Ventures</p>
                        <p style="font-size: 1.5vh;">
                            Ex Director Nacional de Innovación, durante su gestión se implantó el programa Startup Perú y otros programas de apoyo al ecosistema. ACM:
                            <br>
                            Aceleradora agrotech líder en LATAM
                        </p>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <!-- News Subscription -->
    <div style="padding: 10vh; padding-right: 40vh; padding-left: 40vh;">
        <h2 style="font-size: 4vh; text-align: center;">Suscríbete a nuestras noticias</h2>
        <p style="font-size: 2vh; padding-top: 1.5vh; text-align: center;">Le recomendamos que se suscriba a nuestro boletín de noticias, deje su correo electrónico a continuación para obtener una actualización diaria sobre nosotros</p>
        <form style="padding-top: 5vh; padding-bottom: 3vh;">
            <div class="row">
                <div class="col-10">
                    <div class="form-group col-auto">
                        <input type="email" class="form-control mb-2 rounded-5" placeholder="Ingresa tu email" style="background: #F2F1F1; border-radius: 23px; height: 3vh; padding-top: 2.5vh; padding-bottom: 2.5vh; padding-left: 3vh;">
                    </div>
                </div>
                <div class="col-2">
                    <button class="btn btn-primary mb-2 col-auto rounded-5" style="height: 5vh; width: 12vh;"> Suscribirme </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script></script>
@endsection