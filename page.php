
<?php get_header(); ?>

		<?php while (have_posts() ) : the_post(); ?>

			<section class="content col-4-5">
				
				<article class="pad">

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				</article>

			</section> <!--end .content-->
		<?php endwhile; ?>

			<div class="col-1-5">
				<?php get_sidebar(); ?>
			</div>

<?php get_footer(); ?> 		