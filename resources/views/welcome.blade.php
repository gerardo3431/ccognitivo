<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sistema de Estimulación Temprana para Bebés que funciona a través del aprendizaje de 7 idiomas para edades de 0 a 7 años." />
    <meta name="keywords" content="estimulación-temprana, idiomas, bebés, familia, aprender, diversion, inteligencia, habilidad, comprensión, juegos, creatividad, desempeño, sonrisas, actividad-neuronal, novedoso, alemán, español, francés, inglés, italiano, mandarín, portugués" />
    <meta name="robots" content="index, nofollow" />
    <meta http-equiv="cache-control" content="no-cache" />

    <title>Capital Cognitivo</title>

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <style type="text/css">
        .portada{
           background: url({{ asset('media/fondo-section.jpg') }}) no-repeat fixed center;
           -webkit-background-size: cover;
           -moz-background-size: cover;
           -o-background-size: cover;
           background-size: cover;
           height: 100%;
           width: 100% ;
         
        }

        .map-responsive {

            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;

        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;

        }

    </style>
</head>
<body>



<div id="preloader">
  
    <div class="cssload-dots">
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
        <div class="cssload-dot"></div>
    </div>

    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="12" ></feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0    0 1 0 0 0   0 0 1 0 0   0 0 0 18 -7" result="goo" ></feColorMatrix> 
                <feBlend in2="goo" in="SourceGraphic" result="mix" ></feBlend>
            </filter>
        </defs>
    </svg>

</div>

<div class="hide" id="content">

<!-- Nav -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper blue darken-3">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#carousel">Inicio</a></li>
                <li><a href="#acerca">Acerca</a></li>
                <li><a href="#servicio">Programas</a></li>
                <li><a href="#equipo">Equipo</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>
</div>
            <ul class="sidenav" id="mobile-demo">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="{{ asset('media/fondo-morado.jpg') }}" class="responsive-img" />
                        </div>
                        <a href="#">
                            <span class="name white-text">Capital Cognitivo</span>
                        </a>
                        <a href="#">
                            <span class="email white-text">contacto@estimulaciontemprana.com</span>
                        </a>
                    </div>
                </li>
                <li><a href="#carousel">Inicio</a></li>
                <li><a href="#servicio">Programas</a></li>
                <li><div class="divider"></div></li>
                <li><a href="#equipo">Equipo</a></li>
                <li><a href="#acerca">Acerca</a></li>
                <li><a href="#">Contactos</a></li>
            </ul>
<!-- End Nav -->


<!-- Carousel -->

    <div class="carousel">
        <div class="carousel-item">
            
            
        </div>
            
        
        <a class="carousel-item" href="{{ asset('media/1.jpg') }}"></a>
        <a class="carousel-item" href="https://youtu.be/4330x9GHkqk"></a>
        <a class="carousel-item" href="https://youtu.be/Lwqd8wNrzbU"></a>
    </div>

<!-- End Carousel -->

<div class="section">
    
    <div class="row">
        <div class="col s12 m4 xl3 teal accent-3 wow animated fadeIn">
            <div class="section white-text">
                <h5>Educación</h5>
                <div class="divider"></div>
                <p>Programas neuroeducativos para bebés y niños de 0 a 7 años.</p>   
            </div>
        </div>
        <div class="col s12 m4 xl3 cyan accent-3 wow animated fadeIn">
            <div class="section white-text">
                <h5>Programa</h5>
                <div class="divider"></div>
                <p>Potencializa el cerebro con las herramientas de súper aprendizaje.</p>
            </div>
        </div>
        <div class="col s12 m4 xl3 deep-orange lighten-1 wow animated fadeIn">
            <div class="section white-text">
                <h5>Beneficio</h5>
                <div class="divider"></div>
                <p>Obtendrá un proceso de adaptación, experiencias acorde a su edad.</p>   
            </div>
        </div>
        <div class="col s12 m4 xl3 deep-purple accent-2 wow animated fadeIn">
            <div class="section white-text">
                <h5>Sesiones</h5>
                <div class="divider"></div>
                <p>Las sesiones neuroeducativas son de 50 minutos, 2 veces al día.</p>
            </div>
        </div>
    </div>
</div>



