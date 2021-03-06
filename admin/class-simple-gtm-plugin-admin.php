<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://gegeriyadi.com/
 * @since      1.0.0
 *
 * @package    Simple_Gtm_Plugin
 * @subpackage Simple_Gtm_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Simple_Gtm_Plugin
 * @subpackage Simple_Gtm_Plugin/admin
 * @author     Gege Riyadi <me@gegeriyadi.com>
 */
class Simple_Gtm_Plugin_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Simple_Gtm_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Simple_Gtm_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/simple-gtm-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Simple_Gtm_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Simple_Gtm_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/simple-gtm-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function admin_init_register() {
		register_setting( 'simple-gtm-group', 'simplegtm_containerid' );
	}

	public function simple_gtm_plugin_options_page()
	{
	    add_submenu_page(
	        'tools.php',
	        'Simple GTM Plugin',
	        'Simple GTM',
	        'manage_options',
	        'simple-gtm-plugin',
	        array( $this, 'display_plugin_setup_page' )
	    );
	}

	public function display_plugin_setup_page()
	{
		// get option
		$containerId = get_option('simplegtm_containerid');

		// show form on admin page
		include_once( 'partials/simple-gtm-plugin-admin-display.php' );
	}

	/**
	 * Add plugin setting link
	 */
	function plugin_action_links( $links ) {

		$settings_link = '<a href="tools.php?page=simple-gtm-plugin">' . __( 'Settings', 'simple-gtm-plugin' ) . '</a>';

		array_push( $links, $settings_link );

		return $links;
	}

}
