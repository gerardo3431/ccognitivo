    $(document).ready(function(){
        $('.parallax').parallax();
        $('.materialboxed').materialbox();
        $('.sidenav').sidenav();
        $('.fixed-action-btn').floatingActionButton({
        	hoverEnabled: false
        });

        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });

    });