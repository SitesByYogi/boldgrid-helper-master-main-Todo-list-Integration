<?php

class Boldgrid_Helper_Dashboard_Widget {

    public function __construct() {
        add_action('wp_dashboard_setup', [$this, 'register_dashboard_widget']);
    }

    public function register_dashboard_widget() {
        wp_add_dashboard_widget(
            'my_dashboard_widget',
            'BoldGrid Helper',
            [$this, 'display_dashboard_widget']
        );
    }

    public function display_dashboard_widget() {
        echo '<ul style="text-align: center;">
			<li style="padding-bottom: 30px;"><a class="button-primary btn btn-color-1 btn-border-color-1" style="border-width: 0px;" href="/wp-admin/admin.php?page=boldgrid-helper-admin-page" rel="noopener">Dashboard</a></li>

			<li style="padding-bottom: 10px;"><a class="button-secondary btn btn-color-2 btn-border-color-1" style="border-width: 0px;" href="https://gmail.com/" target="_blank" rel="noopener">Gmail</a></li>

			<li style="padding-bottom: 10px;"><a class="button-secondary btn btn-color-2 btn-border-color-1" style="border-width: 0px;" href="/wp-admin/admin.php?page=boldgrid-helper/boldgrid-helper-admin-sub-page.php" rel="noopener">BoldGrid</a></li>

			<li style="padding-bottom: 10px;"><a class="button-secondary btn btn-color-2 btn-border-color-1" style="border-width: 0px;" href="/wp-admin/admin.php?page=boldgrid-helper/boldgrid-helper-admin-sub-page_2.php" rel="noopener">My Projects</a></li>

			<li style="padding-bottom: 10px;"><a class="button-secondary btn btn-color-2 btn-border-color-1" style="border-width: 0px;" href="https://sitesbyyogi.com:2083/cpsess7148428427/frontend/paper_lantern/index.html" target="_blank" rel="noopener">cPanel</a></li>

	      </ul>';
    }
}