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

	if ( is_active_sidebar( 'goclap_left_sidebar' ) ) :
        dynamic_sidebar( 'goclap_left_sidebar' ); 
    endif;
?>