<!-- -->
<div class="container">
    <div class="section scrollspy" id="acerca">
        <div class="row">
            <div class="col s12 center">
                <h3>Algunas palabras sobre nosotros</h3>
                <div class="container">
                    <p>Estamos dedicado a proporcionar una amplia variedad de servicios neuroeducativos, a tiempo que aumentamos las habilidades y el conocimiento básico de sus hijos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 xl6 wow animated bounce">
                <div class="z-depth-2">
                    <img src="{{ asset('media/nosotros.jpg') }}" class="responsive-img" />
                </div>
            </div>
            <div class="container col s12 m6 xl6 wow animated zoomIn">
                <p>En Capital Cognitivo, nuestra misión es ser la empresa líder en métodos educativos de enseñanza infantil por innovación y soluciones. Brindandole a la sociedad, inversionista y colaboradores la mejor satisfacción en nuestros proyectos y servicios, así como hacer de México una generación de niños con mejores habilidades y herramientas para un futuro.</p>
            </div>
        </div>
    </div>
</div>
<!-- -->


<!-- -->
<div class="pink lighten-3 white-text">
    <div class="container">
        <div class="section col s12">
            <div class="row">
                <div class="col s12 m4 xl4">
                    <h6 class="center"><i class="material-icons medium">security</i></h6>
                    <p>Ofrecemos protección y seguridad de primera clase para sus hijos.</p>
                </div>
                <div class="col s12 m4 xl4">
                    <h6 class="center"><i class="material-icons medium">share</i></h6>
                    <p>Novedoso sistema de estimulación de habilitación y puesta a punto de la actividad neuronal, encaminado a que los niños de 0 a 7 años se relacionen con 7 idiomas.</p>
                </div>
                <div class="col s12 m4 xl4">
                    <h6 class="center"><i class="material-icons medium">chrome_reader_mode</i></h6>
                    <p>Los asesores neuroeducativos te brindarán toda la información necesaria acerca de las ventajas de la interacción oportuna, multilingüismo y lectura a temprana edad.</p>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4 xl4">
                    <h6 class="center"><i class="material-icons medium">child_care</i></h6>
                    <p>Satisfacer las necesidades educativas de los bebés a través de los programas neuroeducativos.</p>
                </div>
                <div class="col s12 m4 xl4">
                    <h6 class="center"><i class="material-icons medium">palette</i></h6>
                    <p>Nuestro plan de estudios fue diseñado para fomentar la creatividad de los niños(as) de Capital Cognitivo.</p>
                </div>
                <div class="col s12 m4 xl4">
                    <h6 class="center"><i class="material-icons medium">filter_vintage</i></h6>
                    <p>Las mejores condiciones para que su hijo tenga una experiencia de aprendizaje única</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -->




