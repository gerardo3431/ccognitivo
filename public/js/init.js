    $(document).ready(function(){
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('.sidenav').sidenav();
        $('.scrollspy').scrollSpy({
        	scrollOffset: 0
        });
        $('.fixed-action-btn').floatingActionButton({
        	hoverEnabled: false 	 	
        });


        //Intervalo de cambio para el carousel

       // setInterval(function(){
       // 	$('.carousel').carousel('next');
       // }, 15000);

		// Formulario

        $('.input#input_text').characterCounter();
        $('.datepicker').datepicker();

    });

    window.addEventListener('load', () => {

    	carga();

    	function carga(){
    		document.getElementById('preloader').className = 'hide';

    		document.getElementById('content').className = '';
    	}

    

    })



    window.addEventListener('load', () => {

    	carga();

    	function carga(){
    		document.getElementById('load').className = 'hide animated fadeInDown';
    	}

    new WOW().init();
    

    })