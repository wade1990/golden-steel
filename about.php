<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>

<div class="box790">
<h1><?php the_title(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	<?php 	$args = array('orderby' => 'post__in','post_type' => 'page','post__in' => array(469,527,443,445));
		query_posts($args); ?>
		<?php while (have_posts()) : the_post(); ?>
		<article>
			<div class="blog">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php  the_excerpt(); ?>
			</div><!--.blog-->
		</article>

		<?php endwhile;?>
		


</div><!--.box790-->
				
<div class="box150">

</div><!--.box150-->		
		
<?php get_footer(); ?>