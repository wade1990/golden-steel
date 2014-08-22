<?php
/*
Template Name: faq
*/
?>
<?php get_header(); ?>

<div class="box790">
	<h1><?php the_title(); ?></h1>
	<div class="accordion">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	</div>

</div><!--.box790-->
				
<div class="box150">
			

</div><!--.box150-->		
		
<?php get_footer(); ?>