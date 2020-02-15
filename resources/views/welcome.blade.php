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

<!--
    <style>
        body, h1, h5 {font-family: "Raleway", sans-serif}
        
        body, html {height: 100%; width: 100%;}
        
        body {
            background-image: url( {{ asset('media/1.jpg')  }} );
            min-height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #fff3e0;
        }
        

        .bgimg {
           background-image: url( {{ asset('media/logos.png') }} );
      
            min-height: 100%;
           background-repeat: no-repeat;
           background-position: center;
        }




    </style>  -->
</head>
<body>
        <img src="{{ asset('media/cognitivo.png') }}" height="90px" />
<div class="parallax-container">
    <div class="parallax">
        <img src="{{ asset('media/1.jpg') }}" />
    </div>
</div>
    
    <div class="section white">
        
        <!-- Cards -->
        <div class="row container">
            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('media/products/mbp/mbp-card.jpg') }}" />
                    </div>
                    <div class="card-content">
                        <p>Método Bebé Políglota fusiona la diversión y el aprendizaje desarrollando el cerebro...</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('media/products/neuron_baby/neuron_baby-card.jpg') }}" />
                    </div>
                    <div class="card-content">
                        <p>Programa de estimulación temprana o atención temprana multisensorial que consiste en proporcionar al bebé y...</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('media/products/pavinchi/pavinchi-card.jpg') }}" />
                    </div>
                    <div class="card-content">
                        <p>Nuestras historias son adaptaciones de los cuentos clásicos, fábulas y leyendas. Cuentan con una narración literaria apta para las familias y con tecnología de...</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('media/products/neuron_school/neuron_school-card.jpg') }}" />
                    </div>
                    <div class="card-content">
                        <p>Método de enseñanza neuro psicopedagógico que desarrolla habilidades de manera lúdica para la futura etapa preescolar. Dirigido a niños de los 2 años.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('media/products/neuron_english/neuron_english-card.jpg') }}" />
                    </div>
                    <div class="card-content">
                        <p>Programa de activación neuronal para los niños y niñas que promueve el desarrollo de habilidades cognitivas y el aprendizaje de manera natural...</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('media/products/polyglot_school/polyglot_school-card.jpg') }}" />
                    </div>
                    <div class="card-content">
                        <p>Programa multilingüe de activación neuronal, para niños y niñas, que aprovecha la plasticidad cerebral, para desarrollar habilidades...</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m2">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('media/products/luka/luka-card.jpg') }}" />
                    </div>
                    <div class="card-content">
                        <p>Luka Robot, es el mejor amigo de los niños, inteligencia artificial educativa que enseña a los más pequeños a desarrollar amor por la lectura y los buenos hábitos...</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Saber más</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
 
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js" ></script>
<script type="text/javascript" src="{{ asset('js/materialize.js') }}" ></script>
<script>
    $(document).ready(function(){
        $('parallax').parallax();
    });
</script>
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