<!-- INIT CARDS -->
<div class="portada amber lighten-4">

    <div class="container section wow animated fadeInRight">
        <div class="section scrollspy" id="servicio">
            <h2>Programas</h2>
        </div>
    
        <div class="row">
            <div class="col s6 m4 xl3">

                <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img src="{{ asset('media/products/mbp/mbp-card.jpg') }}" class="responsive-img activator" />
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">MBP <i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Método Bebé Políglota <i class="material-icons right">close</i></span>
                        <p>El método que introduce al bebé y al niño en un ambiente multilingüe, para aprovechar su neuroplasticidad, y provocar estímulos positivos a partir del contacto con 7 idiomas.</p>
                    </div>
                </div>
            </div>
            
            <div class="col s6 m4 xl3">
                <div class="card small">
                    <div class="card-image  waves-effect waves-block waves-light">
                        <img src="{{ asset('media/products/neuron_baby/neuron_baby-card.jpg') }}" class="responsive-img activator" />
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Neuron Baby <i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Neuron Baby <i class="material-icons right">close</i></span>
                        <p>Programa de interacción oportuna que consiste en proporcionar al babé y al niño las mejores oportunidades de desarrollo físico, intelectual y social de 0 a 24 meses.</p>
                    </div>
                </div>
            </div>

            <div class="col s6 m4 xl3">
                <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img src="{{ asset('media/products/neuron_school/neuron_school-card.jpg') }}" class="responsive-img activator" />
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Neuron School <i class="material-icons right">more_vert</i></span>   
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Neuron School <i class="material-icons right">close</i></span>
                        <p>Prekinder neuro psicopedagógico que desarrolla habilidades de manera lúdica y divertida para la futura etapa preescolar. Dirigido a niños y niñas a partir de los 2 años.</p>
                    </div>
                </div>
            </div>

            <div class="col s6 m4 xl3">
                <div class="card small">
                    <div class="card-image  waves-effect waves-block waves-light">
                        <img src="{{ asset('media/products/neuron_english/neuron_english-card.jpg') }}" class="responsive-img activator" />
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Neuron English <i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Neuron English <i class="material-icons right">close</i></span>
                        <p>Programa de activación neuronal para niños y niñas que promueve el desarrollo de habilidades cognitivas y el aprendizaje de manera natural, fácil y sin esfuerzo del idiomas inglés.</p>
                    </div>
                </div>
            </div>

            <div class="col s6 m4 xl3">
                <div class="card small">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img src="{{ asset('media/products/polyglot_school/polyglot_school-card.jpg') }}" class="responsive-img activator" />
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Polyglot School <i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Polyglot School <i class="material-icons right">close</i></span>
                        <p>Programa multilingüe de activación neuronal, para niños y niñas, que aprovecha la plasticidad cerebral, para desarrollar habilidades cognitivas y familiarizar al infante con 5 idiomas (Español, Inglés, Francés, Alemán y Chino Mandarín).</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- END CARDS -->

<!-- Parallax -->
    <div class="parallax-container" style="height: 820px">
        <img src="{{ asset('media/cognitivo-blanco.png') }}" height="90px" />
        <!-- Init Form -->
            <div class="container white">
                <div class="section">  
                    <div class="row center">
                        <form class="col s12">

                            <div class="row col s12 m6 xl6">
                                
                                <div class="row">
                                    <div class="input-field col s12 m10 xl10">
                                        <input type="text" name="txt-nombre_tutor" class="validate" placeholder="Nombre del tutor" id="nombre-tutor" />
                                        <label for="nombre-tutor">Nombre del tutor</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6 m5 xl5">
                                        <input type="text" name="txt-ap_paterno" class="validate" placeholder="Apellido paterno" id="ap-paterno" />
                                        <label for="ap-paterno">Apellido paterno</label>
                                    </div>
                                    <div class="input-field col s6 m5 xl5">
                                        <input type="text" name="txt-ap_materno" class="validate" placeholder="Apellido materno" id="ap-materno" />
                                        <label for="ap-materno">Apellido materno</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s8 m6 xl6">
                                        <input type="text" name="txt-nombre-nino" class="validate" placeholder="Nombre completo del niño(a)" id="nombre-nino" />
                                        <label for="nombre-nino">Nombre del niño(a)</label>
                                    </div>
                                    <div class="input-field col s4 m4 xl4">
                                        <input type="number" name="txt-edad_nino" class="validate" placeholder="Edad niño(a)" id="edad-nino" />
                                        <label>Edad del niño(a)</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row col s12 m6 xl6">
                                
                                <div class="row">
                                    <div class="input-field col s6 m5 xl5">
                                        <input type="tel" name="txt-telefono" class="validate" placeholder="Número de teléfono" id="num-telefono" />
                                        <label for="num-telefono">Número de teléfono</label>
                                    </div>
                                    <div class="input-field col s6 m5 xl5">
                                        <input type="email" name="txt_mail" class="validate" placeholder="Correo electrónico" id="email" />
                                        <label for="email">Correo electrónico</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m10 xl10">
                                        <input type="text" name="txt-sucursal" class="validate" placeholder="Elija una sucursal" id="sucursal" />
                                        <label for="sucursal">Sucursal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12 m10 xl10">
                                        
                                        <input type="text" name="txt-agendar" class="datepicker" placeholder="Agende una cita" id="agenda" />
                                        <label for="agenda">Elija una fecha</label>
                                    </div>
                                </div>

                            </div>

                            <a href="#" class="waves-effect waves-light btn center">Enviar</a>

                        </form>
                    </div>                    
                </div>                 
            </div>
        <!-- End Form -->
        <div class="parallax">
            <img src="{{ asset('media/web-banner-two.jpg') }}" />   
        </div>
    </div>
