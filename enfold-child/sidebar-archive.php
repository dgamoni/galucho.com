<?php
/**
 * Sidebar left for Goclap Child Theme
 *
 */
?>

<?php
if ( !defined('ABSPATH') ){ die(); }

global $post; 
//$cpt_page_template = get_field('cpt_page_template', $post->ID);
//var_dump($cpt_page_template);
 ?>

		<!-- <div class="sidebar_left" id="sidebar_left"> -->
			<?php //if ( is_active_sidebar( 'goclap_left_sidebar_agricultura' ) ) : ?>
		            <?php //dynamic_sidebar( 'goclap_left_sidebar_agricultura' ); ?>
		    <?php //endif; ?>
		<!-- </div>  -->

<?php // update sidebar
global $avia_config;
$sidebar_smartphone = avia_get_option('smartphones_sidebar') == 'smartphones_sidebar' ? 'smartphones_sidebar_active' : "";
$sidebar = 'left';

 echo "<aside class='sidebar sidebar_".$sidebar."  units sidebar_archive'>";
    echo "<div class='inner_sidebar extralight-border'>";
    		if ( is_active_sidebar( 'goclap_archive_sidebar' ) ) :
		        dynamic_sidebar( 'goclap_archive_sidebar' ); 
		    endif;
    echo "</div>";
echo "</aside>";