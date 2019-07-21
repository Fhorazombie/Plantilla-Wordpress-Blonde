
	$('#navbarTogglerDemo02').on('shown.bs.collapse', function () {
	  $(".hamburger").toggleClass('active')
	})

	$('#navbarTogglerDemo02').on('hidden.bs.collapse', function () {
	  $(".hamburger").toggleClass('active')
	})

	$(window).bind('scroll', function () {
	    if ($(window).scrollTop() > 200) {
	        $('#menu').addClass('fixed');
	    } else {
	        $('#menu').removeClass('fixed');
	    }
	});

	$(window).ready(function() {
	 // executes when complete page is fully loaded, including all frames, objects and images
	 for (var i=0; i<$("img").length; i++) {
	     $("img:eq("+i+")").css( "filter", "none" )
	 }
	});