<!-- End Parallax -->

<!-- Card 2 -->
    <div class="container center">
        <div class="row">
            <div class="col s12 m6 wow animated fadeInRight">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{ asset('media/products/pavinchi/pavinchi-card.jpg') }}" class="materialboxed" />
                    </div>
                    <div class="card-stacked">
                        
                        <div class="card-content">
                            <p>Nuestras historias son adaptaciones de los cuentos clásicos, fábulas y leyendas...</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 wow animated fadeInLeft">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="{{ asset('media/products/luka/luka-card.jpg') }}" class="materialboxed" />
                    </div>
                    <div class="card-stacked">
                        
                        <div class="card-content">
                            <p>Luka Robot, es el mejor amigo de los niños, inteligencia artificial educativa que...</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Saber más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- End Card 2 -->

<!-- CONTACT -->
    <div class="section grey lighten-2">
        <div class="container">
            <div class="row">
                <div class="col s12 m4 xl4 wow animated pulse">
                    <h6>Contacto</h6>
                    <div class="section">
                        <form class="s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="nombre" id="nombre-contacto" class="validate"  />
                                    <label for="nombre-contacto">Nombre</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" name="correo-contacto" id="correo-contacto" class="validate" />
                                    <label for="correo-contacto">Correo Electrónico</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea id="message-contacto" class="materialize-textarea"></textarea>
                                    <label for="message-contacto">Asunto</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="col s12 m8 xl8  wow animated pulse">
                    <div class="section">
                        <div class="container center">
                            
                            <!-- Aqui me quedé Inicia Google Maps -->
                            <div class="map-responsive dimensiones-max banner-aside">
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1897.2456692077471!2d-92.93269578494152!3d18.002387275391072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd8189fdc0573%3A0x8104e2d03844d046!2sCapitalCognitivo%20(M%C3%A9todo%20Beb%C3%A9%20Pol%C3%ADglota%20M%C3%A9xico)!5e0!3m2!1ses-419!2smx!4v1584753769368!5m2!1ses-419!2smx" width="700" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<!-- END CONTACT -->

<!-- Floating Action Button -->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large deep-purple lighten-2">
            <i class="material-icons large">share</i>
        </a>   
            <ul>
                <li><a href="https://www.youtube.com/channel/UCJXQQsMgZI_gkx6M5Y2uknw" class="btn-floating" target="_blank"><img src="{{ asset('media/social/icon-youtube.png') }}" class="responsive-img"></a></li>
                <li><a href="https://www.twitter.com/bebepoliglotamx/" class="btn-floating" target="_blank"><img src="{{ asset('media/social/icon-twitter.png') }}" class="responsive-img" /></a></li>
                <li><a href="https://www.instagram.com/bebepoliglotamx/" class="btn-floating" target="_blank"><img src="{{ asset('media/social/icon-instagram.png') }}" class="responsive-img" /></a></li>
                <li><a href="https://web.facebook.com/MetodoBebePoliglotaMexico/" class="btn-floating" target="_blank"><img src="{{ asset('media/social/icon-facebook.png') }}" class="responsive-img" /></a></li>
            </ul>
    </div>
<!-- End Floating Action Button -->

<!-- Footer -->
    <footer class="page-footer blue darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Capital Cognitivo</h5>
                    <p class="grey-text text-lighten-4">Se está desarrollando la página.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes Sociales</h5>
                    <ul>
                        <li><a href="#" class="grey-text text-lighten-3">Link 1</a></li>
                        <li><a href="#" class="grey-text text-lighten-3">Link 2</a></li>
                        <li><a href="#" class="grey-text text-lighten-3">Link 3</a></li>
                        <li><a href="#" class="grey-text text-lighten-3">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2020 Capital Cognitivo, Todos los derechos reservados.
                <a href="#" class="grey-text text-lighten-4 right">Privacidad</a>
            </div>
        </div>
    </footer>
<!-- End Footer -->

</div>


</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" ></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}" ></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
</html>


<!-- 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
-->
        <!-- Fonts -->
<!--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
-->
        <!-- Styles -->
   <!--     <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
-->