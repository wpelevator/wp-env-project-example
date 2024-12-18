<?php

namespace My_Vendor\My_Theme;

class Theme {
	/**
	 * Theme directory.
	 *
	 * @var string
	 */
	private string $theme_dir;

	public function __construct( string $theme_dir ) {
		$this->theme_dir = $theme_dir;
	}

	public function get_slug() {
		return basename( $this->theme_dir );
	}

	public function init() {
		// TODO: Bootstrap your theme here.
	}
}
