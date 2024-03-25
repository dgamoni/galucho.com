<?php
/**
 * Template used for displaying product content 
 *
 */
?> 

<?php
global $post;
$clap_product_title = get_field( "clap_product_title", $post->ID );
$clap_product_description = get_field( "clap_product_description", $post->ID );
$clap_product_foto = get_field( "clap_product_foto", $post->ID );
$clap_product_specifications = get_field( "clap_product_specifications", $post->ID );
$clap_product_techdetails = get_field( "clap_product_techdetails", $post->ID );
$clap_product_optional = get_field( "clap_product_optional", $post->ID );
$clap_product_documentos = get_field( "clap_product_documentos", $post->ID );
$clap_product_documentos_protect = get_field( "clap_product_documentos_protect", $post->ID );

?>
	
	<?php if ( $clap_product_title) : ?>
		<div class="avia_textblock av_inherit_color clap-product-title">
			<?php echo do_shortcode('[clap_product_title]'); ?>
		</div>
	<?php endif; ?>

	<?php if ( $clap_product_description) : ?>
		<div class="avia_textblock">
			<p><?php echo do_shortcode('[clap_product_description]'); ?></p>
		</div>
	<?php endif; ?>

	<?php if ( $clap_product_foto) : ?>
		<div class="hr hr-invisible product-space">
			<span class="hr-inner "><span class="hr-inner-style"></span></span>
		</div>
		<?php echo do_shortcode('[clap_product_foto]'); ?>
	<?php endif; ?>

	<?php if ( $clap_product_specifications ) : ?>
		<div class="hr hr-invisible product-space">
			<span class="hr-inner "><span class="hr-inner-style"></span></span>
		</div>
		<div class="avia_textblock  av_inherit_color clap-product-title-small">
			<p><?php echo _e( 'ESPECIFICAÇÕES:', 'galucho' ); ?></p>
		</div>
		<div class="avia_textblock">
			<?php echo do_shortcode('[clap_product_specifications]'); ?>
		</div>
	<?php endif; ?>

	<?php if ( $clap_product_techdetails ) : ?>
		<div class="hr hr-invisible product-space">
			<span class="hr-inner "><span class="hr-inner-style"></span></span>
		</div>
		<div class="avia_textblock  av_inherit_color clap-product-title-small">
			<p class="clap_product_techdetails_title"><?php echo _e( 'CARACTERÍSTICAS TÉCNICAS:', 'galucho' ); ?></p>
		</div>
		<div class="avia_textblock">
			<?php echo do_shortcode("[av_font_icon icon='ue803' font='entypo-fontello' style='' caption='' link='' linktarget='' size='20px' position='left' color='' custom_class='']"); ?>
			<?php echo do_shortcode("[clap_product_techdetails]"); ?>
		</div>
	<?php endif; ?>

	<?php if ( $clap_product_optional ) : ?>
		<div class="hr hr-invisible product-space">
			<span class="hr-inner "><span class="hr-inner-style"></span></span>
		</div>
		<div class="avia_textblock  av_inherit_color clap-product-title-small">
			<p class="clap_product_optional_title"><?php echo _e( 'EQUIPAMENTO OPCIONAL:', 'galucho' ); ?></p>
		</div>
		<div class="avia_textblock clap_product_optional_content">
			<p class=""><?php echo do_shortcode('[clap_product_optional]'); ?></p>
		</div>
	<?php endif; ?>

	<?php if ( $clap_product_documentos || $clap_product_documentos_protect ) : ?>
		<div class="hr hr-invisible product-space">
			<span class="hr-inner "><span class="hr-inner-style"></span></span>
		</div>
		<div class="avia_textblock  av_inherit_color clap-product-title-small">
			<p><?php echo _e( 'DOCUMENTOS:', 'galucho' ); ?></p>
		</div>
		<div class="avia_textblock">
			<p>	
				<?php if ( $clap_product_documentos) : ?>
							<?php echo do_shortcode('[clap_product_documentos]'); ?>
				<?php endif; ?>
				<?php if ( $clap_product_documentos_protect ) :
							  $shortcodes = '[pc-pvt-content allow="7" warning="0"]';
							  $shortcodes .= '[clap_product_documentos_protect]';
							  $shortcodes .= '[/pc-pvt-content]';
							  echo do_shortcode($shortcodes);
							  //var_dump($shortcodes);
					endif;
				?>
			</p>
		</div>
	<?php endif; ?>

	<?php
	// $shortcodes = '[pc-pvt-content allow="7" warning="0"]';

	//  if ( $clap_product_documentos_protect ) : 
	// 	$shortcodes .= '<div class="hr hr-invisible product-space">';
	// 		$shortcodes .= '<span class="hr-inner "><span class="hr-inner-style"></span></span>';
	// 	$shortcodes .= '</div>';
	// 	$shortcodes .= '<div class="avia_textblock  av_inherit_color clap-product-title-small">';
	// 		$shortcodes .= '<p>Documentos protegidos:</p>';
	// 	$shortcodes .= '</div>';
	// 	$shortcodes .= '<div class="avia_textblock">';
	// 		$shortcodes .= '<p>[clap_product_documentos_protect]</p>';
	// 	$shortcodes .='</div>';
	//  endif; 

	// $shortcodes .= '[/pc-pvt-content]';
	// echo do_shortcode($shortcodes);
	?>





