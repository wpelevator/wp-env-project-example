<?php
/**
 * Plugin Name: Vendor Autoload
 */

if ( is_readable( dirname( __DIR__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __DIR__ ) . '/vendor/autoload.php';
}
