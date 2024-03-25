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

?>
	
	<?php if ( $clap_product_title) : ?>
		<div class="avia_textblock av_inherit_color clap-product-title">
			<strong><?php echo do_shortcode('[clap_product_title]'); ?></strong>
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
			<p>ESPECIFICAÇÕES:</p>
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
			<p>CARACTERÍSTICAS TÉCNICAS:</p>
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
			<p>EQUIPAMENTO OPCIONAL:</p>
		</div>
		<div class="avia_textblock">
			<p><?php echo do_shortcode('[clap_product_optional]'); ?></p>
		</div>
	<?php endif; ?>

	<?php if ( $clap_product_documentos ) : ?>
		<div class="hr hr-invisible product-space">
			<span class="hr-inner "><span class="hr-inner-style"></span></span>
		</div>
		<div class="avia_textblock  av_inherit_color clap-product-title-small">
			<p>DOCUMENTOS:</p>
		</div>
		<div class="avia_textblock">
			<p><?php echo do_shortcode('[clap_product_documentos]'); ?></p>
		</div>
	<?php endif; ?>



