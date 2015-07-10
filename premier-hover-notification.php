<?php
/**
 * Plugin Name: Premier Hover Notification for Wordpress
 * Plugin URI: 
 * Description: Add notification that hovers over content
 * Version: 1.0
 * Author: Andrew Dushane
 * Author URI: http://premierprograming.com
 * License: GPL2
 */

include_once('includes/options.php');

/**
 * Enqueue style sheet
 *
 */
function premier_hover_notification_style() {
	wp_enqueue_style( 'premier_hover_notification_style', plugins_url( 'css/style.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'premier_hover_notification_style' );



/**
 * Output custom styles to HTML head
 *
 */
function premier_notification_hover_custom_styles() {
	$options = get_option('premier_hover_notification');
	$output  = '<style type="text/css">';
		$output .= ".premier-hover-notification {";
			$output .= 'background: ' . esc_html( $options['background_color'] ) . ';';
			$output .= 'color: ' . esc_html( $options['text_color'] ) . ';';
			$output .= 'width: ' . esc_html( $options['width'] ) . ';';
			$output .= 'height: ' . esc_html( $options['height'] ) . ';';
		$output .= "}";
	$output .= "</style>";
	echo $output;
}
add_action( 'wp_head' , 'premier_notification_hover_custom_styles' );


/**
 * Display hover notification
 *
 */
function premier_notification_hover_display() {
	$options = get_option('premier_hover_notification');
	if( $options['extra_class'] != '' ) {
		$class = ' ' . esc_html( $options['extra_class'] );
	} else $class = '';
	if( $options['enable_display'] == 'Y' ) {
		$output  = '<div class="premier-hover-notification' . $class . '">';
		$output .= wp_kses_post( $options['content'] );
		$output .= '</div>';
		echo $output;
	}
}
add_action( 'loop_start' , 'premier_notification_hover_display' );
