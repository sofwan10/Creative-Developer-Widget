<?php
/**
 * Plugin Name: Creative Developer Widget
 * Description: A custom Elementor widget that displays custom image and hover video. Can create and design with our own creativity. Great for animation and video backgrounds.
 * Version: 1.0
 * Author: Ahmad Sofwan 
 * Author URI: https://github.com/sofwan10
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function register_custom_widget_final() {
    require_once plugin_dir_path( __FILE__ ) . 'widget.php';
    \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new My_Custom_Widget_Final() );
}
add_action( 'elementor/widgets/widgets_registered', 'register_custom_widget_final' );
