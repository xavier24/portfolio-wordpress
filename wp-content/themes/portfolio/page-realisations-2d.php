<?php get_header(); ?>

<section id="contenu" class="reference">
	<div id="gallery">
		<ul>
			<?php wp_reset_postdata(); ?>
			<?php query_posts('posts_per_page=-1&post_type=travaux'); ?>
			<?php if(have_posts() ): ?>
				<?php while(have_posts() ):the_post(); ?>
					<li class="content"><?php the_content(); ?></li>
				<?php endwhile ?>
			<?php endif ?>
	
		</ul>
	</div>
</section>
<?php get_footer(); ?>

