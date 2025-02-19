<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Social_Sidebar
 * @subpackage Rs_Social_Sidebar/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Rs_Social_Sidebar
 * @subpackage Rs_Social_Sidebar/public
 * @author     Rohit <rohitsinghal.rs@gmail.com>
 */
class Rs_Social_Sidebar_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;
        $this->rs_social_sidebar_options = get_option($this->plugin_name);

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rs_Social_Sidebar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rs_Social_Sidebar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rs-social-sidebar-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rs_Social_Sidebar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rs_Social_Sidebar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rs-social-sidebar-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Adding plugin_name in body class.
	 *
	 * @since    1.0.0
	 */
	public function rs_social_sidebar_body_class( $classes ) {
	    $classes[] = $this->plugin_name;
	    return $classes;
	}

	/**
	 * Render the partial.
	 *
	 * @since    1.0.0
	 */
	 
	public function rs_social_sidebar_display() {
	    include_once( 'partials/rs-social-sidebar-public-display.php' );
	}

}
