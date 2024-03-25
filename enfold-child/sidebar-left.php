<?php
/**
 * Sidebar left for Goclap Child Theme
 *
 */
?>

<?php
if ( !defined('ABSPATH') ){ die(); }

global $post; 
$cpt_page_template = get_field('cpt_page_template', $post->ID);
//var_dump($cpt_page_template);
 ?>

	<?php if ( $cpt_page_template && ($cpt_page_template == 'page-transportes.php') ) { ?>
		
			<?php if ( is_active_sidebar( 'goclap_left_sidebar_transportes' ) ) : ?>
		            <?php dynamic_sidebar( 'goclap_left_sidebar_transportes' ); ?>
		    <?php endif; ?>

	<?php }	else if ( $cpt_page_template && ($cpt_page_template == 'page-ambiente.php') ) { ?>
		
		
			<?php if ( is_active_sidebar( 'goclap_left_sidebar_ambiente' ) ) : ?>
		            <?php dynamic_sidebar( 'goclap_left_sidebar_ambiente' ); ?>
		    <?php endif; ?>
		


	<?php }	else if ( $cpt_page_template && ($cpt_page_template == 'page-agricultura.php') ) { ?>
		
			<?php if ( is_active_sidebar( 'goclap_left_sidebar_agricultura' ) ) : ?>
		            <?php dynamic_sidebar( 'goclap_left_sidebar_agricultura' ); ?>
		    <?php endif; ?>

	<?php } else { ?>

		<!-- <div class="sidebar_left" id="sidebar_left"> -->
			<?php //if ( is_active_sidebar( 'goclap_left_sidebar' ) ) : ?>
		            <?php //dynamic_sidebar( 'goclap_left_sidebar' ); ?>
		    <?php //endif; ?>
		<!-- </div>  -->

	<?php } ?>

