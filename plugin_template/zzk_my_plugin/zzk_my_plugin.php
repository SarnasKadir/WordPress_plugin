<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://zazakicomputer.com/about-me/
 * @since             1.0.0
 * @package           Zzk_my_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       ZZK My Plugin
 * Plugin URI:        https://https://zazakicomputer.com/wordpress-plugin/
 * Description:       This is a WP Plugin template to start developing WordPress Plugin
 * Version:           1.0.0
 * Author:            Sarnas Kadir
 * Author URI:        https://https://zazakicomputer.com/about-me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zzk_my_plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ZZK_MY_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-zzk_my_plugin-activator.php
 */
function activate_zzk_my_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zzk_my_plugin-activator.php';
	Zzk_my_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-zzk_my_plugin-deactivator.php
 */
function deactivate_zzk_my_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-zzk_my_plugin-deactivator.php';
	Zzk_my_plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_zzk_my_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_zzk_my_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-zzk_my_plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_zzk_my_plugin() {

	$plugin = new Zzk_my_plugin();
	$plugin->run();

}
run_zzk_my_plugin();
