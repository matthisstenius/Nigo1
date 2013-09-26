<?php
/* 
	Template Name: Home Page
*/
 ?>
 
 <?php get_header(); ?>
 	
 	<div class="portfolio module clearfix">
 		<div class="col-4-5">
 			<?php $query = new WP_Query(array('post_type' => 'portfolio')); ?>

 			<?php while ($query->have_posts()) : $query->the_post(); ?>
			<div class="portfolio-item col-1-3">
				<a href="#" class="portfolio-item-link" title="<?php the_title() ?>">
					<h2 class="portfolio-item-title"><?php the_title(); ?></h2>
					<?php 
						if (has_post_thumbnail() ) {
					 		the_post_thumbnail(); 
						}
					?>
				</a>
				
				<div class="portfolio-item-content clearfix hidden item-<?php echo $query->current_post; ?>">
					<div class="portfolio-content-video">
						<?php echo get_post_meta($post->ID, 'video', true); ?>
					</div>

					<div class="portfolio-content-post">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
				</div>
			</div>	
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
 		</div>
		
		<div class="col-1-5">
			<?php get_sidebar(); ?>		
		</div>		
 	</div>

 <?php get_footer(); ?>	