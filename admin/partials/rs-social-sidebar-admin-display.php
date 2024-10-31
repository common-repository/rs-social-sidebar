<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Social_Sidebar
 * @subpackage Rs_Social_Sidebar/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <form method="post" name="social_options" action="options.php">

    <?php 
	    //Grab all options      
	    $options = get_option($this->plugin_name);

	    $facebook_page_id = $options['facebook_page_id'];
	    $twitter_widget_id = $options['twitter_widget_id'];
	    $google_plus_page_id = $options['google_plus_page_id'];
	    $icon_alignment = $options['icon_alignment'];
    ?>


    <?php
        settings_fields( $this->plugin_name );
        do_settings_sections( $this->plugin_name );
    ?>

	    <!-- insert facebook page id -->
	    <fieldset>
	        <legend class="screen-reader-text"><span><?php _e('Facebook page ID', $this->plugin_name);?></span></legend>
	        <label for="<?php echo $this->plugin_name;?>-facebook_page_id">
	            <input type="text" id="<?php echo $this->plugin_name;?>-facebook_page_id" name="<?php echo $this->plugin_name;?>[facebook_page_id]" value="<?php echo $facebook_page_id; ?>" />
	            <span><?php esc_attr_e( 'Facebook page ID', $this->plugin_name ); ?></span>
	        </label>
	    </fieldset>

	    <!-- insert twitter widget id -->
	    <fieldset>
	        <legend class="screen-reader-text"><span><?php _e('Twitter widget ID', $this->plugin_name);?></span></legend>
	        <label for="<?php echo $this->plugin_name;?>-twitter_widget_id">
	            <input type="text" id="<?php echo $this->plugin_name;?>-twitter_widget_id" name="<?php echo $this->plugin_name;?>[twitter_widget_id]" value="<?php echo $twitter_widget_id; ?>" />
	            <span><?php esc_attr_e( 'Twitter widget ID', $this->plugin_name ); ?></span>
	        </label>
	    </fieldset>

	    <!-- insert google plus page id -->
	    <fieldset>
	        <legend class="screen-reader-text"><span><?php _e('Google Plus page ID', $this->plugin_name);?></span></legend>
	        <label for="<?php echo $this->plugin_name;?>-google_plus_page_id">
	            <input type="text" id="<?php echo $this->plugin_name;?>-google_plus_page_id" name="<?php echo $this->plugin_name;?>[google_plus_page_id]" value="<?php echo $google_plus_page_id; ?>" />
	            <span><?php esc_attr_e( 'Google Plus page ID', $this->plugin_name ); ?></span>
	        </label>
	    </fieldset>

	    <hr>
	    
	    <!-- insert position of social sidebar -->
	    <fieldset>
	        <legend class="screen-reader-text"><span><?php _e('Icon Alignment', $this->plugin_name);?></span></legend>
	        <label for="<?php echo $this->plugin_name;?>-icon_alignment">
	        	<select id="<?php echo $this->plugin_name;?>-icon_alignment" name="<?php echo $this->plugin_name;?>[icon_alignment]">
	        		<option value="top-left" <?php selected( $icon_alignment, "top-left"); ?>><?php _e('Top Left', $this->plugin_name);?></option>
	        		<option value="top-right" <?php selected( $icon_alignment, "top-right"); ?>><?php _e('Top Right', $this->plugin_name);?></option>
	        		<option value="bottom-left" <?php selected( $icon_alignment, "bottom-left"); ?>><?php _e('Bottom Left', $this->plugin_name);?></option>
	        		<option value="bottom-right" <?php selected( $icon_alignment, "bottom-right"); ?>><?php _e('Bottom Right', $this->plugin_name);?></option>
	        	</select>
	            <span><?php esc_attr_e( 'Icon Alignment', $this->plugin_name ); ?></span>
	        </label>
	    </fieldset>

        <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>


    </form>

</div>