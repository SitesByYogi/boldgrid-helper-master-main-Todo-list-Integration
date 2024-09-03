<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://sitesbyyogi.com
 * @since      1.0.0
 *
 * @package    Boldgrid_Helper
 * @subpackage Boldgrid_Helper/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Boldgrid_Helper
 * @subpackage Boldgrid_Helper/includes
 * @author     sitesbyyogi <contact@sitesbyyogi.com>
 */
class Boldgrid_Helper_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'boldgrid-helper',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
