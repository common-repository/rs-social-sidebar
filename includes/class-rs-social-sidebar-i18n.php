<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Social_Sidebar
 * @subpackage Rs_Social_Sidebar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Rs_Social_Sidebar
 * @subpackage Rs_Social_Sidebar/includes
 * @author     Rohit <rohitsinghal.rs@gmail.com>
 */
class Rs_Social_Sidebar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'rs-social-sidebar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
