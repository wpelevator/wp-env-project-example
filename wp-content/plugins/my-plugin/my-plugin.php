<?php
/**
 * Plugin Name: My Plugin
 */

use My_Vendor\My_Plugin\Plugin;

$my_plugin = new Plugin( __FILE__ );

add_action( 'plugins_loaded', array( $my_plugin, 'init' ) );
