<?php
/*
Plugin Name: Ninja Toastify
Plugin URI: https://wordpress.org/plugins/ninja-toastify/
Description: Ninja Toastify is a WordPress plugin that integrates the Toastify library with React to provide a simple way to display toast notifications on your website.
Version: 1.0.0
Requires at least: 5.2
Requires PHP: 7.2
Author: Farhan Ahmed
Author URI: https://github.com/iamrealfarhanbd
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain: ninja-toastify
Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly      


/**
 * My All Shortcode files.
 *
 * @return void
 */

include_once( plugin_dir_path( __FILE__ ) . 'templates/ntfy_toastify.php' );
include_once( plugin_dir_path( __FILE__ ) . 'templates/ntfy_copy_toastify.php' );

/**
 * Init Admin Menu.
 *
 * @return void
 */
add_action( 'admin_menu', 'ntfy_init_menu' );

function ntfy_init_menu() {
    add_menu_page( __( 'Ninja Toastify', 'ntfy'), __( 'Ninja Toastify', 'ntfy'), 'manage_options', 'ntfy', 'ntfy_admin_page', plugin_dir_url( __FILE__ ) . 'assets/logo-min.png', '2.1' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */

function ntfy_admin_page() {
    require_once plugin_dir_path( __FILE__ ) . 'templates/ntfy_app.php';
}

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */

add_action( 'wp_enqueue_scripts', 'ntfy_frontend_enqueue_scripts' );

add_action( 'admin_enqueue_scripts', 'ntfy_admin_enqueue_scripts' );

function ntfy_admin_enqueue_scripts() {
    if ( isset( $_GET['page'] ) && $_GET['page'] === 'ntfy' ) {
        wp_enqueue_script('jquery');
        wp_enqueue_style( 'ntfy-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
        wp_enqueue_style( 'ntfy-style-admin', plugin_dir_url( __FILE__ ) . 'assets/css/ntfy_style.css' );
        wp_enqueue_style( 'ntfy-toastify-min-css', plugin_dir_url( __FILE__ ) . 'assets/css/ntfy_toastify.min.css');
        wp_enqueue_script( 'ntfy-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
        wp_enqueue_script( 'ntfy-toastify-min-js', plugin_dir_url( __FILE__ ) . 'assets/js/ntfy.toastify.js', array(), '1.0.0', true );
}
}
function ntfy_frontend_enqueue_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_style( 'ntfy-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
        wp_enqueue_style( 'ntfy-style-admin', plugin_dir_url( __FILE__ ) . 'assets/css/ntfy_style.css' );
        wp_enqueue_style( 'ntfy-toastify-min-css', plugin_dir_url( __FILE__ ) . 'assets/css/ntfy_toastify.min.css');
        wp_enqueue_script( 'ntfy-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
        wp_enqueue_script( 'ntfy-toastify-min-js', plugin_dir_url( __FILE__ ) . 'assets/js/ntfy.toastify.js', array(), '1.0.0', true );
}
?>