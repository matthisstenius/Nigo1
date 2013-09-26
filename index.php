
<?php get_header(); ?>

		<section class="blog-posts col-4-5">
		
		<?php while (have_posts() ) : the_post(); ?>					
			<article>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				
				<?php the_excerpt(); ?>
				
			</article>
		<?php endwhile; ?>

		</section> <!--end .blog-post-->
		
		<div class="col-1-5">
			<?php get_sidebar(); ?>
		</div>

<?php get_footer(); ?> 		