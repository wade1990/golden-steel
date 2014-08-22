</div><!--.container-->
</section>

<footer>
	<div class="footer-container">
		<div class="box470">
			<h2>International District/Chinatown Community Center</h2>
			<div class="box230">
				<a href="http://goo.gl/maps/kSmkQ" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/international.jpg"></a>
			</div>
			<div clas="box230">
			<address>
				719 8th Ave. S<br>
				Seattle, WA 98104
			</address>
			(206)233-0042<br>
			<a href="http://goo.gl/maps/kSmkQ" target="_blank">Get Directions</a>
			</div>
		</div><!--.box470-->
		
		<div class="box470">

		<a href="http://goo.gl/maps/kSmkQ" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/map.png" alt="Golden Steel Athletic Association location"></a>
		</div><!--.box470-->
		
		<div class="clear"></div>
		
		<div class="footer-menu">
			
			<p>
				Copyright &copy; <?php echo date('Y'); ?> 
				<a href="<?php bloginfo('url'); ?>" class="golden-steel"><?php bloginfo('name'); ?></a><br>
				Website by <a href="http://davidtproductions.com" target="_blank" class="designer">DavidTProductions.com</a>
			</p>
		</div>
	</div><!--.footer-container-->
</footer>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flexslider.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.10.4.custom.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>

<script>
var search = $('.search-icon');		
var hoverImg = function(selector, value1, value2){
	
var change = selector.hover(function(){
	selector.attr('src', value1);
}, function() {
	selector.attr('src', value2);

});
	return change;
};
	
hoverImg(search, "<?php bloginfo('stylesheet_directory'); ?>/images/search-hover.jpg", "<?php bloginfo('stylesheet_directory'); ?>/images/search.jpg");
		
</script>

<?php wp_footer(); ?>
</body>

</html>
