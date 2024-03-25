<?php
define( 'TEXTDOMAIN', 'goclap-child' );
define('CORE_PATH', get_stylesheet_directory() . '/core');
define('CORE_URL', get_stylesheet_directory_uri() . '/core');

// Autoload libraries and functions
$dirs = array(
    CORE_PATH . '/post_types/',
    CORE_PATH . '/taxonomy/',
    CORE_PATH . '/shortcode/',
);
foreach ($dirs as $dir) {
    $other_inits = array();
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (false !== ($file = readdir($dh))) {
                if ($file != '.' && $file != '..' && stristr($file, '.php') !== false) {
                    list($nam, $ext) = explode('.', $file);
                    if ($ext == 'php')
                        $other_inits[] = $file;
                }
            }
            closedir($dh);
        }
    }
    asort($other_inits);
    foreach ($other_inits as $other_init) {
        if (file_exists($dir . $other_init))
            include_once $dir . $other_init;
    }
}

// lib
include_once( CORE_PATH . '/lib/collapsing-categories/collapscat.php' );

// ACF load BUG!
// 1. customize ACF path
// add_filter('acf/settings/path', 'my_acf_settings_path');
// function my_acf_settings_path( $path ) {
//     $path = CORE_PATH . '/acf/';
//     return $path;
// }

// 2. customize ACF dir
// add_filter('acf/settings/dir', 'my_acf_settings_dir');
// function my_acf_settings_dir( $dir ) {
//     $dir = CORE_PATH . '/acf/';
//     return $dir;
// }

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
//include_once( CORE_PATH . '/acf/acf.php' );

/*
 * Register frontend javascripts:
 */
// if(!function_exists('goclap_child_register_scripts'))
// {
//     if(!is_admin()){
//         //add_action('wp_enqueue_scripts', 'goclap_child_register_scripts');
//     }

//     function goclap_child_register_scripts()
//     {

//         wp_enqueue_script( 'goclap_child_unitegallery_js', CORE_URL .'/js/custom.js', array('jquery'), 2, false ); 

//         // /wp-content/themes/enfold-child/core/lib/unitegallery-plugin/js
//         //wp_enqueue_script( 'goclap_child_unitegallery_js', CORE_URL .'/lib/unitegallery-plugin/js/unitegallery.min.js', array('jquery'), 2, false ); 
//         // /wp-content/themes/enfold-child/core/lib/unitegallery-plugin/css
//         //wp_register_style( 'goclap_child_unitegallery_css' ,  CORE_URL ."/lib/unitegallery-plugin/css/unite-gallery.css", array(), '2', 'all' ); 
//         // /wp-content/themes/enfold-child/core/lib/unitegallery-plugin/themes/default
//         //wp_enqueue_script( 'goclap_child_unitegallery_theme_js',  CORE_URL .'/lib/unitegallery-plugin/themes/default/ug-theme-default.js', array('jquery'), 3, true );
//         //wp_register_style( 'goclap_child_unitegallery_theme_css',   CORE_URL ."/lib/unitegallery-plugin/themes/default/ug-theme-default.css", array(), '2', 'all' );
//     }
// }