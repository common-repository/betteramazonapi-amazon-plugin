<?php
/*
Plugin Name: betterAmazonAPI
Plugin URI: http://www.codersx.net/blog/betteramazonapi-amazon-produkte-in-wordpress-anzeigen/
Description: Make money from your blog by advertising Amazon.com products specifically related to the topic of your posts.
Version: 1.2
Author: CodersX - basen on AmazonFeed
Author URI: http://www.codersx.net
Requires: WordPress Version 2.3 and PHP 5.x
*/

	// Include the class once if it doesn't exist.
	include_once("php/betterAmazonAPI.class.php");

	// Create an instance of the class once, if it doesn't exist.
	if(class_exists("betterAmazonAPI") AND !isset($bAAObj))
	{
		// Instantiate new instance of the class.
		$bAAObj = new betterAmazonAPI();
		
		/*
		 * Debugging Controls:
		 * Only change these if the plugin is not working properly for you and you want
		 * to try and find out why.
		 * 
		 * debug_mode: choose what level of debugging to use
		 *   options are:
		 *   off 	- nothing is sent to the log
		 *   basic	- basic messages are logged
		 *   all		- all possible debug messages are logged.
		 * 
		 * debug_visible: set this to true if you wish debugging messages to be
		 * visible on the live website as they occur.
		 *   options are:
		 *   true
		 *   false
		 *  
		 */
		$bAAObj->debug_mode = 'all';
		$bAAObj->debug_visible = false;
		
		/**
		 * You shouldn't need to edit anything beyond this point.
		 */
		 
		// Define variables for AmazonFeed
		$bAAObj->basePath = dirname(__FILE__);
		$bAAObj->baseFileName = basename(__FILE__);
		$bAAObj->urlPath = get_option('siteurl') . str_replace(ABSPATH, "/", $bAAObj->basePath);

		// Add hooks as necessary to connect to WordPress
		add_action('admin_menu', array(&$bAAObj, 'wp_admin_init'));
		add_action('admin_menu', array(&$bAAObj, 'add_custom_box'));
		add_action('admin_notices', array(&$bAAObj, 'wp_admin_notices'));

		add_action('save_post',  array(&$bAAObj, 'save_postdata'));
		add_action('edit_post',  array(&$bAAObj, 'save_postdata'));
		add_action('publish_post',  array(&$bAAObj, 'save_postdata'));

		add_action('wp_head', array(&$bAAObj, 'wp_head'));
		add_action('admin_head', array(&$bAAObj, 'admin_head'));

		add_action('widgets_init', array(&$bAAObj, 'widget_init'));
		add_action('init', array(&$bAAObj, 'bAALinkHopper'));
		
		register_deactivation_hook( __FILE__, array(&$bAAObj, 'unInstall') );
		

		// Only add actions to the posts and live blog if the object is live (meaning ready to go)
		if($bAAObj->live)
		{
			add_action('the_content', array(&$bAAObj, 'wp_content'),1);
			//print_r($bAAObj->search("computer", false, false, false, $options));
		}
	}
