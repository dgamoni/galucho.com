<?php
/*
Template name: Page - Import
*/
get_header(); ?>

<?php //do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

		<?php echo 'Import template';?>


<?php


echo "<pre>", var_dump( get_post_custom( 251 ) ), "</pre>";
// $clap_product_techdetails = get_post_custom( 285 )["clap_product_techdetails"][0];
// var_dump($clap_product_techdetails);

//echo "<pre>", var_dump( get_post_custom( 320 ) ), "</pre>";



	/*
	 * The WordPress Query class.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/WP_Query
	 */
	$args = array(
		'post_type'   => 'product',
		'post_status' => 'publish',
		'posts_per_page' => -1
	);

$query = new WP_Query( $args );
while ( $query->have_posts() ) {
	$query->the_post();

	//echo "<pre>", var_dump( get_the_title( $post->ID) ), "</pre>";
	//echo "<pre>", var_dump( get_field('clap_product_youtube', $post->ID) ), "</pre>";
	//echo "<pre>", var_dump( get_field('clap_product_youtube', $post->ID)['url'] ), "</pre>";

}
wp_reset_postdata();

?>





 		<?php //while ( have_posts() ) : the_post(); ?>

			<?php //the_content(); ?>
		
		<?php //endwhile; // end of the loop. ?>
		
</div>

<?php //do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
