<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bit_starter_theme_v1
 */

?>

	</div><!-- #content -->





<?php if (is_page(5) ) : ?>
	<div class="custom-footer">
		<div class="footer-menu">

			<div class="container">
				<a href="<?php echo site_url(); ?>/contact/" aria-current="page">Contact</a>

				<div class="socials">
					<a href="mailto:garry@garryscott-irvine.com" target="_blank"><i class="mdi mdi-email" style="margin-right: 10px;"></i></a>
					<a href="https://twitter.com/gazzalon" target="_blank"><i class="mdi mdi-twitter" style="margin-right: 10px;"></i></a>
					<a href="https://www.instagram.com/garryscottirvine" target="_blank"><i class="mdi mdi-instagram" style="margin-right: 10px;"></i></a>
				</div>
			</div>

		</div>
	</div>
<?php else : ?>
	<div class="custom-footer">
		<div class="footer-menu">

			<div class="container">
				<a href="<?php echo site_url(); ?>" aria-current="page">Return</a>

				<div class="socials">
					<a href="mailto:garry@garryscott-irvine.com"><i class="mdi mdi-email" style="margin-right: 10px;"></i></a>
					<a href="https://twitter.com/gazzalon" target="_blank"><i class="mdi mdi-twitter" style="margin-right: 10px;"></i></a>
					<a href="https://www.instagram.com/garryscottirvine" target="_blank"><i class="mdi mdi-instagram" style="margin-right: 10px;"></i></a>
				</div>
			</div>

		</div>
	</div>
<?php endif; ?>



</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bin/materialize.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/smooth-scroll.js/dist/js/smooth-scroll.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/jquery.fitvids/jquery.fitvids.js"></script>


<script>
		$( document ).ready(function(){
			<!-- Mobile Menu Initialize  -->
			$(".button-collapse").sideNav();
		});
		// Fadein on load
		$('.hider').fadeIn(1500).removeClass('hidden');


		// Header Fade
		$(window).on("scroll", function(e) {
			if ($(window).scrollTop() >= $(".background-tone").height()) $(".background-tone").fadeIn(500);
			else $(".background-tone").fadeOut(500);
		});

		// Fitvids
		$(document).ready(function(){
	    // Target your .container, .wrapper, .post, etc.
	    $(".fitvids").fitVids();
	  });

</script>





</body>
</html>
