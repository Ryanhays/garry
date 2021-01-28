<?php
/*
Template Name: Consultancy Theme
*/
get_header(); ?>


<div class="container">
	<!-- Page Content goes here -->

	<div id="primary" class="content-area hider">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'consultancy' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
		<hr class="hider">
		<p class="hider">Contact Garry re Corporate consultancies at <a href="mailto:garry@garryscott-irvine.com">garry@garryscott-irvine.com </a><p>
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>
