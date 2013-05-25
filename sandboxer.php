<?php
/**
 * Plugin Name:	Test-Plugin for GitHub Installer
 * Plugin URI:	http://yoda.neun12.de
 * Description:	This plugin lives only for testing with GitHub Installer
 * Version: 	0.1
 * Author: 		Ralf Albert
 * Author URI: 	http://yoda.neun12.de
 * Text Domain:
 * Domain Path:
 * Network:
 * License:		GPLv3
 */

namespace Example;

add_action( 'plugins_loaded', function(){ new Sandboxer; } );

class Sandboxer {

	public function __construct(){

		add_action( 'wp_dashboard_setup', array( $this, 'add_dashboard_widget' ) );

	}

	public function add_dashboard_widget(){

		wp_add_dashboard_widget(
			'debug-widget',
			'GitHub API Sandbox',
			array( $this, 'output' ),
			$control_callback = null
		);

	}

	public function output(){
		echo '<div class="wrap">';
		echo 'The GitHub Installer test plugin was successfully installed.';
		echo '</div>';
	}
}
