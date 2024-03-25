<?php
/*
Plugin Name:Cpt custom page template 
Plugin URI:
Description: Adding Template Options to a Wordpress Custom Post Type only for 'clap-product'.
Version: 1.0
Author: Ganesh Paygude
 */


/* Add meta boxes on the 'add_meta_boxes' hook. */
add_action( 'add_meta_boxes', 'cptcts_meta_boxes' );

/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'cptcts_save_meta', 10, 2 );

/* Load template filter */
add_filter( 'single_template', 'cptcts_load_PostTemplate' );
  

function cptcts_meta_boxes() {
	$post_types = get_post_types();
	  add_meta_box(
		'cpt-template-meta-box'
		, __( 'Page Template', 'cpt-custom-template' )
		, 'cptcts_meta_box_markup'
		//, $post_types
		, 'clap-product'
		, 'side'
		, 'core'
	  );
}

/* Meta box's Markup. */
function cptcts_meta_box_markup( $object, $box ) { 
    global $post;
  
    wp_nonce_field( basename(__FILE__), 'cpt_template_meta_nonce' );   
    $current_template = get_post_field( 'cpt_page_template',$post->ID);   
    $template_options = get_page_templates();
	
    $box_label = '<label for="cpt_page_template">Page Template</label>';
	$box_select = '<select name="cpt_page_template">';    
    $box_default_option = '<option value="">Default Template</option>';
    $box_options = '';

    foreach (  $template_options as $name=>$file ) {
        if ( $current_template == $file ) {
			
            $box_options .= '<option value="' . $file . '" selected="selected">' . $name . '</option>';
		
        } else {
            $box_options .= '<option value="' . $file . '">' . $name . '</option>';
			
        }
    }
   
    echo $box_label;
    echo $box_select;
    echo $box_default_option;
    echo $box_options;
    echo '</select>';
 }

/* Save the meta box's post metadata. */
function cptcts_save_meta( $post_id, $post ) {

	$current_nonce = $_POST['cpt_template_meta_nonce'];
    $is_autosaving = wp_is_post_autosave( $post_id );
    $is_revision   = wp_is_post_revision( $post_id );
    $valid_nonce   = ( isset( $current_nonce ) && wp_verify_nonce( $current_nonce, basename( __FILE__ ) ) ) ? 'true' : 'false';

    if ( $is_autosaving || $is_revision || !$valid_nonce ) {
        return;
    }
	
    $cpt_page_template = $_POST['cpt_page_template'];
    update_post_meta( $post_id, 'cpt_page_template', $cpt_page_template );
}


function cptcts_load_PostTemplate() {
    
    // access our post meta data
    $query_object = get_queried_object();
    $page_template = get_post_meta( $query_object->ID, 'cpt_page_template', true );

    
    $default_templates    = array();
    $default_templates[] = "single-{$query_object->post_type}-{$query_object->post_name}.php";
	$default_templates[] = "single-{$query_object->post_type}.php";
    $default_templates[]  = 'single.php';

    // only apply our template to post and other CPT except pages.
    if ( $query_object->post_type != 'page' ) {
        
        if ( !empty( $page_template ) ) {            
            $default_templates = $page_template;
        }
    }

    // locate the template and return it
    $new_template = locate_template( $default_templates, false );
    return $new_template;
} 