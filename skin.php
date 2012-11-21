<?php

/*
Name: Thesis BizLife
Author: Puneet Sahalot
Author URI: http://icustomizethesis.com/
Version: 1.0.1
Description: Build your portfolio or business site quickly with a few clicks. It's all possible with the new beast, Thesis 2.0 and BizLife 
Class: thesis_bizlife
*/

class thesis_bizlife extends thesis_skin {
	
	
	// pseudo constructor function. use this over __construct() or you risk and explosion ;)
	function construct() {
		// load Google fonts
		add_action( 'wp_enqueue_scripts', array($this,'bizlife_google_fonts') );
		
		add_filter('widget_text', 'do_shortcode');
		// load TGM plugin activation library for installing Soliloquy Lite
		require_once(dirname(__FILE__) . '/tgmpa/tgm-plugin-installation.php');
	}

	function bizlife_google_fonts() {
   	 wp_enqueue_style( 
    		'google-fonts', 
	    	'http://fonts.googleapis.com/css?family=Droid+Serif:400,700', 
	    	array()
	    );
	}

	
}