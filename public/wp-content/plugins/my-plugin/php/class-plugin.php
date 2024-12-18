<?php

namespace My_Vendor\My_Plugin;

class Plugin {
	/**
	 * The plugin file.
	 *
	 * @var string
	 */
	private string $plugin_file;
	
	public function __construct( string $plugin_file ) {
		$this->plugin_file = $plugin_file;
	}

	public function init() {
		// TODO: Bootstrap your plugin here.
	}
}