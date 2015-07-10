<?php
if( is_admin() ) {
	/**
	 * Create admin menu entry
	 *
	 */
	function premier_hover_notification_options_menu() {
		add_menu_page(
			'Premier Hover Notification Options',
			'Hover Notification',
			'manage_options',
			'premier-hover-notification',
			'premier_hover_notification_options_page'
		);
	}
	add_action( 'admin_menu', 'premier_hover_notification_options_menu' );


	function premier_hover_notification_options_page() {
		
		/**
		 * Set defaults if no options present
		 *
		 */
		$check_options = get_option( 'premier_hover_notification' );
		if( !isset( $check_options ) || !is_array( $check_options ) ) {
			$options['content'] 		 = '';
			$options['text_color'] 	     = '#000000';
			$options['background_color'] = '#FFFFFF';
			$options['width'] 		     = '300px';
			$options['height'] 		     = '200px';
			$options['extra_class']      = '';
			$options['enable_display']   = '0';
			update_option( 'premier_hover_notification', $options );
		}
		
		/**
		 * Update options if submitted
		 *
		 */
		if( isset($_POST['options_submitted']) &&  $_POST['options_submitted'] == 'Y' ) {
			$options['content']		     = wp_kses_post($_POST['premier_hover_notification_editor']);
			$options['text_color'] 	     = '#' . esc_html($_POST['text_color']);
			$options['background_color'] = '#' . esc_html($_POST['background_color']);
			$options['width'] 		     = intval(esc_html($_POST['width'])) . 'px';
			$options['height'] 		     = intval(esc_html($_POST['height'])) . 'px';
			$options['extra_class']		 = esc_html($_POST['extra_class']);
			$options['enable_display']	 = esc_html($_POST['enable_display']);
			update_option( 'premier_hover_notification', $options );
			$update_message = 'Hover Notification options updated.';
		}
		
		/**
		 * Retrieve options from the options table
		 *
		 */
		$options = get_option('premier_hover_notification');
		if( $options != '' ) {
			$content 		  = wp_kses_post($options['content']);
			$text_color 	  = substr( esc_html($options['text_color']) , 1 );
			$background_color = substr( esc_html($options['background_color']) , 1);
			$width 			  = intval(esc_html($options['width']));
			$height 		  = intval(esc_html($options['height']));
			$extra_class  	  = esc_html($options['extra_class']);
			$enable_display   = esc_html($options['enable_display']);
		}
		
		function enable_display_checked( $enable_display ) {
			if( $enable_display == 'Y' ) {
				echo ' checked';
			}
			else return;
		}
		
		include_once('options-page.php');
	}
}
