
function initMap() {
  		var myLatLng = {lat: 48.473369, lng: 1.0117314999999962};

	  	// Create a map object and specify the DOM element for display.
	  	var map = new google.maps.Map(document.getElementById('map'), {
	    center: myLatLng,
	    scrollwheel: false,
	    zoom: 16
	  	});

		// Create a marker and set its position.
		var marker = new google.maps.Marker({
	    map: map,
	    position: myLatLng,
	    title: 'KM120.CYCLE'
	  	});

	};

$(document).ready(function() {
	
	$('#topnavbar').affix({
          offset: 15
      });


	$('.carouselFooter').owlCarousel({
		margin: 20,
		autoplay: true,
		dots: false,
		autoplayTimeout: 3000,
		loop: true,
		responsiveClass:true,
    	responsive:{
        	0:{
            	items:1,
        	},
        	480:{
            	items:2,
        	},
        	768:{
        		items:3

        	},
        	992: {
        		items:4
        	}
        }

	});

	$('.carouselVente').owlCarousel({
		margin: 20,
		autoplay: false,
		dots: false,
		nav: true,
		navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsiveClass:true,
    	responsive:{
        	0:{
            	items:1,
        	},
        	480:{
            	items:2,
        	},
        	768:{
        		items:3

        	},
        	992: {
        		items:4
        	}
        }
	});


	$('#quote-carousel').carousel({
    	pause: true,
    	interval: 4000
  	});
  	// redmensionnement du header logo au scroll du navigateur

	jQuery(window).scroll(function(){
		if(jQuery(window).scrollTop()>0){
    	jQuery('h2.titre-logo-on-scroll.hidden').removeClass('hidden');
    	}else{
    		jQuery('h2.titre-logo-on-scroll').addClass('hidden');
    	}
	});

});