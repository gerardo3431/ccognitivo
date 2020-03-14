    $(document).ready(function(){
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('.sidenav').sidenav();
        $('.scrollspy').scrollSpy({
        	scrollOffset: 0
        });
        $('.fixed-action-btn').floatingActionButton({
        	hoverEnabled: false 	 	
        });

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

        //Intervalo de cambio para el carousel

        setInterval(function(){
        	$('.carousel').carousel('next');
        }, 15000);

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

    		document.getElementById('carousel').className = '';
    	}

    new WOW().init();
    

    })