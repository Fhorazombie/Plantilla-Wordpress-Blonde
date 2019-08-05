
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/scriptis.js"></script>
	<script type="text/javascript">
		$('.responsive-slider-shop').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 2,
		  slidesToScroll: 2,
		  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
		  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		      }
		    },
		    {
		      breakpoint: 990,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});
	</script>
</body>
</html>