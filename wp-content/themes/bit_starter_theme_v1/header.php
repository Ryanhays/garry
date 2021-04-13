<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bit_starter_theme_v1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.css?ver=4.6.8"  media="screen,projection"/>
<link rel="stylesheet" href="https://use.typekit.net/dto8qdp.css">
<link href="<?php bloginfo('template_url'); ?>/bower_components/mdi/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.png" type="image/x-icon" />
<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<!-- Fullscreen Page Background -->
<?php
$image = get_field('background_image');
if( !empty($image) ): ?>
	<div class="fullscreen-background hider" style="background:url('<?php echo $image['url']; ?>'); background-size:cover;"></div>
<?php endif; ?>




<div id="page" class="site">

	<header id="masthead" class="site-header hider" role="banner">
		<div class="site-branding">

		</div><!-- .site-branding -->

		<div class="">
			<nav id="menubar">
				<div class="background-tone"></div>
		    <div class="nav-wrapper">
		      <a href="<?php echo site_url(); ?>" class="brand-logo">GARRY SCOTT-IRVINE</a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class' => 'right hide-on-med-and-down' ) ); ?>

					<a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="material-icons">reorder</i></a>
					<ul class="side-nav" id="mobile-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu-mobile') ); ?>
		      </ul>

				</div>
		  </nav>
		</div>



		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->



	<div id="content" class="site-content">
