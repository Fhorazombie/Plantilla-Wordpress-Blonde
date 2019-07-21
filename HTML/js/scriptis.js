
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