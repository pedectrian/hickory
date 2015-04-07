<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
	<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php if(hick_option('hick_responsive')) : ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
	<?php endif; ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php if(hick_option('hick_favicon')) : ?>
	<link rel="shortcut icon" href="<?php echo hick_option('hick_favicon'); ?>" />
	<?php endif; ?>
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

	<!-- social likes -->
	<link rel="stylesheet" href="/social-likes.css">
	<script src="/social-likes.min.js"></script>

					<style>	
					#newsann{float:right;text-align: left; width: 30%;overflow:hidden;}
					/* #navigation ul {margin-left: -420px;} */
					.post-entry p{text-align: justify;}
					@media only screen and (max-width: 960px) {
					#newsann{float:none;text-align: left; width: 100%;margin-bottom: 20px;}
					}
					</style>
	
</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44581081-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

	<?php get_template_part("inc/headers/innerheader", hick_option('hick_header_layout')); ?>