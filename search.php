<?php get_header(); ?>

<div class="box790">
	<h1 class="results">Your search results for: "<?php the_search_query() ?>"</h1>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
		<div class="blog">
			<h2><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h2>
			<?php if ( has_post_thumbnail()) : ?>
   			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>
			<?php the_excerpt(); ?>
		</div><!--.blog-->
	</article>
	
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	
	
	<div class="next-prev">
		
		<?php previous_posts_link('Prev Posts'); ?>
		<?php next_posts_link('Next Posts'); ?>
	</div><!--.next-prev-->

</div><!--.box790-->
				
<div class="box150">
		
			
		
</div><!--.box150-->


<?php get_footer(); ?>