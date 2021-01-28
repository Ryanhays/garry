<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bit_starter_theme_v1
 */

get_header(); ?>


<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="entry-header iam">
					<h5 class="page-title iam">
						<img src="<?php bloginfo('template_url'); ?>/images/iam-logo.png">
						Intelligent Artist Management
					</h5>
			</header><!-- .page-header -->

			<div class="entry-content">
				<?php the_field('introduction_text', 14); ?>
			</div><!-- .entry-content -->

			<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content-artists', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php
get_footer();
