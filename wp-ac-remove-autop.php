<?php
/*
  Plugin Name: WP AC remove Auto P
  Plugin URI: https://github.com/ambercouch/wp-ac-remove-autop
  Description: Hate WordPress messing with your markup? But you still need those line breaks and paragraphs on basic post and pages. This plugin removes the wpautop filter from individual posts and pages.
  Version: 0.1
  Author: Richie Ambercouch
  Author URI: http://ambercouch.co.uk
 */
if ( ! defined( 'WPACRAP_PLUGIN_DIR' ) ) {
    define('WPACRAP_PLUGIN_DIR', untrailingslashit(dirname(__FILE__)));
}

if (! function_exists('get_field')) {
    if (!defined('ACF_LITE')) {
        define('ACF_LITE', true);
    }
}

include WPACRAP_PLUGIN_DIR . '/vendor/advanced-custom-fields/acf.php';
include WPACRAP_PLUGIN_DIR . '/admin/custom-fields.php';
include WPACRAP_PLUGIN_DIR . '/frontend/actions.php';