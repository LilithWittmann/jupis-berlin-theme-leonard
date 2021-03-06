<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!--
			Licenses:
			=========
			• Facebook icon: (cc) by-nd by Quaqe9: http://www.quake9.com/
			• Twitter icon: from twitter itself: https://twitter.com/about/resources/logos
			• Header background: (cc) by by the Piratenpartei Switzerland: http://piratenpartei.ch/
			• Copse Font: by Dan Rhatigan, SIL Open Font License 1.1: http://ultrasparky.org/archives/2010/12/introducing_cop.html
			• Vollkorn Font: by Friedrich Althausen, SIL Open Font License 1.1: http://friedrichalthausen.de/?page_id=411
			
			Ressources:
			===========
			• Skyline: http://www.openclipart.org/detail/27938/berlin-skyline-by-wasat
			• Junge Piraten Logo: https://wiki.junge-piraten.de/wiki/Logo

			Original Design:
			===============
			• Leonard Techel - mail@telelo.de

			Wordpress-Theme:
			================
			• Felix Wittmann - support@felicius12.de
			• Leonard Techel - mail@telelo.de
			• Based on the One Column theme by Sadish Bala: http://wpthemes.info/one-column/
		-->
		<meta charset="<?php bloginfo('charset'); ?>" />
		<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<style>
			@font-face {
				font-family:	Copse;
				src:		url('<?php bloginfo('template_directory'); ?>/fonts/Copse-Regular.ttf');
			}
			@font-face {
				font-family:	Vollkorn;
				src:		url('<?php bloginfo('template_directory'); ?>/fonts/Vollkorn-Regular.ttf');
			}
			header {
				background:	url('<?php bloginfo('template_directory'); ?>/images/headerbg.jpg') repeat-x;
			}
		</style>
		<?php wp_head(); ?>
	</head>
	<body>		
		<header>	
			<h1> 
				<a href="<?php echo get_option('home'); ?>/"> 
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Junge Piraten Berlin"> 
					<span><?php bloginfo('name'); ?></span>
				</a> 
			</h1> 
			<section id="social"> 
				<a href="https://twitter.com/#!/JuPisBerlin"> 
					<img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter"> 
				</a> 
				
				<a href="https://facebook.com/JupisBerlin"> 
					<img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="facebook"> 
				</a>
			</section> 
			<nav> 
				<ul> 
					<li <?php if(is_home()){echo 'id="m_active"';}?>><a href="<?php bloginfo('siteurl'); ?>" title="Home">Home</a></li>
					<?php wp_list_pages('title_li=&depth=1&sort_column=menu_order');?>	     
				</ul>		
			</nav> 
		</header> 
		<?php get_sidebar(); ?>

