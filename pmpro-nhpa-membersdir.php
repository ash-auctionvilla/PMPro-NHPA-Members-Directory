<?php
/*
Plugin Name: PMPro NHPA Members Directory
Plugin URI: https://www.upwork.com/companies/~01caf98798b24dd9af
Description: PMPro NHPA Members Directory Plugin
Version: 0.0.1
Author: Ashik72
Author URI: https://www.upwork.com/companies/~01caf98798b24dd9af
License: GPLv2 or later
Text Domain: pmpro_nhpa
*/

if(!defined('WPINC')) // MUST have WordPress.
	exit('Do NOT access this file directly: '.basename(__FILE__));

if (!class_exists('Kint') && file_exists(dirname( __FILE__ ) . '/kint/Kint.class.php'))
	include_once ( dirname( __FILE__ ) . '/kint/Kint.class.php' );


if (!function_exists('d')) {

	function d($data) {

		ob_start();
		var_dump($data);
		$output = ob_get_clean();
		echo $output;
	}
}

define( 'pmpro_nhpa_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'pmpro_nhpa_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if ( ! defined( 'DS' ) ) define( 'DS', DIRECTORY_SEPARATOR );


if ( in_array( 'paid-memberships-pro/paid-memberships-pro.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	// Brace Yourself
	require_once( plugin_dir_path( __FILE__ ) . 'plugin_loader.php' );

	// Start the Engine
	//add_action( 'plugins_loaded', array( 'MYPLUG', 'get_instance' ) );

}
