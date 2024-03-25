<?php

function custom_admin_theme_style() {
    wp_enqueue_style('custom-admin-style', CORE_URL .'/css/custom_admin_style.css', array(), rand());
}
add_action('admin_enqueue_scripts', 'custom_admin_theme_style');