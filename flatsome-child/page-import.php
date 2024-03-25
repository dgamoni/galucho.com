<?php
/*
Template name: Page - Import
*/
get_header(); ?>

<?php //do_action( 'flatsome_before_page' ); ?>

<div id="content" role="main" class="content-area">

		<?php echo 'Import template';?>


<?php


// $my_id = 1040;
// $wc_productdata_options = get_post_meta( $my_id, 'wc_productdata_options', true);
// //echo "<pre>", var_dump( $wc_productdata_options ), "</pre>";

// //product_specifications
// $product_specifications = get_field('clap_product_specifications', $my_id);
// $wc_productdata_options_[0]['_custom_tab_title'] = 'Especificações';
// $wc_productdata_options_[0]['_custom_tab'] = $product_specifications;

// //product_techdetails
// $clap_product_techdetails = get_field('clap_product_techdetails', $my_id);
// $wc_productdata_options_[0]['_custom_tab_title_2'] = 'Características técnicas';
// $wc_productdata_options_[0]['_custom_tab_2'] = '[clap_product_techdetails url="'.$clap_product_techdetails.'"]';

// //product_optional
// $product_optional = get_field('clap_product_optional', $my_id);
// $wc_productdata_options_[0]['_custom_tab_title_3'] = 'Equipamento opcional';
// $wc_productdata_options_[0]['_custom_tab_3'] = $product_optional;

// //clap_product_documentos
// $documentos_out = '';
// if( have_rows('clap_product_documentos', $my_id) ):
//     while ( have_rows('clap_product_documentos', $my_id) ) : the_row();
// 		if( get_row_layout() == 'clap_product_documentos_layout' ):
//         	$clap_product_documentos_titulo = get_sub_field('clap_product_documentos_titulo', $my_id);
// 	        $clap_product_documentos_ficheiro = get_sub_field('clap_product_documentos_ficheiro', $my_id);
// 	        $documentos_out .= '<div class=""><a href="'. $clap_product_documentos_ficheiro['url'] .'" target="_blank">'.$clap_product_documentos_titulo.'</a></div>';	    
// 	    endif;
//     endwhile;
// endif;
// $wc_productdata_options_[0]['_custom_tab_title_4'] = 'DOCUMENTOS';
// $wc_productdata_options_[0]['_custom_tab_4'] = $documentos_out;


//echo "<pre>", var_dump( $wc_productdata_options_ ), "</pre>";
//update_post_meta( $my_id, 'wc_productdata_options', $wc_productdata_options_ );






$args = array(
	'post_type'   => 'product',
	'post_status' => 'publish',
	'posts_per_page' => -1
);

$query = new WP_Query( $args );
while ( $query->have_posts() ) {
	$query->the_post();

	echo "<pre>", var_dump( get_the_title( $post->ID) ), "</pre>";

	$video = get_post_meta( $post->ID, 'wc_productdata_options', true);
	if($video[0]["_product_video"]) {
		$wc_productdata_options_[0]['_product_video'] = $video[0]["_product_video"];
		//var_dump($video[0]["_product_video"]);
	}

	//product_specifications
	$product_specifications = get_field('clap_product_specifications', $post->ID);
	if($product_specifications){
		$wc_productdata_options_[0]['_custom_tab_title'] = 'Especificações';
		$wc_productdata_options_[0]['_custom_tab'] = $product_specifications;
		//echo "<pre>", var_dump( $product_specifications ), "</pre>";
	}

	//product_techdetails
	$clap_product_techdetails = get_field('clap_product_techdetails', $post->ID);
	if ($clap_product_techdetails){
		$wc_productdata_options_[0]['_custom_tab_title_2'] = 'Características técnicas';
		$wc_productdata_options_[0]['_custom_tab_2'] = '[clap_product_techdetails url="'.$clap_product_techdetails.'"]';
		//echo "<pre>", var_dump( $clap_product_techdetails ), "</pre>";
	} else {
		// $wc_productdata_options_[0]['_custom_tab_title_2'] = 'Características técnicas';
		// $wc_productdata_options_[0]['_custom_tab_2'] = '';
	}

	//product_optional
	$product_optional = get_field('clap_product_optional', $post->ID);
	if($product_optional){
		$wc_productdata_options_[0]['_custom_tab_title_3'] = 'Equipamento opcional';
		$wc_productdata_options_[0]['_custom_tab_3'] = $product_optional;
		//echo "<pre>", var_dump( $product_optional ), "</pre>";
	} else {

	}

	//clap_product_documentos
	$documentos_out = '';
	if( have_rows('clap_product_documentos', $post->ID) ):
	    while ( have_rows('clap_product_documentos', $post->ID) ) : the_row();
			if( get_row_layout() == 'clap_product_documentos_layout' ):
	        	$clap_product_documentos_titulo = get_sub_field('clap_product_documentos_titulo', $post->ID);
		        $clap_product_documentos_ficheiro = get_sub_field('clap_product_documentos_ficheiro', $post->ID);
		        $documentos_out .= '<div class=""><a href="'. $clap_product_documentos_ficheiro['url'] .'" target="_blank">'.$clap_product_documentos_titulo.'</a></div>';	    
		    endif;
	    endwhile;
	endif;
	if ($documentos_out !='' ) {
		$wc_productdata_options_[0]['_custom_tab_title_4'] = 'DOCUMENTOS';
		$wc_productdata_options_[0]['_custom_tab_4'] = $documentos_out;
		//var_dump( $documentos_out );
	} else {

	}

	//echo "<pre>", var_dump( $wc_productdata_options_ ), "</pre>";
	//update_post_meta( $post->ID, 'wc_productdata_options', $wc_productdata_options_ );

}
wp_reset_postdata();

?>





 		<?php //while ( have_posts() ) : the_post(); ?>

			<?php //the_content(); ?>
		
		<?php //endwhile; // end of the loop. ?>
		
</div>

<?php //do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>
