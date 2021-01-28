<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bit_starter_theme_v1
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col s12 m12">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->

				<hr class="hider">
				<p class="hider">Contact us regarding <?php the_field('first_name'); ?> <?php the_field('second_name'); ?> at <a href="mailto:garry@garryscott-irvine.com">garry@garryscott-irvine.com </a><p>
			</div><!-- #primary -->
		</div>
	</div>
</div>

<div class="next-post left-align ">
	<h5><?php previous_post_link('%link', 'NEXT >'); ?></h5>
	<p><?php previous_post_link('%link'); ?></p>
</div>

<div class="prev-post right-align ">
	<h5><?php next_post_link('%link', '< PREV'); ?></h5>
	<p><?php next_post_link('%link'); ?></p>
</div>

<?php get_footer(); ?>
