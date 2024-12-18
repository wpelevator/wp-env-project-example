<?php
/**
 * Plugin Name: My Plugin
 */

use My_Vendor\My_Plugin\Plugin;

$plugin = new Plugin( __FILE__ );

add_action( 'plugins_loaded', [ $plugin, 'init' ] );