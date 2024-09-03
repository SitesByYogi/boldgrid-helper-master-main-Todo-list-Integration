<?php

class Boldgrid_Helper_Admin_CSS {

    public function __construct() {
        add_action('admin_head', [$this, 'add_custom_css']);
    }

    public function add_custom_css() {
        echo '<style> .wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    box-sizing: border-box;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    background-color: #fff;
    border-radius: 4px;
    padding: 16px;
    margin-bottom: 20px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.container {
    padding: 16px;
}

.sby-img-45 {
    width: 45%;
    display: block;
    margin: 0 auto;
}

.center-img3 {
    text-align: center;
}

@media screen and (max-width: 600px) {
    .column {
        width: 100% !important;
    }
}</style>';
    }
}