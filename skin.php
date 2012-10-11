<?php

/*
Name: Thesis BizLife
Author: Puneet Sahalot
Author URI: http://icustomizethesis.com/
Version: 1.0
Description: Build your portfolio or business site quickly with a few clicks. It's all possible with the new beast, Thesis 2.0 and BizLife 
Class: thesis_bizlife
*/

class thesis_bizlife extends thesis_skin {
	
	// list of box classes you want to add to the queue
	// do not give these strings for keys or everything will blow up
	public $boxes_class_list = array(
		'diy_logo_box',
		'bizlife_credit_box'
	);

	// pseudo constructor function. use this over __construct() or you risk and explosion ;)
	function construct() {
		// filter that contains all the boxes
		add_filter('thesis_boxes', array($this, 'add_boxes'));
		add_filter('widget_text', 'do_shortcode');
		// load TGM plugin activation library for installing Soliloquy Lite
		require_once(dirname(__FILE__) . '/tgmpa/tgm-plugin-installation.php');
	}

	function add_boxes($boxes) {
		// require the box file, presumably box.php and packaged in the skin
		require_once(dirname(__FILE__) . '/boxes/logo-box/box.php');
		require_once(dirname(__FILE__) . '/boxes/credit-box/box.php');

		// merge the main box array with yours.
		return array_merge($boxes, $this->boxes_class_list);
	}
}