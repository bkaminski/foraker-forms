//jQuery no-conflict mode
(function( $ ) {

// Preloader
	$(window).on('load', function() {
		setTimeout(function(){
    		$('#preloader').fadeOut('slow', function () {	
    		});
    	}, 500);
	});


})( jQuery );