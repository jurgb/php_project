$(document).ready(function(){

	var expanded = false;

	//---------MENU EXPAND--------------//

	$("#nav_toggle").click(function(){

		if(!expanded){
			$("nav").slideDown(300);
			expanded = true;
		} else{
			$("nav").slideUp(300);
			expanded = false;
		}

		return(false);
		/*
		$("nav").slideToggle(300);
		return(false);

		*/
	});


	//---------SMOOTH SCROLL--------------//


	$('a[href^="#"]').click(function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 600, 'swing', function () {
	        window.location.hash = target;
	    });
	});

	//Menu display workaround
	//Workaround for going from mobile menu to widescreen menu and keeping menu displayed

	$(window).resize(function(){
		if($(window).width() > 600){
			$("nav").show();
		}
	});

});