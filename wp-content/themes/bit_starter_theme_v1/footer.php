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
