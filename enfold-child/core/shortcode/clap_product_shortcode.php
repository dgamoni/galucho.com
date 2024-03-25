<?php
// Add Shortcode

function clap_product_title_shortcode() {
	global $post;
	$clap_product_title = get_field( "clap_product_title", $post->ID );
	 if ( $clap_product_title) : 
	 		$output = $clap_product_title;
	 endif;
	 return $output;
}
add_shortcode( 'clap_product_title', 'clap_product_title_shortcode' ); 

function clap_product_description_shortcode() {
	global $post;
	$clap_product_description = get_field( "clap_product_description", $post->ID );
	 if ( $clap_product_description) : 
	 		$output = $clap_product_description;
	 endif;
	 return $output;
}
add_shortcode( 'clap_product_description', 'clap_product_description_shortcode' ); 

function clap_product_foto_shortcode() {
	global $post;
	$clap_product_foto = get_field( "clap_product_foto", $post->ID );
	$clap_product_youtube = get_field("clap_product_youtube", $post->ID);
	$output = '';
	$images = $clap_product_foto;
	$video = $clap_product_youtube;
	
		if( $clap_product_foto || $clap_product_youtube) {
			$output .= '<div id="clap_product_gallery" style="display:none;">';
				putUniteGallery("clap_product");
				// wp_enqueue_script( 'goclap_child_js', CORE_URL .'/js/custom.js', array('jquery'), 2, false );	
		}

			if( $images ):
			        foreach( $images as $image ):
			    		$output .= '<img 
			    						alt="'.$image['alt'].'" 
			    						src="'.$image['sizes']['thumbnail'].'" 
			    						data-image="'.$image['url'].'" 
			    						data-description="'.$image['caption'].'"
			    					>';
			        endforeach; 
			endif;

			if( $video ):
						$output .= '<img 
										alt="'.$video['title'].'"
										data-type="youtube"
										src="'.$video['thumbs']['default']['url'].'"
										data-image="'.$video['standard']['default']['url'].'"		 
										data-videoid="'.$video['vid'].'"
										data-description="'.$video['title'].'"
									>';
			endif;


		if( $clap_product_foto || $clap_product_youtube) {
			$output .= '</div>';
		}


	return $output;
}
add_shortcode( 'clap_product_foto', 'clap_product_foto_shortcode' ); 

function clap_product_specifications_shortcode() {
	global $post;
	$clap_product_specifications = get_field( "clap_product_specifications", $post->ID );
	 if ( $clap_product_specifications) : 
	 		$output = $clap_product_specifications;
	 endif;
	 return $output;
}
add_shortcode( 'clap_product_specifications', 'clap_product_specifications_shortcode' );

function clap_product_techdetails_shortcode() {
	global $post;
	$clap_product_techdetails = get_field( "clap_product_techdetails", $post->ID );
	 if ( $clap_product_techdetails) : 
	 		//$output = '<a href="'.$clap_product_techdetails.'">Visualizar</a>';
	 		$output = '<span data-img="'.$clap_product_techdetails.'" class="clap_popap">Visualizar</span>';
	 endif;
	 return $output;
}
add_shortcode( 'clap_product_techdetails', 'clap_product_techdetails_shortcode' );

function clap_product_optional_shortcode() {
	global $post;
	$clap_product_optional = get_field( "clap_product_optional", $post->ID );
	 if ( $clap_product_optional) : 
	 		$output = $clap_product_optional;
	 endif;
	 return $output;
}
add_shortcode( 'clap_product_optional', 'clap_product_optional_shortcode' );

function clap_product_documentos_shortcode() {
	global $post;

	$output = '';
	if( have_rows('clap_product_documentos') ):
	    while ( have_rows('clap_product_documentos') ) : the_row();
	        if( get_row_layout() == 'clap_product_documentos_layout' ):
	        	$clap_product_documentos_titulo = get_sub_field('clap_product_documentos_titulo');
		        $clap_product_documentos_ficheiro = get_sub_field('clap_product_documentos_ficheiro');
		        if ($clap_product_documentos_ficheiro && $clap_product_documentos_titulo) :
			        $output .= '<p>';
			        $output .= do_shortcode("[av_font_icon icon='ue82d' font='entypo-fontello' style='' caption='' link='' linktarget='' size='20px' position='left' color='' custom_class=''][/av_font_icon]");
			        $output .= '<a href="'. $clap_product_documentos_ficheiro['url'] .'" target="_blank">'.$clap_product_documentos_titulo.'</a>';
		        	$output .= '</p>';
		        endif;
	        endif;
	    endwhile;
	endif;

	return $output;
}
add_shortcode( 'clap_product_documentos', 'clap_product_documentos_shortcode' );

// update
function clap_product_documentos_protect_shortcode() {
	global $post;

	$output = '';
	if( have_rows('clap_product_documentos_protect') ):
	    while ( have_rows('clap_product_documentos_protect') ) : the_row();
	        if( get_row_layout() == 'clap_product_documentos_layout' ):
	        	$clap_product_documentos_titulo = get_sub_field('clap_product_documentos_titulo');
		        $clap_product_documentos_ficheiro = get_sub_field('clap_product_documentos_ficheiro');
		        if ($clap_product_documentos_ficheiro) :
			        $output .= '<p>';
			        $output .= do_shortcode("[av_font_icon icon='ue82d' font='entypo-fontello' style='' caption='' link='' linktarget='' size='20px' position='left' color='' custom_class=''][/av_font_icon]");
			        $output .= '<a href="'. $clap_product_documentos_ficheiro['url'] .'" target="_blank">'.$clap_product_documentos_titulo.'</a>';
		        	$output .= '</p>';
		        endif;
	        endif;
	    endwhile;
	endif;

	return $output;
}
add_shortcode( 'clap_product_documentos_protect', 'clap_product_documentos_protect_shortcode' );