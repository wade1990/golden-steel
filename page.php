<?php get_header(); ?>

<div class="box790">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

</div><!--.box790-->
				
<div class="box150">
		
			
		
</div><!--.box150-->


<?php get_footer(); ?>