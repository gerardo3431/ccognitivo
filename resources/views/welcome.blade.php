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

    <style type="text/css">
        .valign-wrapper {
            height: 100vh;
           justify-content: center;
           align-items: center;
        }

        .cssload-dots {
    width: 0;
    height: 0;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    outline: 1px solid red;
    filter: url(#goo);
        -o-filter: url(#goo);
        -ms-filter: url(#goo);
        -webkit-filter: url(#goo);
        -moz-filter: url(#goo);
}

.cssload-dot {
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
}
.cssload-dot:before {
    content: "";
    width: 31px;
    height: 31px;
    border-radius: 44px;
    background: rgb(251,211,1);
    position: absolute;
    left: 50%;
    transform: translateY(0);
        -o-transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
    margin-left: -15.5px;
    margin-top: -15.5px;
}



.cssload-dot:nth-child(5):before {
    z-index: 100;
    width: 39.5px;
    height: 39.5px;
    margin-left: -19.75px;
    margin-top: -19.75px;
    animation: cssload-dot-colors 3.6s ease infinite;
        -o-animation: cssload-dot-colors 3.6s ease infinite;
        -ms-animation: cssload-dot-colors 3.6s ease infinite;
        -webkit-animation: cssload-dot-colors 3.6s ease infinite;
        -moz-animation: cssload-dot-colors 3.6s ease infinite;
}


.cssload-dot:nth-child(1) {
    animation: cssload-dot-rotate-1 3.6s 0s linear infinite;
        -o-animation: cssload-dot-rotate-1 3.6s 0s linear infinite;
        -ms-animation: cssload-dot-rotate-1 3.6s 0s linear infinite;
        -webkit-animation: cssload-dot-rotate-1 3.6s 0s linear infinite;
        -moz-animation: cssload-dot-rotate-1 3.6s 0s linear infinite;
}
.cssload-dot:nth-child(1):before {
    background-color: rgb(255,50,112);
    animation: cssload-dot-move 3.6s 0s ease infinite;
        -o-animation: cssload-dot-move 3.6s 0s ease infinite;
        -ms-animation: cssload-dot-move 3.6s 0s ease infinite;
        -webkit-animation: cssload-dot-move 3.6s 0s ease infinite;
        -moz-animation: cssload-dot-move 3.6s 0s ease infinite;
}

.cssload-dot:nth-child(2) {
    animation: cssload-dot-rotate-2 3.6s 0.9s linear infinite;
        -o-animation: cssload-dot-rotate-2 3.6s 0.9s linear infinite;
        -ms-animation: cssload-dot-rotate-2 3.6s 0.9s linear infinite;
        -webkit-animation: cssload-dot-rotate-2 3.6s 0.9s linear infinite;
        -moz-animation: cssload-dot-rotate-2 3.6s 0.9s linear infinite;
}
.cssload-dot:nth-child(2):before {
    background-color: rgb(32,139,241);
    animation: cssload-dot-move 3.6s 0.9s ease infinite;
        -o-animation: cssload-dot-move 3.6s 0.9s ease infinite;
        -ms-animation: cssload-dot-move 3.6s 0.9s ease infinite;
        -webkit-animation: cssload-dot-move 3.6s 0.9s ease infinite;
        -moz-animation: cssload-dot-move 3.6s 0.9s ease infinite;
}

.cssload-dot:nth-child(3) {
    animation: cssload-dot-rotate-3 3.6s 1.8s linear infinite;
        -o-animation: cssload-dot-rotate-3 3.6s 1.8s linear infinite;
        -ms-animation: cssload-dot-rotate-3 3.6s 1.8s linear infinite;
        -webkit-animation: cssload-dot-rotate-3 3.6s 1.8s linear infinite;
        -moz-animation: cssload-dot-rotate-3 3.6s 1.8s linear infinite;
}
.cssload-dot:nth-child(3):before {
    background-color: rgb(175,225,2);
    animation: cssload-dot-move 3.6s 1.8s ease infinite;
        -o-animation: cssload-dot-move 3.6s 1.8s ease infinite;
        -ms-animation: cssload-dot-move 3.6s 1.8s ease infinite;
        -webkit-animation: cssload-dot-move 3.6s 1.8s ease infinite;
        -moz-animation: cssload-dot-move 3.6s 1.8s ease infinite;
}

.cssload-dot:nth-child(4) {
    animation: cssload-dot-rotate-4 3.6s 2.7s linear infinite;
        -o-animation: cssload-dot-rotate-4 3.6s 2.7s linear infinite;
        -ms-animation: cssload-dot-rotate-4 3.6s 2.7s linear infinite;
        -webkit-animation: cssload-dot-rotate-4 3.6s 2.7s linear infinite;
        -moz-animation: cssload-dot-rotate-4 3.6s 2.7s linear infinite;
}
.cssload-dot:nth-child(4):before {
    background-color: rgb(251,211,1);
    animation: cssload-dot-move 3.6s 2.7s ease infinite;
        -o-animation: cssload-dot-move 3.6s 2.7s ease infinite;
        -ms-animation: cssload-dot-move 3.6s 2.7s ease infinite;
        -webkit-animation: cssload-dot-move 3.6s 2.7s ease infinite;
        -moz-animation: cssload-dot-move 3.6s 2.7s ease infinite;
}

@keyframes cssload-dot-move {
    0% {
        transform: translateY(0);
    }
    18%, 22% {
        transform: translateY(-61px);
    }
    40%, 100% {
        transform: translateY(0);
    }
}

@-o-keyframes cssload-dot-move {
    0% {
        -o-transform: translateY(0);
    }
    18%, 22% {
        -o-transform: translateY(-61px);
    }
    40%, 100% {
        -o-transform: translateY(0);
    }
}

@-ms-keyframes cssload-dot-move {
    0% {
        -ms-transform: translateY(0);
    }
    18%, 22% {
        -ms-transform: translateY(-61px);
    }
    40%, 100% {
        -ms-transform: translateY(0);
    }
}

@-webkit-keyframes cssload-dot-move {
    0% {
        -webkit-transform: translateY(0);
    }
    18%, 22% {
        -webkit-transform: translateY(-61px);
    }
    40%, 100% {
        -webkit-transform: translateY(0);
    }
}

@-moz-keyframes cssload-dot-move {
    0% {
        -moz-transform: translateY(0);
    }
    18%, 22% {
        -moz-transform: translateY(-61px);
    }
    40%, 100% {
        -moz-transform: translateY(0);
    }
}

@keyframes cssload-dot-colors {
    0% {
        background-color: rgb(251,211,1);
    }
    25% {
        background-color: rgb(255,50,112);
    }
    50% {
        background-color: rgb(32,139,241);
    }
    75% {
        background-color: rgb(175,225,2);
    }
    100% {
        background-color: rgb(251,211,1);
    }
}

@-o-keyframes cssload-dot-colors {
    0% {
        background-color: rgb(251,211,1);
    }
    25% {
        background-color: rgb(255,50,112);
    }
    50% {
        background-color: rgb(32,139,241);
    }
    75% {
        background-color: rgb(175,225,2);
    }
    100% {
        background-color: rgb(251,211,1);
    }
}

@-ms-keyframes cssload-dot-colors {
    0% {
        background-color: rgb(251,211,1);
    }
    25% {
        background-color: rgb(255,50,112);
    }
    50% {
        background-color: rgb(32,139,241);
    }
    75% {
        background-color: rgb(175,225,2);
    }
    100% {
        background-color: rgb(251,211,1);
    }
}

@-webkit-keyframes cssload-dot-colors {
    0% {
        background-color: rgb(251,211,1);
    }
    25% {
        background-color: rgb(255,50,112);
    }
    50% {
        background-color: rgb(32,139,241);
    }
    75% {
        background-color: rgb(175,225,2);
    }
    100% {
        background-color: rgb(251,211,1);
    }
}

@-moz-keyframes cssload-dot-colors {
    0% {
        background-color: rgb(251,211,1);
    }
    25% {
        background-color: rgb(255,50,112);
    }
    50% {
        background-color: rgb(32,139,241);
    }
    75% {
        background-color: rgb(175,225,2);
    }
    100% {
        background-color: rgb(251,211,1);
    }
}

@keyframes cssload-dot-rotate-1 {
    0% {
        transform: rotate(-105deg);
    }
    100% {
        transform: rotate(270deg);
    }
}

@-o-keyframes cssload-dot-rotate-1 {
    0% {
        -o-transform: rotate(-105deg);
    }
    100% {
        -o-transform: rotate(270deg);
    }
}

@-ms-keyframes cssload-dot-rotate-1 {
    0% {
        -ms-transform: rotate(-105deg);
    }
    100% {
        -ms-transform: rotate(270deg);
    }
}

@-webkit-keyframes cssload-dot-rotate-1 {
    0% {
        -webkit-transform: rotate(-105deg);
    }
    100% {
        -webkit-transform: rotate(270deg);
    }
}

@-moz-keyframes cssload-dot-rotate-1 {
    0% {
        -moz-transform: rotate(-105deg);
    }
    100% {
        -moz-transform: rotate(270deg);
    }
}

@keyframes cssload-dot-rotate-2 {
    0% {
        transform: rotate(165deg);
    }
    100% {
        transform: rotate(540deg);
    }
}

@-o-keyframes cssload-dot-rotate-2 {
    0% {
        -o-transform: rotate(165deg);
    }
    100% {
        -o-transform: rotate(540deg);
    }
}

@-ms-keyframes cssload-dot-rotate-2 {
    0% {
        -ms-transform: rotate(165deg);
    }
    100% {
        -ms-transform: rotate(540deg);
    }
}

@-webkit-keyframes cssload-dot-rotate-2 {
    0% {
        -webkit-transform: rotate(165deg);
    }
    100% {
        -webkit-transform: rotate(540deg);
    }
}

@-moz-keyframes cssload-dot-rotate-2 {
    0% {
        -moz-transform: rotate(165deg);
    }
    100% {
        -moz-transform: rotate(540deg);
    }
}

@keyframes cssload-dot-rotate-3 {
    0% {
        transform: rotate(435deg);
    }
    100% {
        transform: rotate(810deg);
    }
}

@-o-keyframes cssload-dot-rotate-3 {
    0% {
        -o-transform: rotate(435deg);
    }
    100% {
        -o-transform: rotate(810deg);
    }
}

@-ms-keyframes cssload-dot-rotate-3 {
    0% {
        -ms-transform: rotate(435deg);
    }
    100% {
        -ms-transform: rotate(810deg);
    }
}

@-webkit-keyframes cssload-dot-rotate-3 {
    0% {
        -webkit-transform: rotate(435deg);
    }
    100% {
        -webkit-transform: rotate(810deg);
    }
}

@-moz-keyframes cssload-dot-rotate-3 {
    0% {
        -moz-transform: rotate(435deg);
    }
    100% {
        -moz-transform: rotate(810deg);
    }
}

@keyframes cssload-dot-rotate-4 {
    0% {
        transform: rotate(705deg);
    }
    100% {
        transform: rotate(1080deg);
    }
}

@-o-keyframes cssload-dot-rotate-4 {
    0% {
        -o-transform: rotate(705deg);
    }
    100% {
        -o-transform: rotate(1080deg);
    }
}

@-ms-keyframes cssload-dot-rotate-4 {
    0% {
        -ms-transform: rotate(705deg);
    }
    100% {
        -ms-transform: rotate(1080deg);
    }
}

@-webkit-keyframes cssload-dot-rotate-4 {
    0% {
        -webkit-transform: rotate(705deg);
    }
    100% {
        -webkit-transform: rotate(1080deg);
    }
}

@-moz-keyframes cssload-dot-rotate-4 {
    0% {
        -moz-transform: rotate(705deg);
    }
    100% {
        -moz-transform: rotate(1080deg);
    }
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
        <div class="nav-wrapper purple lighten-1">
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#servicio">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
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
                <li><a href="#servicio">Servicios</a></li>
                <li><div class="divider"></div></li>
                <li><a href="#">Contactos</a></li>
            </ul>
<!-- End Nav -->

<div class="valign-wrapper" id="load">
    
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-red">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-yellow">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>

        <div class="spinner-layer spinner-green">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>

</div>


<!-- Carousel -->

<div class="hide" id="carousel">
    
    <div class="carousel carousel-slider center">
        <div class="carousel-item white-text" href="#one!">
            <img src="{{ asset('media/products/luka/luka-banner-1.jpg') }}" class="responsive-img" />
        </div>
        <div class="carousel-item white-text" href="#two!">
            <img src="{{ asset('media/products/pavinchi/pavinchi-banner-1.jpg') }}" class="responsive-img" />
        </div>
        <div class="carousel-item white-text" href="#three!">
            <img src="{{ asset('media/products/neuron_school/neuron-school-banner-1.jpg') }}" class="responsive-img" />
        </div>
        <div class="carousel-item white-text" href="#four!">
            <img src="{{ asset('media/products/polyglot_school/polyglot-school-banner-1.jpg') }}" class="responsive-img" />
        </div>
    </div>

</div>
<!-- End Carousel -->

<!-- INIT CARDS -->
    <div class="container">
        <div class="section scrollspy" id="servicio">
            <h2>Servicios</h2>
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
                        <p>Es un programa que introduce al bebé en un ambiente multilingüe, para aprovechar su neuroplasticidad, y provocar estímulos positivos a partir de los idiomas.</p>
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
                        <p>Programa de estimulación temprana o atención temprana multisensorial que consiste en proporcionar al bebé y al niño las mejores oportunidades de desarrollo físico, intelectual y social para que sus capacidades y habilidades le permitan ser mejor de lo que hubiera sido sin entorno rico en estimulación intelectuales y físicos de calidad.</p>
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
                        <p>Método de enseñanza neuro psicopedagógico que desarrolla habilidades de manera lúcida para la futura etapa preescolar. Dirigido a niños a partir de los 2 años.</p>
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
<!-- END CARDS -->

<!-- Parallax -->
    <div class="parallax-container">
        <img src="{{ asset('media/cognitivo-blanco.png') }}" height="90px" />
        <!-- Init Form -->
            <div class="container blue lighten-2 transparent">
                <div class="section">
                    
                        
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="text" name="nombre" class="validate" placeholder="Nombre" id="nombre" />
                                            <label for="nombre">Nombre</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" name="apellidos" class="validate" placeholder="Apellidos" id="apellidos" />
                                            <label for="apellidos">Apellidos</label>
                                        </div>
                                    </div>
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
            <div class="col s12 m6">
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
            <div class="col s12 m6">
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

<!-- Floating Action Button -->
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blue">
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
    <footer class="page-footer purple accent-3">
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
                © 2020 Copyright Text
                <a href="#" class="grey-text text-lighten-4 right">More Links</a>
            </div>
        </div>
    </footer>
<!-- End Footer -->

</div>

</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" ></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}" ></script>
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