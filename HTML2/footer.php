<?php if (!isset($post)) { ?>
<footer class="navbar navbar-fixed-bottom container">
	<h1 class="contenido_semantico">Pie de página</h1>
	<div>
		<div class="redes d-block d-sm-block d-md-none d-lg-none d-lx-none">
			<a href="">
				<span class="fa-stack" style="vertical-align: top;">
				  <i class="fab fa-twitter"></i>
				</span>
			</a>
			<a href="">
				<span class="fa-stack" style="vertical-align: top;">
				  <i class="fab fa-instagram"></i>
				</span>
			</a>
			<a href="">
				<span class="fa-stack" style="vertical-align: top;">
				  <i class="fab fa-snapchat-ghost"></i>
				</span>
			</a>
			<a href="">
				<span class="fa-stack" style="vertical-align: top;">
				  <i class="fab fa-youtube"></i>
				</span>
			</a>
			<a href="">
				<span class="fa-stack" style="vertical-align: top;">
				  <i class="fab fa-tumblr"></i>
				</span>
			</a>

		</div>
		<p>Cammie Scott 2019 | Designed by <a href="">Maria Magnáni</a></p>
	</div>
</footer>
<?php } ?>
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