<?php get_header(); ?>

<div class="box790">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php if ( in_category( 'photos' )) { ?>
		<div class="single">
			<h1><?php the_title(); ?></h1>
			<?php previous_post_link('%link','Previous', true); ?>
			<?php next_post_link('%link','Next', true); ?> 
			</div><!--.single-->
	
			<?php the_content(); ?>
	<?php } else { ?>
	
			<div class="single">
			<h1><?php the_title(); ?></h1>
			<?php previous_post_link('%link','Prev Post', true); ?>
			<?php next_post_link('%link','Next Post', true); ?> 
			</div><!--.single-->
			<p>Posted on <?php the_date('M j, Y'); ?></p>
			<?php the_content(); ?>
			
	<?php } ?>
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>			
	
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
			<?php } else { ?>
				<h3>More Blog Posts</h3>
				<ul>
				<?php 
					$args = array('cat' => -24,'orderby' => 'post_date', 'order' => 'DESC', 'posts_per_page' => -1); 
					$myposts = get_posts( $args );		
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endforeach; ?>



			<?php } ?>		
		</div><!--.box150-->		
		
		

<?php get_footer(); ?>