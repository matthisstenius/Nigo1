<?php
/*
	Template name: About
*/
?>


<?php get_header(); ?>

		<?php while (have_posts() ) : the_post(); ?>

			<section class="content col-4-5 pad">
				
				<div class="col-2-3">
					<article class="about">

						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>

					</article>
				</div>

				<div class="col-1-3">
					<div class="staff">
						<h3><?php echo get_post_meta($post->ID, 'producer_role', true); ?></h3>
						<p><?php echo get_post_meta($post->ID, 'producer_name', true); ?></p>
						<p><?php echo get_post_meta($post->ID, 'producer_mail', true); ?></p>
						<p><?php echo get_post_meta($post->ID, 'producer_phone', true); ?></p>
					</div>

					<div class="staff">
						<h3><?php echo get_post_meta($post->ID, 'financial_role', true); ?></h3>
						<p><?php echo get_post_meta($post->ID, 'financial_name', true); ?></p>
						<p><?php echo get_post_meta($post->ID, 'financial_mail', true); ?></p>
						<p><?php echo get_post_meta($post->ID, 'financial_phone', true); ?></p>
					</div>

					<div class="staff">
						<h3><?php echo get_post_meta($post->ID, 'director_role', true); ?></h3>
						<p><?php echo get_post_meta($post->ID, 'director_name', true); ?></p>
						<p><?php echo get_post_meta($post->ID, 'director_mail', true); ?></p>
						<p><?php echo get_post_meta($post->ID, 'director_phone', true); ?></p>
					</div>
				</div>

			</section> <!--end .content-->
		<?php endwhile; ?>

			<div class="col-1-5">
				<?php get_sidebar(); ?>
			</div>

<?php get_footer(); ?>