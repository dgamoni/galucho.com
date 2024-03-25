<?php
/**
 * Template Name: Page Transportes
 */ 
?>

<?php get_header(); ?>
<!-- Template Name: Page Transportes -->
		<div class='container_wrap container_wrap_first main_color sidebar_left ?>'>

			<div class='container template-blog '>

				<main class='content  av-content-small units'>
					

                    <div class='entry-content-wrapper'>
                    	<?php

						while ( have_posts() ) : the_post(); 
															
						 	get_template_part( 'content', 'product' ); 

						endwhile; // end of the loop. 
						?>
                    </div>

				<!--end content-->
				</main>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'blog';
				get_sidebar('left');

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->

<?php get_footer(); ?>
