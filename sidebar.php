<aside class="sidebar">
	<nav class="main-nav">
		<ul>
	 		<?php wp_list_pages('title_li=&depth=1'); ?>
	 		<li><a href="http://helgeolsen.tumblr.com/">Blog</a></li>
		</ul>
	</nav>

	<ul class="news">
		<h2>Nyheter</h2>
		<?php query_posts('showposts=5'); ?>
		<?php while (have_posts() ) : the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
				<span class="post-date"><?php the_date(); ?></span>
				<p>
					<?php the_content(); ?>
				</p>
			</li>
		<?php endwhile; ?>
		<?php wp_reset_query(); ?>
	</ul>
</aside>