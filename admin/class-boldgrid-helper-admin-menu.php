<?php

class Boldgrid_Helper_Admin_Menu {

    public function __construct() {
        add_action('admin_menu', [$this, 'register_admin_menu']);
    }

    public function register_admin_menu() {
        add_menu_page(
            'WPNfinite', // Page title
            'WPN Dashboard', // Menu title
            'manage_options', // Capability
            'boldgrid-helper-admin-page', // Menu slug
            [$this, 'admin_page'], // Callback function
            'dashicons-store', // Icon
            6 // Position
        );

        add_submenu_page(
            'boldgrid-helper-admin-page', // Parent slug
            'Web Vitals', // Page title
            'Web Vitals', // Menu title
            'manage_options', // Capability
            'boldgrid-helper-admin-sub-page', // Menu slug
            [$this, 'admin_sub_page'] // Callback function
        );

        add_submenu_page(
            'boldgrid-helper-admin-page', // Parent slug
            'Planning', // Page title
            'Planning', // Menu title
            'manage_options', // Capability
            'boldgrid-helper-admin-sub-page-2', // Menu slug
            [$this, 'admin_sub_page_2'] // Callback function
        );

       /* add_submenu_page(
            'boldgrid-helper-admin-page', // Parent slug
            'Tasks List', // Page title
            'Tasks List', // Menu title
            'manage_options', // Capability
            'boldgrid-helper-admin-sub-page-3', // Menu slug
            [$this, 'admin_sub_page_3'] // Callback function
        ); */
    } 

    public function admin_page() {
        $path = plugin_dir_path(__FILE__) . '../partials/boldgrid-helper-admin-page.php';
        if (file_exists($path)) {
            include_once $path; // Include the file if it exists
        } else {
            echo '<div class="error"><p>' . esc_html__('Error: Admin page file not found.', 'boldgrid-helper') . '</p></div>';
        }
    }

    public function admin_sub_page() {
        $path = plugin_dir_path(__FILE__) . '../partials/boldgrid-helper-admin-sub-page.php';
        if (file_exists($path)) {
            include_once $path; // Include the file if it exists
        } else {
            echo '<div class="error"><p>' . esc_html__('Error: Sub page file not found.', 'boldgrid-helper') . '</p></div>';
        }
    }

    public function admin_sub_page_2() {
        $path = plugin_dir_path(__FILE__) . '../partials/boldgrid-helper-admin-sub-page_2.php';
        if (file_exists($path)) {
            include_once $path; // Include the file if it exists
        } else {
            echo '<div class="error"><p>' . esc_html__('Error: Sub page 2 file not found.', 'boldgrid-helper') . '</p></div>';
        } 
    } 

    /*   public function admin_sub_page_3() {
        $path = plugin_dir_path(__FILE__) . '../partials/boldgrid-helper-admin-sub-page_3.php';
        if (file_exists($path)) {
            include_once $path; // Include the file if it exists
        } else {
            echo '<div class="error"><p>' . esc_html__('Error: Sub page 3 file not found.', 'boldgrid-helper') . '</p></div>';
        } 
    } */
}