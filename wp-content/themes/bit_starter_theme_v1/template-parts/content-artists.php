<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bit_starter_theme_v1
 */

?>
<div class="col s12 m4 artist-card">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header center-align">

			<?php if ( has_post_thumbnail() ) : ?>
			    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			        <?php the_post_thumbnail(); ?>
			    </a>
			<?php endif; ?>

			<a href="<?php the_permalink(); ?>" rel="bookmark">
				<h5 class="entry-title"><?php the_field('first_name'); ?></h5>
				<h6 class="entry-title"><?php the_field('second_name'); ?></h6>
			</a>

		</header><!-- .entry-header -->


		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
