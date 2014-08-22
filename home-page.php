<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<div>
			<div class="flexslider">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php remove_filter( 'the_content', 'wpautop' ); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				
			</div><!--.flexslider-->
		</div><!--.box630-->
		<!--
		<div class="box310">
			<h1>Our Blog</h1>
			<?php query_posts(array('orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => 1, 'cat' => -24)); ?>
  			<?php while (have_posts()) : the_post(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p>Posted on <?php the_date('M j, Y'); ?></p>
				<?php if ( has_post_thumbnail()) : ?>
   					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   						<?php the_post_thumbnail(); ?>
  					</a>
				<?php endif; ?>

				<?php the_excerpt(); ?> 
  			<?php endwhile; ?>
	
		</div>
		-->
		<div class="clear"></div>
		
		<div class="box310 margin">
			<h2>About Our Kung Fu</h2>
			
			<?php query_posts( 'pagename=Kung Fu' ); ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_excerpt(); ?>
			<?php endwhile; ?>
		</div><!--.box310-->
		
		
		<div class="box310 margin">
			<h2>Our Photos</h2>
			<?php query_posts(array('category_name' => 'photos', 'posts_per_page' => 1, 'orderby' => 'rand')); ?>
  			<?php while (have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php if ( has_post_thumbnail()) : ?>
   					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   						<?php the_post_thumbnail(); ?>
  					</a>
				<?php endif; ?>

			<?php endwhile; ?>
		</div><!--.box310-->
		
		<div class="box310 margin">
			<h2>Our Location</h2>
			<p>International District/Chinatown Community Center</p>
			<a href="http://goo.gl/maps/kSmkQ" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/international.jpg"></a>
			<address>
				719 8th Ave. S<br>
				Seattle, WA 98104
			</address>
			<a href="tel:2062330042">(206)233-0042</a><br>
			<a href="http://goo.gl/maps/kSmkQ" target="_blank">Get Directions</a>
		</div><!--.box310-->


<?php get_footer(); ?>