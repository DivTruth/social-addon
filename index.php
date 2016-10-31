<?php 
/**
 * Social
 * 		This is a Div Starter addon for adding social features to your WordPress site
 * 		NOTE: Depends on ACF 5.0+ and Div Library plugins
 * 
 * @package 	Social Icons
 * @subpackage 	Addon
 * @author 	   	Nick Worth
 * @version     0.1 (Alpha)
 * @link        https://github.com/DivTruth/social-addon
 */

/**
 * Must load through action otherwise will create duplicate
 * site application instances because of multiple PHP request
 */
add_action( 'plugins_loaded', 'load_social_icon_addon' );

function load_social_icon_addon(){
	include_once( dirname(__FILE__).'/social-icon.php' );		# Load Addon Class
	include_once( dirname(__FILE__).'/acf-social-icons.php' );	# Register ACF Fields
	if(class_exists('Social_Icon')){
		/* Load Social Icon class */
		$social_icons = new Social_Icon();
		add_action( 'setup_theme', array($social_icons, 'init') );
	}
}

?>