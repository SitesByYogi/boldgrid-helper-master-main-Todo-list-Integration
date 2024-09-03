<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="wrap">
    <h1><?php esc_html_e( 'BoldGrid Dashboard', 'boldgrid-helper' ); ?></h1>

    <!-- Display Sub Page Banner or Image -->
    <div class="sby-img-45 center-img3">
        <img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . '../images/boldgrid-dashboard.png' ); ?>" alt="BoldGrid Dashboard" style="width:100%">
    </div>
    <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Quick Links', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="https://gmail.com/" target="_blank"><?php esc_html_e( 'Check Email', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://sitesbyyogi.com:2083/cpsess7148428427/frontend/paper_lantern/index.html" target="_blank"><?php esc_html_e( 'SBY cPanel', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpbex3-dev-bradm.boldgrid.com/internal-imh/wp-admin/index.php" target="_blank"><?php esc_html_e( 'Nest', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://docs.google.com/spreadsheets/d/14beEQJTCq6aal3pqgurEft4q5wk38pzsBAsSP6xsqUM/edit#gid=0" target="_blank"><?php esc_html_e( 'Credentials', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://github.com/" target="_blank"><?php esc_html_e( 'GitHub', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="http://localhost:10022/wp-admin/edit.php?post_type=todo&todo_status_filter=Pending" target="_blank"><?php esc_html_e( 'Pending Tasks', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>

    <!-- Sub Page Content -->
    <div class="row">

        <!-- Additional Columns or Sections -->
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Performance Settings', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=w3tc_general" target="_blank"><?php esc_html_e( 'General Performance', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=w3tc_pgcache" target="_blank"><?php esc_html_e( 'Page Cache', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=w3tc_minify" target="_blank"><?php esc_html_e( 'Minify', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=w3tc_browsercache" target="_blank"><?php esc_html_e( 'Browser Cache', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=w3tc_cdn" target="_blank"><?php esc_html_e( 'CDN & FSD', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=w3tc_userexperience" target="_blank"><?php esc_html_e( 'User Experience', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Add More Sections as Needed -->
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'Performance Monitoring', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="https://wpnfinite.com/page-speed-test/" target="_blank"><?php esc_html_e( 'Nfinite Speed Test', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://pagespeed.web.dev/" target="_blank"><?php esc_html_e( 'PageSpeed Insights', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://gtmetrix.com/" target="_blank"><?php esc_html_e( 'GTMetrix', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://tools.pingdom.com/" target="_blank"><?php esc_html_e( 'Pingdom', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=w3tc_pagespeed" target="_blank"><?php esc_html_e( 'W3TC Speed Tool', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://dash.bunny.net/" target="_blank"><?php esc_html_e( 'BunnyCDN', 'boldgrid-helper' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Add More Sections as Needed -->
        <div class="column">
            <div class="card">
                <div class="container">
                    <h4><b><?php esc_html_e( 'WordPress Settings', 'boldgrid-helper' ); ?></b></h4>
                    <ul>
                        <li><a href="https://wpnfinite.com/wp-admin/options-general.php" target="_blank"><?php esc_html_e( 'WordPress Settings', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/import.php" target="_blank"><?php esc_html_e( 'Import Data', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/export.php" target="_blank"><?php esc_html_e( 'Export Data', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/users.php" target="_blank"><?php esc_html_e( 'Users', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/options-general.php?page=login-with-google" target="_blank"><?php esc_html_e( 'Log in With Google', 'boldgrid-helper' ); ?></a></li>
                        <li><a href="https://wpnfinite.com/wp-admin/admin.php?page=wp-mail-smtp" target="_blank"><?php esc_html_e( 'WP Mail SMTP', 'boldgrid-helper' ); ?></a></li>
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