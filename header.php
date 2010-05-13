<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="<?php echo bloginfo('template_directory'); ?>/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<script>
		jQuery( function ($) {
			$('.fancybox').attr('rel', 'group1').fancybox({
				padding : '5'
			});
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<header>
			<hgroup>
				<h1><a href="<?php echo get_bloginfo('url'); ?>">Svenneprøven 2010</a></h1>
				<h2>Av Torjus Bjåen</h2>
			</hgroup>
		</header>