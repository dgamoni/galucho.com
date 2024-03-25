<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/

require_once 'core/load.php';

add_action( 'widgets_init', 'goclap_left_sidebar' );
function goclap_left_sidebar() {
    register_sidebar(
        array(
            'id'            => 'goclap_left_sidebar',
            'name'          => __( 'Left sidebar for Product' ),
            'description'   => __( 'Widget for the left-hand column on the website' ),
            'before_widget' => '<aside id="%1$s" class="sidebar sidebar_left  units sidebar_archive">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>', 
        )
    );
    register_sidebar(
        array(
            'id'            => 'goclap_left_sidebar_ambiente',
            'name'          => __( 'Left sidebar for Product (Ambiente)' ),
            'description'   => __( 'Widget for the left-hand column on the website' ),
            'before_widget' => '<aside id="%1$s" class="sidebar sidebar_left  units sidebar_archive">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>', 
        )
    );
    register_sidebar(
        array(
            'id'            => 'goclap_left_sidebar_transportes',
            'name'          => __( 'Left sidebar for Product (Transportes)' ),
            'description'   => __( 'Widget for the left-hand column on the website' ),
            'before_widget' => '<aside id="%1$s" class="sidebar sidebar_left  units sidebar_archive">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>', 
        )
    );
    register_sidebar(
        array(
            'id'            => 'goclap_left_sidebar_agricultura',
            'name'          => __( 'Left sidebar for Product (Agricultura)' ),
            'description'   => __( 'Widget for the left-hand column on the website' ),
            'before_widget' => '<aside id="%1$s" class="sidebar sidebar_left  units sidebar_archive">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>', 
        )
    );
    // register_sidebar(
    //     array(
    //         'id'            => 'goclap_archive_sidebar',
    //         'name'          => __( 'Archive sidebar for Product' ),
    //         'description'   => __( 'Widget for the left-hand column on the website' ),
    //         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    //         'after_widget' => "</aside>",
    //         'before_title' => '<h3 class="widget-title">',
    //         'after_title' => '</h3>', 
    //     )
    // );
    register_sidebar(
        array(
            'id'            => 'goclap_categoria_sidebar',
            'name'          => __( 'Categoria sidebar for Product' ),
            'description'   => __( 'Widget for the left-hand column on the website' ),
            'before_widget' => '<aside id="%1$s" class="sidebar sidebar_left  units sidebar_archive">',
            'after_widget' => "</aside>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>', 
        )
    );
} // end goclap_left_sidebar



/* Activar debug mode */
add_action('avia_builder_mode', "builder_set_debug");
function builder_set_debug()
{
	return "debug";
}

/* Activar custom CSS nos elementos */
add_theme_support('avia_template_builder_custom_css');

/* Adicionar Google font aos menus do Enfold */
add_filter( 'avf_google_heading_font',  'avia_add_heading_font');
function avia_add_heading_font($fonts)
{
$fonts['Titillium Web'] = 'Titillium Web:400,700';
return $fonts;
}

add_filter( 'avf_google_content_font',  'avia_add_content_font');
function avia_add_content_font($fonts)
{
$fonts['Titillium Web'] = 'Titillium Web:400,700';
return $fonts;
}

/* Colocar WPML no top bar com country code */
if(defined('ICL_SITEPRESS_VERSION') && defined('ICL_LANGUAGE_CODE'))
{
    add_action( 'avia_meta_header', 'avia_wpml_language_switch', 10);
    add_action( 'ava_main_header_sidebar', 'avia_wpml_language_switch', 10);
 
    function avia_wpml_language_switch()
    {
        global $sitepress, $avia_config;
 
        if(empty($avia_config['wpml_language_menu_position'])) $avia_config['wpml_language_menu_position'] = apply_filters('avf_wpml_language_switcher_position', 'sub_menu');
        if($avia_config['wpml_language_menu_position'] != 'sub_menu') return;
 
        $languages = icl_get_languages('skip_missing=0&orderby=custom');
        $output = "";
 
        if(is_array($languages))
        {
            $output .= "<ul class='avia_wpml_language_switch avia_wpml_language_switch_extra'>";
 
            foreach($languages as $lang)
            {
                $currentlang = (ICL_LANGUAGE_CODE == $lang['language_code']) ? 'avia_current_lang' : '';
 
                if(!avia_is_overview() && (is_home() || is_front_page())) $lang['url'] = $sitepress->language_url($lang['language_code']);
 
                $output .= "<li class='language_".$lang['language_code']." $currentlang'>";
                $output .= "<a href='".$lang['url']."'>";
                $output .= strtoupper($lang['language_code']);
                $output .= "</a></li>";
            }
            $output .= "</ul>";
        }
        echo $output;
    }
}