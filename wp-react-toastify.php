<?php
/*
Plugin Name: WP React Toastify
Plugin URI: https://wordpress.org/plugins/wp-react-toastify/
Description: WP React Toastify is a WordPress plugin that integrates the Toastify library with React to provide a simple way to display toast notifications on your website.
Version: 1.0.0
Requires at least: 5.2
Requires PHP: 7.2
Author: Farhan Ahmed
Author URI: https://github.com/iamrealfarhanbd
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: wprt
Domain Path: /languages
*/


/**
 * @package Akismet
 */
/*
Plugin Name: Akismet Anti-Spam
Plugin URI: https://akismet.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 5.0.1
Requires at least: 5.0
Requires PHP: 5.2
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}



/**
 * My All Shortcode files.
 *
 * @return void
 */

include_once( plugin_dir_path( __FILE__ ) . 'templates/wprt_toastify.php' );

/**
 * Init Admin Menu.
 *
 * @return void
 */
add_action( 'admin_menu', 'wprt_init_menu' );

function wprt_init_menu() {
    add_menu_page( __( 'WP React Toastify', 'wprt'), __( 'WP React Toastify', 'wprt'), 'manage_options', 'wprt', 'wprt_admin_page', 'dashicons-admin-post', '2.1' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */

function wprt_admin_page() {
    require_once plugin_dir_path( __FILE__ ) . 'templates/wprt_app.php';
}



/**
 * Enqueue scripts and styles.
 *
 * @return void
 */

add_action( 'wp_enqueue_scripts', 'wprt_admin_enqueue_scripts' );
add_action( 'admin_enqueue_scripts', 'wprt_admin_enqueue_scripts' );

function wprt_admin_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'wprt-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_style( 'wprt-toastify-min-css', 'https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css');
    wp_enqueue_script( 'wprt-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
    wp_enqueue_script( 'wprt-toastify-min-js', 'https://cdn.jsdelivr.net/npm/toastify-js', array(), '1.0.1', true );
}
