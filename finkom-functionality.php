<?php
/*
Plugin Name: Your Site's Functionality Plugin
Description: All of the important functionality of your site belongs in this.
Version: 0.1
License: GPL
Author: Your Name
Author URI: yoururl
*/

function change_woothemes_features_single_slug($single_slug) {
	$single_slug = _x( 'service', 'single post url slug', 'woothemes-features' );
 
	return $single_slug;
}

// add_filter('woothemes_features_single_slug', 'change_woothemes_features_single_slug');


?>

