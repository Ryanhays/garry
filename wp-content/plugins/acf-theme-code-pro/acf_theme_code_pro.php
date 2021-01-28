<?php
/*
Plugin Name: Advanced Custom Fields: Theme Code Pro
Plugin URI: https://hookturn.io/downloads/acf-theme-code-pro/
Description: Generates theme code for ACF Pro field groups to speed up development.
Version: 99.1.0
Author: hookturn
Author URI: http://www.hookturn.io/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// define version
define( 'HOOKTURN_ITEM_VERSION', '2.1.0' );

// Check for dashboard or admin panel
if ( is_admin() ) {

	/**
	 * Classes
	 */
	include('core/core.php');
	include('core/locations.php');
	include('core/group.php');
	include('core/field.php');

	/**
	 * TC Pro classes
	 */
	if ( file_exists( plugin_dir_path( __FILE__ ) . 'pro' ) ) {
		include('pro/core/flexible-content-layout.php');
	}

	/**
	 * Single function for accessing plugin core instance
	 *
	 * @return ACFTCP_Core
	 */
	function acftcp()
	{
		static $instance;
		if ( !$instance )
			$instance = new ACFTCP_Core( plugin_dir_path( __FILE__ ), plugin_dir_url( __FILE__ ), HOOKTURN_ITEM_VERSION );
		return $instance;
	}

	acftcp(); // kickoff

}
