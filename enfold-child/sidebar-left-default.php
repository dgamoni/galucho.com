<?php
/**
 * Sidebar left for Goclap Child Theme
 *
 */
?>

<?php
if ( !defined('ABSPATH') ){ die(); }
?>
<?php 
global $post;
$parent = false;
$curent_term = get_the_terms( $post->ID, 'categoria');
if ($curent_term[0] && $curent_term[0]->parent) {
	$parent_id = $curent_term[0]->parent;
	$parent = get_term_by( 'term_taxonomy_id', $parent_id, 'categoria');
}
//var_dump( $parent);
//var_dump($parent->term_taxonomy_id);

	if ( $parent && $parent->term_taxonomy_id == 56 ) { // Agriculture
			if ( is_active_sidebar( 'goclap_left_sidebar_agricultura' ) ) : 
			        dynamic_sidebar( 'goclap_left_sidebar_agricultura' ); 
			endif; 
 	} else 	if ( $parent && $parent->term_taxonomy_id == 57 ) { // Transport
			if ( is_active_sidebar( 'goclap_left_sidebar_transportes' ) ) : 
			        dynamic_sidebar( 'goclap_left_sidebar_transportes' ); 
			endif; 
 	} else {
			if ( is_active_sidebar( 'goclap_left_sidebar' ) ) :
		        dynamic_sidebar( 'goclap_left_sidebar' ); 
		    endif;
	}
?>


