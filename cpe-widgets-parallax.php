<?php
/*
Plugin Name: CPE Widgets Parallax
Plugin URI:  https://github.com/zulfgani/cpep-widgets-parallax
Description: Add parallax scrolling image effect on your widgets.
Version:     1.0.0
Author:      CPEngineered
Author URI:  https://github.com/zulfgani/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: cpe-widgets-parallax
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die( esc_html_e( 'With great power comes great responsibility.', 'cpep-widgets-parallax' ) );

require_once( dirname( __FILE__ ) . '/classes/class-cpe-auto-updater.php' );

function cpe_activate_autoupdate() {
	$plugin_slug = plugin_basename( __FILE__ ); // e.g. `hello/hello.php`.
	$gh_user = 'zulfgani'; // The user name of GitHub.
	$gh_repo = 'cpep-widgets-parallax'; // The repository name of your plugin.

	// Activate automatic update.
	new CPE\WidgetParallax\CPE_Auto_Updater( $plugin_slug, $gh_user, $gh_repo );
}
add_action( 'init', 'cpe_activate_autoupdate' );