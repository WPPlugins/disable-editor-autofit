<?php
/*
Plugin Name: Disable Editor Autofit
Description: Prevents the visual editor from automatically expanding the height to fit the content - the way Wordpress 3.9 was
Version: 1.0
Author: WPLobtar
Author URI: https://profiles.wordpress.org/wplobtar
*/
if (is_admin())
{
	add_filter('wp_editor_expand',false);
}
?>