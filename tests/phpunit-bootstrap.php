<?php
/**
 * Bootstrap the plugin unit testing environment.
 *
 * Use the WP testing library bundled with wp-env.
 */

require_once dirname( __DIR__ ) . '/wp-content/vendor/autoload.php';

$wp_tests_dir = getenv( 'WP_PHPUNIT__DIR' ); // Configured by wp-phpunit/wp-phpunit.

if ( empty( $wp_tests_dir ) || ! is_dir( $wp_tests_dir ) ) {
	throw new RuntimeException( 'Failed to find the WP_PHPUNIT__DIR directory.' );
}

// Load the wp-tests-config.php from wp-env since it knows about the database.
$wp_env_tests_dir = getenv( 'WP_TESTS_DIR' );

if ( is_readable( $wp_env_tests_dir . '/wp-tests-config.php' ) ) {
	putenv( sprintf( 'WP_PHPUNIT__TESTS_CONFIG=%s/wp-tests-config.php', $wp_env_tests_dir ) );
}

// Load all plugins during the tests.
$plugin_files = array_map(
	function ( $plugin_file ) {
		$contents = file_get_contents( $plugin_file );

		if ( false !== stripos( $contents, 'Plugin Name: ' ) ) {
			return sprintf( '%s/%s', basename( dirname( $plugin_file ) ), basename( $plugin_file ) );
		}

		return null;
	},
	glob( dirname( __DIR__ ) . '/wp-content/plugins/*/*.php' )
);

global $wp_tests_options; // WP testing library uses this to define option values.

$wp_tests_options = array(
	'active_plugins' => array_filter( $plugin_files ),
);

// Include all helper functions.
require_once $wp_tests_dir . '/includes/functions.php';

// Load WP and start tests.
require_once $wp_tests_dir . '/includes/bootstrap.php';
