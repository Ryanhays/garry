<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bit_starter_theme_v1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
	</header><!-- .entry-header -->

	<div class="row">
		<div class="col 12 m6 entry-content fitvids">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bit_starter_theme_v1' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<div class="col 12 m6 contact-form">
			<?php echo do_shortcode( '[contact-form-7 id="91" title="Main Contact Form"]' ); ?>
		</div>
	</div>

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
