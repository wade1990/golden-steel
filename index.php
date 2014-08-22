<?php get_header(); ?>

<div class="box790">
	<h1>BLOG</h1>
	<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	query_posts("cat=-24&paged=$paged"); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<div class="blog">
				<?php if ( has_post_thumbnail()) : ?>
   					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   						<?php the_post_thumbnail(); ?>
  					</a>
				<?php endif; ?>

			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p>Posted on <?php the_time('M j, Y'); ?></p>
			<div class="clear"></div>
			
			<?php the_excerpt(); ?>
			</div><!--.blog-->
		</article>
						
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	
		

			
		</div><!--.box790-->
				
		<div class="box150">
		
			
		
		</div><!--.box150-->	

		<div class="next-prev">
		<?php next_posts_link('Next Posts'); ?>
		<?php previous_posts_link('Prev Posts'); ?>
		</div><!--.next-prev-->	

<?php get_footer(); ?>