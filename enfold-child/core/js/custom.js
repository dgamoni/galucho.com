

jQuery(document).ready(function($){ 

	var $clap_product_techdetails_title = $('.clap_product_techdetails_title');
	//console.log($clap_product_techdetails_title[0]['innerHTML']);
	var $dataimg = $('.clap_popap').attr('data-img');
	var $clap_product_optional_title = $('.clap_product_optional_title');
	//console.log($clap_product_optional_title);
	var $clap_product_optional_content = $('.clap_product_optional_content');
	//console.log($clap_product_optional_content);
	var $optional;
	//console.log($clap_product_optional_content);
	if ( ($clap_product_optional_title.length > 0) && ($clap_product_optional_content.length > 0)) {
		$optional = '<p class="clap-product-title-small clap_product_optional_title_popup">'+$clap_product_optional_title[0]['innerHTML']+'</p>'+
		'<p class="clap_product_optional_content_popup">'+$clap_product_optional_content[0]['innerHTML']+'</p>';
	} else {
		$optional = '';
	}


	$('.clap_popap').magnificPopup({
	  items: {
	      src: '<div id="test-popup" class="white-popup">'+
	      			'<p class="clap-product-title-small clap_product_techdetails_title_popup">'+$clap_product_techdetails_title[0]['innerHTML']+'</p>'+
	      			'<img src="'+$dataimg+'">'+$optional+
	      		'</div>',
	      type: 'inline',
	      //closeBtnInside: true
	  }
	});

	//jQuery("#clap_product_gallery").unitegallery(); 
}); 

// var ugapi1;
// jQuery(document).ready(function(){
// 	var objUGParams = {
// 		gallery_theme:"default",
// 				gallery_width:"100%",
// 				gallery_height:"400",
// 				gallery_min_width:0,
// 				gallery_min_height:0,
// 				gallery_mousewheel_role:"none",
// 				gallery_control_keyboard:false,
// 				slider_background_color:"#f12f2f",
// 				slider_scale_mode:"fit",
// 				slider_scale_mode_media:"fit",
// 				gallery_urlajax:"http://www.galucho.com/wp-admin//admin-ajax.php",
// 				gallery_enable_tabs:true,
// 				gallery_initial_catid:"1",
// 				theme_enable_text_panel:false

// 	};
// 	if(ugCheckForErrors('#clap_product_gallery', 'cms'))
// 		ugapi1 = jQuery('#clap_product_gallery').unitegallery(objUGParams);
// });