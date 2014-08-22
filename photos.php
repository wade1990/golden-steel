<?php
/*
Template Name: photos
*/
?>
<?php get_header(); ?>

<div class="box790">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

	<ul class="photos">
	<?php 
		$args = get_posts(array('orderby' => 'post_date', 'order' => 'DESC', 'category_name' => 'photos', 'posts_per_page' => -1)); 
		foreach ( $args as $post ) : setup_postdata( $post ); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
						<?php if ( has_post_thumbnail()) : ?>
   							<?php the_post_thumbnail('thumbnail'); ?>
						<?php endif; ?>
				</a>
			</li>
		<?php endforeach; ?>		
	</ul>
</div><!--.box790-->
				
<div class="box150">
			
	<?php if ( in_category( 'photos' )) { ?>
		<h3>More Photos</h3>
			<ul>
				<?php 
					$args = array('orderby' => 'post_date', 'order' => 'DESC', 'category_name' => 'photos', 'posts_per_page' => -1); 
					$myposts = get_posts( $args );		
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endforeach; ?>
			</ul>
	<?php } ?>
			
</div><!--.box150-->			

<?php get_footer(); ?>