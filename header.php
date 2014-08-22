<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<title> <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | Seattle Kung Fu</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/flexslider.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/css/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link rel="SHORTCUT ICON" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/>
<style>
@font-face {
	font-family: 'euro';
	src: url("<?php bloginfo('template_url'); ?>/css/fonts/eurosti-webfont.eot"),
	 url("<?php bloginfo('template_url'); ?>/css/fonts/eurosti-webfont.ttf"),
	 url("<?php bloginfo('template_url'); ?>/css/fonts/eurosti-webfont.svg"),
	 url("<?php bloginfo('template_url'); ?>/css/fonts/eurosti-webfont.woff");
}
@font-face {
	font-family: 'franklin';
	src: url("<?php bloginfo('template_url'); ?>/css/fonts/franklin.eot"),
	 url("<?php bloginfo('template_url'); ?>/css/fonts/franklin.ttf"),
	 url("<?php bloginfo('template_url'); ?>/css/fonts/franklin.svg"),
	 url("<?php bloginfo('template_url'); ?>/css/fonts/franklin.woff");
}
</style>
<?php wp_head(); ?>
</head>

<body>
<div style="width: 100%; height: 20px; background: #000;"></div>
<header>
<div class="container">

<div class="box470">
	<a href="<?php bloginfo('url'); ?>">
	<img src="<?php bloginfo('template_url'); ?>/images/golden-steel-logo.jpg" alt="Golden Steel Athletic Association"></a>
</div><!--.box470-->

<div class="box470">
	
	 <?php get_search_form(); ?> 	
	
	<div class="register">
		<a href="https://class.seattle.gov/parks/Activities/ActivitiesAdvSearch.asp" target="_blank">Register Online</a>
	</div>
	<h3 class="float-right">Search for class number 116375</h3>
	<h2 style="clear: both; text-align: right;">Classes Tuesday 7-8PM</h2>
	<div class="responsive">Menu &equiv; </div>
</div><!--.box470-->
</div><!--.container-->
</header>

<?php wp_nav_menu(array('menu' => 'main', 'container' => 'nav')); ?>

<section>
	<div class="container">
