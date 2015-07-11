<div class="wrap">
	
	<div id="icon-options-general" class="icon32"></div>
	<h2>Premier Hover Notificaiton Options</h2>
    <?php if( isset( $update_message ) && $update_message != '' ) { ?>
        <div class="updated">
            <p><?php echo $update_message; ?></p>
        </div>
    <?php } ?>
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
						<div class="inside">
							<form name="premier_hover_notification_options_form" method="post" action="<?php echo $options_page_url; ?>">
								<input type="hidden" name="options_submitted" value="Y">
								<table class="form-table">	
									<h3>Enable Hover Notification?
									<fieldset>
										<label for="enable_display">
											<input name="enable_display" type="checkbox" id="enable_display" value="Y"<?php enable_display_checked( $enable_display ); ?> />
											<span><?php esc_attr_e( 'Your hover notification will not show unless this box is checked.', 'wp_admin_style' ); ?></span>
										</label>
									</fieldset>
									<h3>Notification Content:</h3>							
                                    <?php wp_editor( $content, 'premier_hover_notification_editor' ); ?>
									<h3>Notification styles:</h3>
									<tr>
										<td><label for="text_color">Text color:</label></td>
										<td>#<input name="text_color" id="text_color" type="text" value="<?php echo $text_color; ?>" class="regular-text" /></td>
										<td>Default: #000000 (black)</td>
									</tr>
									<tr>
										<td><label for="background_color">Background color:</label></td>
										<td>#<input name="background_color" id="background_color" type="text" value="<?php echo $background_color; ?>" class="regular-text" /></td>
										<td>Default: #FFFFFF (white)</td>
									</tr>
									<tr>
										<td><label for="width">Notification width (in px):</label></td>
										<td><input name="width" id="width" type="text" value="<?php echo $width; ?>" class="regular-text" />px</td>
										<td>Default: 300px</td>
									</tr>
									<tr>
										<td><label for="height">Notificaiton height (in px):</label></td>
										<td><input name="height" id="height" type="text" value="<?php echo $height; ?>" class="regular-text" />px</td>
										<td>Default: 200px</td>
									</tr>
									<tr>
										<td><label for="extra_class">CSS class to apply to notification div:</label></td>
										<td><input name="extra_class" id="extra_class" type="text" value="<?php echo $extra_class; ?>" class="regular-text" /><br>(Use this class to add custom styles using your own style sheet)</td>
										<td>Default: none</td>
									</tr>
								</table>
								<p><input class="button-primary" type="submit" name="Submit" value="Save Options" /></p>
							</form>
						</div> <!-- .inside -->
					</div> <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables .ui-sortable -->
				
			</div> <!-- post-body-content -->
			
			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
						
						<div class="inside">
							<h2>Developer Information</h2>
							<p>Author: Andrew Dushane, <a href="http://premierprograming.com" target="_blank">Premier Programing</a></p>
						</div><!-- .inside -->
						
					</div>  <!-- .postbox -->
					
				</div> <!-- .meta-box-sortables -->
				
			</div> <!-- #postbox-container-1 .postbox-container -->
			
		</div> <!-- #post-body .metabox-holder .columns-2 -->
		
		<br class="clear">
	</div> <!-- #poststuff -->
	
</div> <!-- .wrap -->
