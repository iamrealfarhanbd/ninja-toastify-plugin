<?php
/*
Plugin Name: WP React Toastify
Plugin URI: https://www.example.com/wp-react-toastify/
Description: WP React Toastify is a WordPress plugin that integrates the Toastify library with React to provide a simple way to display toast notifications on your website.
Version: 1.0
Author: Farhan Ahmed
Author URI: https://www.example.com/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wprt
*/

add_action( 'admin_menu', 'wprt_init_menu' );

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

add_action( 'wp_enqueue_scripts', 'wprt_admin_enqueue_scripts' );
add_action( 'admin_enqueue_scripts', 'wprt_admin_enqueue_scripts' );


/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function wprt_admin_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'wprt-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_style( 'wprt-toastify-min-css', 'https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css');
    wp_enqueue_script( 'wprt-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
    wp_enqueue_script( 'wprt-toastify-min-js', 'https://cdn.jsdelivr.net/npm/toastify-js', array(), '1.0.1', true );
}