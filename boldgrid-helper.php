<?php

/**
 * Plugin Name: Nfinite Admin Dashboard
 * Plugin URI: https://sitesbyyogi.com
 * Description: A WordPress plugin for managing admin menus, dashboard widgets, and more.
 * Version: 1.0.0
 * Author: Yogi
 * Author URI: https://sitesbyyogi.com
 * License: GPL2
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Include Admin Classes
require_once plugin_dir_path( __FILE__ ) . 'admin/class-boldgrid-helper-admin-assets.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/class-boldgrid-helper-dashboard-widget.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/class-boldgrid-helper-admin-menu.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/class-boldgrid-helper-admin-toolbar.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/class-boldgrid-helper-admin-css.php';

// Initialize the Plugin
function run_boldgrid_helper() {
    $plugin_name = 'boldgrid-helper';
    $version = '1.0.0';

    new Boldgrid_Helper_Admin_Assets($plugin_name, $version);
    new Boldgrid_Helper_Dashboard_Widget();
    new Boldgrid_Helper_Admin_Menu();
    new Boldgrid_Helper_Admin_Toolbar();
    new Boldgrid_Helper_Admin_CSS();
}

run_boldgrid_helper();