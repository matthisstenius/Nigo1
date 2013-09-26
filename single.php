
<?php get_header(); ?>

		<?php while (have_posts() ) : the_post(); ?>

			<section class="content pad col-4-5">

				<article>
					
					<h1><?php the_title(); ?></h1>
					<span class="post-date"><?php the_date(); ?></span>
					<?php the_content(); ?>

				</article>

			</section> <!--end .content-->

		<?php endwhile; ?>
		
		<div class="col-1-5">
			<?php get_sidebar(); ?>
		</div>

</div> <!--end .wrap-->	

<?php get_footer(); ?> 		