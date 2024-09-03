<?php

class Boldgrid_Helper_Admin_Toolbar {

    public function __construct() {
        add_action('admin_bar_menu', [$this, 'add_toolbar_items'], 100);
    }

    public function add_toolbar_items($admin_bar) {
        // Existing toolbar item
        $admin_bar->add_menu(array(
            'id' => 'my-item',
            'title' => 'WPN',
            'href' => 'https://wpnfinite.com/wp-admin/admin.php?page=boldgrid-helper-admin-page',
            'meta' => array(
                'title' => __('WPN Dash'),
            ),
        ));

        // New toolbar item for Pending Tasks
        $admin_bar->add_menu(array(
            'id' => 'pending-tasks', // Unique ID for the new item
            'parent' => 'my-item',   // Set this if you want it under the WPN item, otherwise remove it
            'title' => 'Pending Tasks',
            'href' => '/wp-admin/edit.php?post_type=todo&todo_status_filter=Pending',
            'meta' => array(
                'title' => __('Pending Tasks'),
                'target' => '_self',  // Opens in the same tab, change to '_blank' if a new tab is preferred
            ),
        ));

        // Add more toolbar items if needed...
    }
}
