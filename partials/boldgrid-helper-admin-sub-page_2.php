<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="wrap">
    <h1><?php esc_html_e( 'Strategies and Planning', 'boldgrid-helper' ); ?></h1>

    <!-- Display Sub Page Image or Banner -->
    <div class="sby-img-45 center-img3">
        <img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/projects-dashboard.png' ); ?>" alt="Projects Dashboard" style="width:100%">
    </div>

    <!-- Sub Page Content -->
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Task Categories', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="/wp-admin/edit.php?post_type=todo&todo_category=development"><?php esc_html_e( 'Development', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="/wp-admin/edit.php?post_type=todo&todo_category_filter=Clients" target="_blank"><?php esc_html_e( 'Clients', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="/wp-admin/edit.php?post_type=todo&todo_category_filter=Content+Creation" target="_blank"><?php esc_html_e( 'Content Creation', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="/wp-admin/edit.php?post_type=todo&todo_category_filter=Marketing+and+Branding" target="_blank"><?php esc_html_e( 'Marketing', 'boldgrid-helper' ); ?></a></li>
                       
                        <li><a href="/wp-admin/edit.php?post_type=todo&todo_category_filter=Personal" target="_blank"><?php esc_html_e( 'Ongoing', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Additional Columns or Sections -->
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Task Status', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="/wp-admin/edit.php?s&post_status=all&post_type=todo&action=-1&m=0&todo_status_filter=Pending&todo_priority_filter&filter_action=Filter&paged=1&action2=-1"><?php esc_html_e( 'Pending', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="/wp-admin/edit.php?s&post_status=all&post_type=todo&action=-1&m=0&todo_status_filter=Waiting&todo_priority_filter&filter_action=Filter&paged=1&action2=-1"><?php esc_html_e( 'Waiting', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="/wp-admin/edit.php?s&post_status=all&post_type=todo&action=-1&m=0&todo_status_filter=Abandoned&todo_priority_filter&filter_action=Filter&paged=1&action2=-1"><?php esc_html_e( 'Abandoned', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="/wp-admin/edit.php?post_status=all&post_type=todo&m=0&todo_status_filter=Complete&todo_priority_filter&filter_action=Filter&paged=1"><?php esc_html_e( 'Complete', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="http://localhost:10022/wp-admin/post-new.php?post_type=todo"><?php esc_html_e( 'Add New', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Add More Sections as Needed -->
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Task Priority', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="/wp-admin/edit.php?post_status=all&post_type=todo&m=0&todo_status_filter&todo_priority_filter=High&filter_action=Filter&paged=1"><?php esc_html_e( 'High', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="http://localhost:10022/wp-admin/edit.php?s&post_status=all&post_type=todo&action=-1&m=0&todo_status_filter&todo_priority_filter=Medium&filter_action=Filter&paged=1&action2=-1"><?php esc_html_e( 'Medium', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="/wp-admin/edit.php?s&post_status=all&post_type=todo&action=-1&m=0&todo_status_filter&todo_priority_filter=Low&filter_action=Filter&paged=1&action2=-1" target="_blank"><?php esc_html_e( 'Low', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="/wp-admin/edit-tags.php?taxonomy=todo_category&post_type=todo" target="_blank"><?php esc_html_e( 'Categories', 'boldgrid-helper' ); ?></a></li>

                        <li><a href="/wp-admin/edit-tags.php?taxonomy=todo_tag&post_type=todo" target="_blank"><?php esc_html_e( 'Tags', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Client Aquisition', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="https://docs.google.com/spreadsheets/d/1UrfYaWh1zoeTGlCgrjx1GhGM-g6oUB2YBRAFr97wYFU/edit?gid=0#gid=0" target="_blank"><?php esc_html_e( 'Affiliate Partners List', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/1ulPx1GUBF-vfpoXLcuhYV2L-OQ7kFxzccH291uOfrb0/edit?gid=0#gid=0" target="_blank"><?php esc_html_e( 'Potential Client List', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/1opqvq8mbOx5h_lmjDO2RPVqSqNKJsqP3U4c4mEdVA4U/edit?gid=0#gid=0" target="_blank"><?php esc_html_e( 'Potential Client Profiles', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://docs.google.com/document/d/1OpRBIoy4ydcbPgs6MT3qEuc2ByoSMZF4_dgYnbnUw6Q/edit" target="_blank"><?php esc_html_e( 'Client Acquistion Strategies', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Proposals', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="https://docs.google.com/document/d/16bDOo6ZHSHtUmj6aqyuLL66HUYjlELihh6zuEguGsIQ/edit" target="_blank"><?php esc_html_e( 'QuickStarter Proposal', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://docs.google.com/document/d/1MWaNJXr1IEZ99jlLauOGdPNWeLPpfqe1RSJdzJUuHGU/edit" target="_blank"><?php esc_html_e( 'Website Redesign Proposal', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://docs.google.com/document/d/19pZlNTiUsTHSczu9PrfS7heoMjLKSTQAfpoMSyPwuSg/edit" target="_blank"><?php esc_html_e( 'Performance Optimization Proposal', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://docs.google.com/document/d/1OpRBIoy4ydcbPgs6MT3qEuc2ByoSMZF4_dgYnbnUw6Q/edit" target="_blank"><?php esc_html_e( 'WordPress Troubleshooting Proposal', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Styles (if needed) -->
<style>
    .column {
        float: left;
        width: 33.33%;
        padding: 10px;
    }
    
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    
    .container {
        padding: 2px 16px;
    }

    @media screen and (max-width: 600px) {
        .column {
            width: 100% !important;
        }
    }
</style>
