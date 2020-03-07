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

    // Init Preloader

	var cSpeed=4;
	var cWidth=296;
	var cHeight=132;
	var cTotalFrames=1;
	var cFrameWidth=296;
	var cImageSrc='../js/images/sprites.gif';
	
	var cImageTimeout=false;
	var cIndex=0;
	var cXpos=0;
	var SECONDS_BETWEEN_FRAMES=0;
	
	function startAnimation(){
		
		document.getElementById('loaderImage').style.backgroundImage='url('+cImageSrc+')';
		document.getElementById('loaderImage').style.width=cWidth+'px';
		document.getElementById('loaderImage').style.height=cHeight+'px';
		
		//FPS = Math.round(100/(maxSpeed+2-speed));
		FPS = Math.round(100/cSpeed);
		SECONDS_BETWEEN_FRAMES = 1 / FPS;
		
		setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES/1000);
		
	}
	
	function continueAnimation(){
		
		cXpos += cFrameWidth;
		//increase the index so we know which frame of our animation we are currently on
		cIndex += 1;
		 
		//if our cIndex is higher than our total number of frames, we're at the end and should restart
		if (cIndex >= cTotalFrames) {
			cXpos =0;
			cIndex=0;
		}
		
		document.getElementById('loaderImage').style.backgroundPosition=(-cXpos)+'px 0';
		
		setTimeout('continueAnimation()', SECONDS_BETWEEN_FRAMES*1000);
	}
	
	function imageLoader(s, fun)//Pre-loads the sprites image
	{
		clearTimeout(cImageTimeout);
		cImageTimeout=0;
		genImage = new Image();
		genImage.onload=function (){cImageTimeout=setTimeout(fun, 0)};
		genImage.onerror=new Function('alert(\'Could not load the image\')');
		genImage.src=s;
	}
	
	//The following code starts the animation
	new imageLoader(cImageSrc, 'startAnimation()');

	// End Preloader

    })