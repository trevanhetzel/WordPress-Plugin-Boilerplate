<?php
// Admin-specific functionality
class Race_Series_Admin {

	// Plugin ID
	private $plugin_name;

	// Plugin version
	private $version;

	// Initialize the class and set its properties
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	// Register styles
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/race-series-admin.css', array(), $this->version, 'all' );
	}

	// Register JavaScript
	public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/race-series-admin.js', array( 'jquery' ), $this->version, false );
	}
}
