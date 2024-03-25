<?php
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config, $more;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();
	
		
		$showheader = true;
		if(avia_get_option('frontpage') && $blogpage_id = avia_get_option('blogpage'))
		{
			if(get_post_meta($blogpage_id, 'header', true) == 'no') $showheader = false;
		}
		
	 	if($showheader)
	 	{
			echo avia_title(array('title' => avia_which_archive()));
		}
		
		do_action( 'ava_after_main_title' );
	?>

		<div class='container_wrap container_wrap_first main_color sidebar_left ?>'>

			<div class='container template-blog '>

				<main class='content  av-content-small units'>
					

                    <div class='entry-content-wrapper'>
                    	<?php
                    	// echo do_shortcode('[wpdreams_ajaxsearchpro id=1]');
                    	// echo '<div style="height:50px" class="hr hr-invisible  avia-builder-el-7  el_after_av_codeblock  el_before_av_textblock  "><span class="hr-inner "><span class="hr-inner-style"></span></span></div>';
                    	$tds =  term_description(); 
							if($tds)
							{
								echo "<div class='category-term-description'>{$tds}</div>";
							}
                    	echo '<div style="height:50px" class="hr hr-invisible  avia-builder-el-7  el_after_av_codeblock  el_before_av_textblock  "><span class="hr-inner "><span class="hr-inner-style"></span></span></div>';
                    	echo do_shortcode('[wpdreams_ajaxsearchpro id=3]');
						?>
                    </div>

				<!--end content-->
				</main>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'blog';
				get_sidebar('categoria');

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->




<?php get_footer(); ?>
