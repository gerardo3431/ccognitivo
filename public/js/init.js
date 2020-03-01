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
        	duration: 900,
            fullWidth: true,
            indicators: true
        });

        //Intervalo de cambio para el carousel

        setInterval(function(){
        	$('.carousel').carousel('next');
        }, 15000);

    });

    window.addEventListener('load', () => {

    	carga();

    	function carga(){
    		document.getElementById('preloader').className = 'hide';

    		document.getElementById('content').className = '';
    	}

    })